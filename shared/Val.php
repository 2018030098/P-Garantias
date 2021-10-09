<?php
/*  Verificar que hay una sesion iniciada  */
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['Usr'])) {
        header("Location: index.php");
    }
/*  Lo que hace es verificar si existe una sesion antes de entrar a la pestaña, en caso de no existir lo
    redirecciona al login                                                                                 */
?>