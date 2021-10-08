<?php
    session_start();
    $Usr = $_SESSION['Usr'];
    $BodyHtml = "
        <div class='container mx-5 my-5'>
            <div class='card text-center'>
                <h1> Bienvenido $Usr </h1>
            </div>
        </div>
        ";
    include('shared/NavBars.php');
?>