<?php
    include('Login/Login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

                    <!-- Bootstrap5 -->
    <link rel="stylesheet" href="css/Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/Bootstrap/bootstrap.css.map">
    <link rel="stylesheet" href="css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/Bootstrap/bootstrap.min.css.map">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/MyStyles.css">
</head>
<body class="bg-secondary">
<div>
<div class="middle-box text-center loginscreen animated fadeInDown gray-bg rounded shadow-lg MrgSty">
        <div class="p-3">
            <div class="text-center">
                <!-- <h2 class="display-5">Logo</h2> -->
                <img src="img/Logo.png" alt="Imagen del logo">
            </div>
            <div class="my-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aliquam molestias unde doloremque minima optio?
            </div>
            <!-- Formulario del login -->
            <div>
                <div class="text-center p-2">
                    <h4>Iniciar Sesion</h4>
                </div>
                <form action="index.php" method="POST" class="text-muted">
                    <div class="mb-3">
                        <!-- input del username -->
                        <input id="LoginUsername" name="LoginUsername" type="text" class="form-control" placeholder="Nombre de Usuario" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <!-- input del password -->
                        <input id="LoginPassword" name="LoginPassword" type="password" class="form-control" placeholder="Contraseña" autocomplete="off" required>
                    </div>
                    <div class="pb-1 d-grid g-0">
                        <button type="submit" class="btn bg-success">Ingresar</button>
                    </div>
                </form>
                <!-- formulario el cual añade un boton para ir a registrar un nuevo usuario --> <!-- se encuentra escondido al no se necesario -->
                <form action="CreateAcount.php" method="POST" class="d-none">
                    <hr>
                    <div class="mb-3">
                        <p class="text-white"> no tienes cuenta? </p>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn bg-info"> crea una cuenta</button>
                    </div>
                </form>
            </div>
        </div>  
    </div>
    <div class="animated fadeInDown">
        <?php
            echo $ErrorLogin;
        ?>
    </div>
</div>
<!--  -->    <!-- Scripts externos -->    <!--  -->
    <script src="javaScripts/Bootstrap/bootstrap.min.js"></script>
</body>
</html>