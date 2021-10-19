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

    $Sel_UsrById = "SELECT * from usuarios WHERE Id = ?";
    $Sel_TckById = "SELECT * from tickets WHERE Id = ?";

    $Sel_Comments = "SELECT * from comentarios_tickets WHERE tickets_Id = ?";
    $Ins_NewComment = "INSERT INTO `comentarios_tickets`(`Comentario`, `Fecha-y-Hora`, `tickets_Id`, `usuarios_Id`) VALUES (?,?,?,?)";

    $Upd_Usr = "UPDATE usuarios SET Email = ?, Nombre = ?, Puesto = ?, Descripcion = ?, Empresa = ? WHERE id = ?";
                
/*----------*/
?>