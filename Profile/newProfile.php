<?php
    session_start();
    include('../shared/Conexion.php');

    try {
        if (isset($_POST['NewName']) && isset($_POST['NewJob']) && isset($_POST['NewDescription']) && isset($_POST['NewCompany']) && isset($_POST['NewEmail']) || $_POST['NewFoto']) {
            $NewEmail = $_POST['NewEmail'];
            $NewName = $_POST['NewName'];
            $NewJob = $_POST['NewJob'];
            $NewDescription = $_POST['NewDescription'];
            $NewCompany = $_POST['NewCompany'];
            // if($_FILES['NewFoto'] !== null){
            //     try {
            //         $typeImg = $_FILES['NewFoto']['type'];
            //         $nameImg = $_FILES['NewFoto']['name'];
            //         $sizeImg = $_FILES['NewFoto']['size'];
            //         $upImg = fopen($_FILES['NewFoto']['tmp_name'],'r');
            //         $binImg = fread($upImg,$sizeImg);
            //         $binImg = mysqli_escape_string($connection,$binImg);
            //     } catch (\Throwable $th) {
            //         echo "problema al extraer los binarios de la imagen";
            //         throw $th;
            //     }
            // }else{
            //     header('Location: ../index.php');
            //     die();
            // }
            // $NewPhoto = $binImg;
      
            // if ($_FILES['NewFoto'] !== null && $_FILES['NewFoto'] !== '') {
            //     $image = getimagesize($_FILES["NewFoto"]["tmp_name"]);
            //     if ($image !== false) {
            //         $image = $_FILES['NewFoto']['tmp_name'];
            //         $NewPhoto = addslashes(file_get_contents($image));
            //     } 
            // } else {
            //     header('Location: ../index.php');
            // }
            
            try {
                $stmt = $connection -> prepare($Upd_Usr); 
                $stmt -> bind_param("sssssbi",$NewEmail, $NewName, $NewJob, $NewDescription, $NewCompany, $NewPhoto, $_SESSION['id'] );
                $stmt -> execute();
                $stmt -> close();
            } catch (\Throwable $th) {
                echo 'problema al modificar el registro';
                throw $th;
            }
        }
        else{
            echo "falta un parametro";
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