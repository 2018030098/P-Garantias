<?php

session_start();
if (isset($_SESSION['Usr'])) {
    header("Location: home.php");
}

include('shared/Conexion.php');
$ErrorLogin = '';

if (isset($_POST['LoginUsername']) && isset($_POST['LoginPassword'])) {

    $Usr = $_POST['LoginUsername'];
    $Password = md5($_POST['LoginPassword']); 

    try {
        $stmt = $connection -> prepare($Sel_Login); 
        $stmt -> bind_param("ss",$Usr,$Password);  
        $stmt -> execute(); 
        $stmt -> store_result();    
        $val = $stmt -> num_rows(); 
        if($val == 1){ 
            include('shared/All_Info/info_Usr.php');
            // por seguridad se les quita el valor a estos campos, ademas de que no son necesarios
            unset($_SESSION['psw']);
            $_SESSION['Time'] = time();
            header("Location: home.php");
        }else{
            $ErrorLogin = '
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger bg-danger alert-dismissible text-center m-3 p-2 border rounded shadow-sm" role="alert">
                        <h5 class="me-4 p-1">    Usuario y/o contraseña incorrecto   </h5> 
                        <button type="button" class="d-flex btn-close align-items-center" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                ';
        }
    } catch (\Throwable $th) {
        echo "Problema al buscar el usuario";
        throw $th;
    }
}
$connection -> close();
?>