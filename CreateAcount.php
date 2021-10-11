<?php

    include('Login/NewAcount.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/Bootstrap/bootstrap.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-secondary d-flex align-items-center justify-content-center">
    <div>
        <div class="middle-box text-center loginscreen animated fadeInDown gray-bg rounded shadow-lg">
            <div class="text-center">
                <img src="img/Logo.png" alt="Imagen del logo">
            </div>
            <div class="p-3">
                <div class="text-center p-2">
                    <h4>Crear Cuenta</h4>
                </div>
                <form action="CreateAcount.php" method="POST" class="text-muted">
                    <div class="mb-3">
                        <!-- username -->
                        <input id="NewUsername" name="NewUsername" type="text" class="form-control" placeholder="Nombre de Usuario" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <!-- password -->
                        <input id="NewPassword" name="NewPassword" type="password" class="form-control" placeholder="Contraseña" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <!-- confirmacion del password -->
                        <input id="ConfirmPassword" name="ConfirmPassword" type="password" class="form-control" placeholder="Confirmar Contraseña" autocomplete="off" required>
                    </div>
                    <div class="pb-1 d-grid g-0">
                        <button type="submit" class="btn bg-success">Registrar</button>
                    </div>
                </form>
                <hr>
                <a href="index.php" class="text-muted text-center text-decoration-none">Ya tengo cuenta</a>
            </div>
        </div>
        <div class="animated fadeInDown">
            <?php
                echo $ErrorCreateAcount;
            ?>
        </div>
    </div>

<!--  -->    <!-- Scripts externos -->    <!--  -->
    <script src="javaScripts/Bootstrap/bootstrap.min.js"></script>

</body>
</html>