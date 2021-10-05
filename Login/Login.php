<?php
include('Conexion.php');

    $Name = $_POST['LoginUsername'];
    $Password = $_POST['LoginPassword'];

if (!empty($Name) || !empty($Password)) {

    $SELECT = "SELECT * from usuarios WHERE Username = ? AND Password = ?";

    try {
        $stmt = $connection -> prepare($SELECT); 
        $stmt -> bind_param("ss",$Name,$Password);  
        $stmt -> execute(); 
        $stmt -> store_result();    
        $val = $stmt -> num_rows(); 
        if($val == 1){ 
            header("Location: ../../INSPINIA/inspinia_v2.9.3/HTML5_Full_Version/index.html");
        }else{
            $ErrorLogin = 
                   ' <div class="container bg-danger opacity-75">
                        <p class="text-center p-2 text-white"> Usuario y/o contraseña incorrectos </p>
                    </div>';
            include_once 'login.html';
        }
    } catch (\Throwable $th) {
        echo "Problema al buscar el usuario";
        throw $th;
    }
}else{
    echo "los campos no deben de estar vacios";
}
?>