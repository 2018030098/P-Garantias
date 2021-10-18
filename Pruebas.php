<?php
    include('shared/Val.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/Bootstrap/bootstrap.min.css">

    <!-- Toastr style -->
    <link rel="stylesheet" href="assets/css/plugins/toastr/toastr.min.css">

    <!-- Gritter -->
    <link rel="stylesheet" href="assets/css/plugins/gritter/jquery.gritter.css">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/MyStyles.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu bg_backimg" id="side-menu">
                    <li class="nav-header w-100">
                        <div class="profile-element">
                            <a  class="text-decoration-none" href="home.php"> 
                                <div class="p-1 bg-light rounded">
                                    <img src="assets/img/Logo.png" alt="Imagen del logo" class="w-100">
                                </div>
                            </a>
                            <div class="sidebar-collapse">
                                <ul class="nav metismenu bg-transparent">
                                    <li class="bg-transparent">
                                        <a class="text-decoration-none" href="#"> <!-- block m-t-xs font-bold text-center -->
                                            <span class="nav-label">
                                                <?php
                                                    echo $_SESSION['Usr'];
                                                ?>
                                                Adrian
                                            </span>
                                            <b class="fa arrow"></b>
                                        </a>
                                        <ul class="nav nav-second-level collapse bg-transparent"> <!-- animated fadeInRight m-t-xs -->
                                            <li class="bg-transparent"><a class="text-decoration-none" href="home.php"> <b class="fas fa-chalkboard"></b> <span> Inicio </span> </a></li>
                                            <li class="bg-transparent"><a class="text-decoration-none" href="profile.php"> <b class="fas fa-address-card"></b> <span>Mi Perfil</span> </a></li>
                                            <hr>
                                            <li class="bg-transparent"><a class="text-decoration-none" href="Login/log_out.php"> <b class="fa fa-sign-out"></b> <span>Cerrar Sesion</span> </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="logo-element">
                            <a class="text-decoration-none" href="home.php">IN+</a>
                        </div>
                    </li>
                    <li class='<?php if($Active == 1){echo "active";} ?>'>
                        <a href="Social.php" class="text-decoration-none"> 
                            <i class="fab fa-trello"></i> 
                            <span class="nav-label">Social</span> 
                        </a>
                    </li>
                    <li class='<?php if($Active == 2){echo "active";} ?>'>
                        <a href="page-2.php" class="text-decoration-none ">
                            <i class="fas fa-chart-area"></i>
                            <span> Pagina 2</span>
                        </a>
                    </li>
                    <li class='<?php if($Active == 3){echo "active";} ?>'>
                        <a href="page-3.php" class="text-decoration-none ">
                            <i class="fas fa-columns"></i>
                            <span> Pagina 3</span>
                        </a>
                    </li>
                    <li class='<?php if($Active == 4){echo "active";} ?>'>
                        <a href="page-4.php" class="text-decoration-none ">
                            <i class="fas fa-bell"></i>
                            <span> Pagina 4</span>
                        </a>
                    </li>
                    <li class="<?php if($Active == ''){echo 'active';} ?>">
                        <a href="Pruebas.html" class="text-decoration-none ">
                            <i class="fas fa-cogs"></i>
                            <span> # Pruebas #</span>
                        </a>
                    </li>
                    <li class="<?php if($Active == ''){echo 'active';} ?>">
                        <a href="Pruebas2.html" class="text-decoration-none ">
                            <i class="fas fa-cogs"></i>
                            <span> # Pruebas2 #</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top " role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary me-4" href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li style="padding: 20px">
                            <span class="m-r-sm text-muted welcome-message">
                                <?php
                                    if($_SESSION['gender'] == 0){
                                          echo "Bienvenido ";
                                    }
                                    else{
                                          echo "Bienvenida";
                                    }
                                    echo $_SESSION['Name'];
                                ?>
                                bienvenido Adrian
                            </span>
                        </li>
                        <li>
                            <a href="Login/log_out.php" class="text-decoration-none">
                                <i class="fa fa-sign-out"></i> Cerrar Sesion
                            </a>
                        </li>
                    </ul>
                </nav>  
            </div>
            <div class="wrapper wrapper-content">
                <!--

                <div class='my-3'>
                    <div class='card text-center'>
                        <h1> Vacio </h1>
                    </div>
                </div>

                -->
                <!--  -->
               
                <?php
                    // session_start();
                    include("shared/Conexion.php");

                    if(isset($_REQUEST['guardar'])){
                        if(isset($_FILES['NewFoto']['name'])){
                            $typeImg = $_FILES['NewFoto']['type'];
                            $nameImg = $_FILES['NewFoto']['name'];
                            $sizeImg = $_FILES['NewFoto']['size'];
                            // $upImg = fopen($_FILES['NewFoto']['tmp_name'],'r');
                            // $binImg = fread($upImg,$sizeImg);
                            // $binImg = mysqli_escape_string($connection,$binImg);
                            $imagen = addslashes(file_get_contents($_FILES['NewFoto']['tmp_name']));

                            // echo "$binImg";
                            // echo "$imagen";
echo "<hr>";
                            $Ins_Img = "INSERT INTO `imagen_prueba`(`Nombre`,`Imagen`,`tipo`) VALUES ('$nameImg','$imagen','$typeImg')";

                            $res = mysqli_query($connection,$Ins_Img);
                            // $stmt = $connection -> prepare($Ins_Img); 
                            // $stmt -> bind_param("b", $imagen);
                            // $stmt -> execute();
                        }
                    }
                ?>

                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input id="NewFoto" name="NewFoto" type="file" class="form-control btn btn-light bg-gradient">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="guardar" class="btn btn-outline-success mt-3"> enviar </button>
                    </div>
                </form>
                <!--  -->
            </div>
        </div>
    </div>
<!--  -->         <!--  -->         <!--  -->         <!--  -->         <!--  -->         <!--  -->

    <!-- Mainly scripts -->
    <script src="assets/javaScripts/jquery-3.1.1.min.js"></script>
    <script src="assets/javaScripts/popper2.min.js"></script>
    <script src="assets/javaScripts/Bootstrap/bootstrap.min.js"></script>
    <script src="assets/javaScripts/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/javaScripts/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="https://kit.fontawesome.com/6aa6c40f89.js" crossorigin="anonymous"></script>

    <!-- Customs and plugin-->
    <script src="assets/javaScripts/inspinia.js"></script>
    <script src="assets/javaScripts/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/javaScripts/jquery-ui/jquery-ui.min.js"></script>

    <!-- toastr (notificaciones) -->
    <script src="assets/javaScripts/toastr/toastr.min.js"></script>

</body>
</html>