<?php
/*  Verificar que hay una sesion iniciada  */

    //tiempo para que la sesion se cierre de manera automatica
    $tiempo = ( 1000 ) * 60;
    //_-_-_-_ minutos _-_-_-_-_-_-_-_-_-_-_-_-_-

    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['Usr'])) {
        header("Location: Login/log_out.php");
    }
    else if ((time() - $_SESSION['Time']) > $tiempo ) {
        header('Location: Login/log_out.php');
    }
    else {
        $_SESSION['Time'] = time();
    }
/*  Lo que hace es verificar si existe una sesion antes de entrar a la pestaña, en caso de no existir lo
    redirecciona al login                                                                                 */
?>