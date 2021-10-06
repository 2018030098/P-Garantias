<?php

session_start();
if (isset($_SESSION['Usr'])) {
    header("Location: home.php");
}

include('Conexion.php');
$ErrorLogin = '';

if (isset($_POST['LoginUsername']) && isset($_POST['LoginPassword'])) {

    $Name = $_POST['LoginUsername'];
    $Password = $_POST['LoginPassword'];

    try {
        $stmt = $connection -> prepare($Sel_Validacion); 
        $stmt -> bind_param("ss",$Name,$Password);  
        $stmt -> execute(); 
        $stmt -> store_result();    
        $val = $stmt -> num_rows(); 
        if($val == 1){ 
            $_SESSION['Usr'] = $Name;
            header("Location: home.php");
        }else{
            $ErrorLogin = '
                <div class="d-flex justify-content-center">
                    <h5 class="bg-danger opacity-75 text-white text-center d-inline mb-3 p-2 border rounded shadow-sm">
                        Usuario y/o contraseña incorrecto
                    </h5>
                </div>
            ';
        }
    } catch (\Throwable $th) {
        echo "Problema al buscar el usuario";
        throw $th;
    }
}
?>