<?php

session_start();
if (isset($_SESSION['Usr'])) {
    header("Location: home.html");
}

include('Conexion.php');

$Name = $_POST['LoginUsername'];
$Password = $_POST['LoginPassword'];

if (isset($Name) && isset($Password)) {

    $SELECT = "SELECT * from usuarios WHERE Username = ? AND Password = ?";

    try {
        $stmt = $connection -> prepare($SELECT); 
        $stmt -> bind_param("ss",$Name,$Password);  
        $stmt -> execute(); 
        $stmt -> store_result();    
        $val = $stmt -> num_rows(); 
        if($val == 1){ 
            $_SESSION['Usr'] = $Name;
            header("Location: home.html");
        }else{
            $ErrorLogin = 
                ' <div class="container bg-danger opacity-75">
                        <p class="text-center p-2 text-white"> Usuario y/o contraseña incorrectos </p>
                    </div>';
            // include($ErrorLogin);
            header('Location: index.php');
        }
    } catch (\Throwable $th) {
        echo "Problema al buscar el usuario";
        throw $th;
    }
}else{
    echo "los campos no deben de estar vacios";
}
?>