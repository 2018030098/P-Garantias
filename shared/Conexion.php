<?php
/*  Conexion a la base de datos  */
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "garantias";

    try {
        $connection = new mysqli($host,$db_username,$db_password,$db_name);
    } catch (\Throwable $th) {
        echo "Problema al realizar la conexion";
        throw $th;
        die();
    }
/*------------------------------*/

/*  querys  */
    $Sel_Login = "SELECT * from usuarios WHERE Username = ? AND Password = ?";

    $Sel_NewAcount = "SELECT * from usuarios WHERE Username = ?";
    $Ins_NewAcount = "INSERT INTO `usuarios`(`Username`, `Password`) VALUES (?,?)";

    $Sel_Tickets = "SELECT * from tickets";

/*----------*/
?>