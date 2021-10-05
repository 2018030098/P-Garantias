<?php

    $Name = $_GET['LoginUsername'];
    $Password = $_GET['LoginPassword'];
 
if (!empty($Name) || !empty($Password)) {
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "proyecto_garantias";

    try {
        $connection = new mysqli($host,$db_username,$db_password,$db_name);
    } catch (\Throwable $th) {
        echo "Problema la realizar la conexion";
        throw $th;
        die();
    }

    $SELECT = "SELECT * from usuarios WHERE Username = ? AND Password = ?";

    try {
        $stmt = $connection -> prepare($SELECT);
        $stmt -> bind_param("ss",$Name,$Password);
        $stmt -> execute();
        $stmt -> store_result();
        $val = $stmt -> num_rows();
        if($val == 1){
            header("Location: ../index.html");
        }else{
            header("Location: Login.html");
        }
    } catch (\Throwable $th) {
        echo "Problema al buscar el usuario";
        throw $th;
    }
}

?>