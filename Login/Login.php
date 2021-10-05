<?php
// declaracion de las variables las cuales almacenan los valores ingresados en el formulario
    $Name = $_GET['LoginUsername'];
    $Password = $_GET['LoginPassword'];
 
// verificar que los campos del formulario no esten vacios
if (!empty($Name) || !empty($Password)) {
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "proyecto_garantias";

    try {
// estableciendo conexion con la base de datos, en caso de error el programa se terminara 
        $connection = new mysqli($host,$db_username,$db_password,$db_name);
    } catch (\Throwable $th) {
        echo "Problema la realizar la conexion";
        throw $th;
        die();
    }

// creacion de la query que nos validara si existe el usuario (y contraseña) ingresado 
    $SELECT = "SELECT * from usuarios WHERE Username = ? AND Password = ?";

    try {
        $stmt = $connection -> prepare($SELECT); // preparando la consulta
        $stmt -> bind_param("ss",$Name,$Password);  // enviando los valores a la consulta
        $stmt -> execute(); // ejecutando la consulta 
        $stmt -> store_result();    // almacenando resultados
        $val = $stmt -> num_rows(); // guardando el numero de resultados
        if($val == 1){  // si es 0 es que no hay registros, si el numero de resultados es mayor a 1 hay un problema en la base de datos, ya que no debe de haber nombres de usuarios repetidos
            header("Location: ../index.html");
        }else{
            header("Location: Login.html");
        }
    } catch (\Throwable $th) {
        echo "Problema al buscar el usuario";
        throw $th;
    }
}else{
    echo "los campos no deben de estar vacios";
}

?>