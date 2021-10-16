<?php
    session_start();
    include('../shared/Conexion.php');

    try {
        if (isset($_POST['NewName']) && isset($_POST['NewJob']) && isset($_POST['NewDescription']) && isset($_POST['NewCompany']) && isset($_POST['NewEmail'])) {
            $NewEmail = $_POST['NewEmail'];
            $NewName = $_POST['NewName'];
            $NewJob = $_POST['NewJob'];
            $NewDescription = $_POST['NewDescription'];
            $NewCompany = $_POST['NewCompany'];
            $NewFoto = $_POST['NewFoto'];
            try {
                $stmt = $connection -> prepare($Upd_Usr); 
                $stmt -> bind_param("sssssbi",$NewEmail, $NewName, $NewJob, $NewDescription, $NewCompany, $NewFoto, $_SESSION['id'] );
                $stmt -> execute();
                $stmt -> close();
            } catch (\Throwable $th) {
                echo 'problema al modificar el registro';
                throw $th;
            }
        }
    } catch (\Throwable $th) {
        echo "<hr>problema al iniciar<hr>";
        
        throw $th;
    }
    try {
        $stmt = $connection -> prepare($Sel_NewAcount); 
        $stmt -> bind_param("s",$_SESSION['Usr']);  
        $stmt -> execute(); 
        include('../shared/All_Info/info_Usr.php');
        header('Location: ../profile.php');
    } catch (\Throwable $th) {
        echo "<hr>problema al guardar las nuevas variables<hr>";
        throw $th;
    }
?>