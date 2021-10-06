<?php
    include('../Conexion.php');
    session_start();

    $Name = $_POST['LoginUsername'];
    $Password = $_POST['LoginPassword'];

    if(isset($_SESSION['user'])){
        header('Location: Home.html');
    }
    else if(!empty($Name) || !empty($Password)){

        $SELECT = "SELECT * from usuarios WHERE Username = ? AND Password = ?";

        try {
            $stmt = $connection -> prepare($SELECT); 
            $stmt -> bind_param("ss",$Name,$Password);  
            $stmt -> execute(); 
            $stmt -> store_result();    
            $val = $stmt -> num_rows();
            if($val == 1){
                $_SESSION['user'] = $Name;
                header('Location: Home.html');
            }
            else{
                header('Location: Login/Login.html');
            } 
        } catch (\Throwable $th) {
            echo "Problema al buscar el usuario";
            throw $th;
        }
    }
    else{
        echo "los campos no deben de estar vacios";
    }
    
    // header("Location: ../../INSPINIA/inspinia_v2.9.3/HTML5_Full_Version/index.html");
    // include_once 
    

    // header("Location: ../Login.php");
    // include_once '../Login.html';
?>