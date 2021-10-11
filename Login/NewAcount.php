<?php

session_start();
include('shared/Conexion.php');
$ErrorCreateAcount = '';
unset($_SESSION['Msg']);

if (isset($_POST['NewUsername']) && isset($_POST['NewPassword']) && isset($_POST['ConfirmPassword'])) {

    $Name = $_POST['NewUsername'];
    
    if ($_POST['NewPassword'] === $_POST['ConfirmPassword']) {
        $Password = md5($_POST['NewPassword']); 
        try {
            $stmt = $connection -> prepare($Sel_NewAcount); 
            $stmt -> bind_param("s",$Name);  
            $stmt -> execute(); 
            $stmt -> store_result();    
            $val = $stmt -> num_rows(); 
            if($val == 0){ 
                try {
                    $stmt -> close();
                    $stmt = $connection -> prepare($Ins_NewAcount); 
                    $stmt -> bind_param("ss",$Name,$Password);  
                    $_SESSION['Msg'] = "
                    <div class='d-flex justify-content-center'>
                        <div class='alert alert-success bg-success alert-dismissible text-center m-3 p-2 border rounded shadow-sm' role='alert'>
                            <h5 class='me-4 p-1'>    Usuario creado exitosamente   </h5> 
                            <button type='button' class='d-flex btn-close align-items-center' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                    ";
                    $stmt -> execute(); 
                    $_SESSION['Usr'] = $Name;
                    $_SESSION['Time'] = time();
                    header("Location: home.php");
                } catch (\Throwable $th) {
                    echo "Problema al registrar usuario";
                    throw $th;
                }
            }else{
                $ErrorCreateAcount = '
                    <div class="d-flex justify-content-center">
                        <div class="alert alert-danger bg-danger alert-dismissible text-center m-3 p-2 border rounded shadow-sm" role="alert">
                            <h5 class="me-4 p-1">    El Usuario ya Existe   </h5> 
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
    else{
        $ErrorCreateAcount = '
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger bg-danger alert-dismissible text-center m-3 p-2 border rounded shadow-sm" role="alert">
                    <h5 class="me-4 p-1">    Las contraseñas no Coinciden   </h5> 
                    <button type="button" class="d-flex btn-close align-items-center" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        ';
    }
}

?>