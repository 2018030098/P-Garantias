<?php
/*  Terminar con la sesion iniciada  */
    session_start();

    session_unset();
    session_destroy();
    
    header('Location: ../index.php');
?>