<?php
    session_start();
    include('shared/Conexion.php');

    try {
        $stmt = $connection -> prepare($Sel_NewAcount); 
        $stmt -> bind_param("s",$_SESSION['Usr']);  
        $stmt -> execute(); 
        include('shared/All_Info/info_Usr.php');
    } catch (\Throwable $th) {
        echo "No se pudo actualizar la informacion";
        throw $th;
    }

    try {
        if (isset($_POST['NewName']) && isset($_POST['NewJob']) && isset($_POST['NewDescription']) && isset($_POST['NewCompany']) && isset($_POST['NewEmail'])) { // || $_POST['NewFoto']
            $NewEmail = $_POST['NewEmail'];
            $NewName = $_POST['NewName'];
            $NewJob = $_POST['NewJob'];
            $NewDescription = $_POST['NewDescription'];
            $NewCompany = $_POST['NewCompany'];

            try {
                $stmt = $connection -> prepare($Upd_Usr); 
                $stmt -> bind_param("sssssi",$NewEmail, $NewName, $NewJob, $NewDescription, $NewCompany, $_SESSION['id'] );
                $stmt -> execute();
                $stmt -> close();

                // if( ($_FILES['NewFoto']['tmp_name']) === null ){
                //     header('Location: ../index.php');
                //     die();
                    $imagen = file_get_contents($_FILES['NewFoto']['tmp_name']);
                    $Upd_Img = "UPDATE 'usuarios' SET 'Imagen' = $imagen";
                    $res = mysqli_query($connection,$Upd_Img);
                // }

            } catch (\Throwable $th) {
                echo 'problema al modificar el registro';
                throw $th;
            }
            try {
                $stmt = $connection -> prepare($Sel_NewAcount); 
                $stmt -> bind_param("s",$_SESSION['Usr']);  
                $stmt -> execute(); 
                include('shared/All_Info/info_Usr.php');
                header('Location: profile.php');
            } catch (\Throwable $th) {
                echo "<hr>problema al guardar las nuevas variables<hr>";
                throw $th;
            }
        }
        else{
            // echo "falta un parametro";
        }
    } catch (\Throwable $th) {
        echo "<hr>problema al iniciar<hr>";
        
        throw $th;
    }
?>