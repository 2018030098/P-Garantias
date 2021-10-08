<?php
    include('shared/Val.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap5 -->
    <link rel="stylesheet" href="css/Bootstrap/bootstrap.min.css">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header w-100">
                        <div class="profile-element">
                            <div class="p-1 bg-light rounded">
                                <img src="img/Logo.png" alt="Imagen del logo" class="w-100">
                            </div>
                            <!-- no funciona el dropdown -->
                            <a  class="text-decoration-none" href="home.php"> 
                                <span class="block m-t-xs font-bold text-center">
                                    <?php
                                        echo $_SESSION['Usr'];
                                    ?>
                                </span>
                                <!-- <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> -->
                            </a>
                        </div>
                        <div class="logo-element bg-success">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="page-1.php" class="text-decoration-none">
                            <i class="fa fa-book"></i>
                            <span> Pagina 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="page-2.php" class="text-decoration-none">
                            <i class="fa fa-book"></i>
                            <span> Pagina 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="page-3.php" class="text-decoration-none">
                            <i class="fa fa-book"></i>
                            <span> Pagina 3</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="page-4.php" class="text-decoration-none">
                            <i class="fa fa-book"></i>
                            <span> Pagina 4</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-success " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>

            <ul class="nav navbar-top-links navbar-right">
                <li style="padding: 20px">
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li>
                    <a href="Login/log_out.php" class="text-decoration-none">
                        <i class="fa fa-sign-out"></i> Cerrar Sesion
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<!--  -->
<div class="wrapper wrapper-content animated fadeInRight">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/angular_logo.png" alt="AngularJS">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h1>Inspinia <span class="text-navy"> <br>AngularJs</span></h1>
                                            <small>Supported AngularJs version</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    <strong>Inspinia <span class="text-navy">AngularJs</span></strong> is supported AngularJS version of INSPINIA theme.<br>
                                                    This version contains a number of controllers and directives written specifically to support angular framework.
                                                    <br>
                                                    <strong>Angular version is writen with Opinionated AngularJS styleguide for teams</strong>. (https://github.com/toddmotto/angularjs-styleguide).
                                                    <br>
                                                    In project folder you find also <strong class="text-navy">SeedProject</strong> It is an application skeleton for a typical AngularJS web app. You can use it
                                                    to quickly bootstrap your angular
                                                    webapp projects and dev environment for these projects.
                                                </p>

                                                <p class="text-center m-t-md">
                                                    <a target="_blank" href="Angular/" class="btn btn-primary">Live AngularJS version</a>
                                                </p>
                                            </div>
                                            <div>

                                                <div class="text-center">
                                                    <small>If you need any help feel free to write to us on support@webapplayers.com.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/mvc_logo.png" alt="MVC" style="width: 120px">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h1>Inspinia <span class="text-success"><br>ASP.NET MVC5, <br/> .NET Core 1.0</span></h1>
                                            <small>Supported ASP.NET MVC5 version</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    <strong>Inspinia <span class="text-success">MVC5</span></strong> is supported ASP.NET MVC5 version of INSPINIA theme.<br>
                                                    This version contains a ASP.NET MVC5 project written in Visual Studio 2013 for .net developers.
                                                    <br>

                                                    Project has implemented all the plug-ins and it is created in accordance with the convention MVC5.
                                                    In addition, this version has a scaffolding templates that will help you quickly write applications using Entity Framework.
                                                    This version also has <strong class="text-success">SeedProject</strong>  -  a skeleton application that halp you easy start a new project.
                                                </p>

                                            </div>
                                            <div>

                                                <div class="text-center">
                                                    <small>If you need any help feel free to write to us on support@webapplayers.com.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/meteor_logo.png" alt="HTML" style="width: 200px;margin-top: 20px">
                                        </div>

                                        <div class="text-center m-t-lg">
                                            <h1>Inspinia <span class="font-bold" style="color: black;"><br>Meteor</span></h1>
                                            <small>Meteor.js version</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    <strong>Inspinia <span class="font-bold" style="color: black;">METEOR</span></strong> is supported Meteor version. Meteor.js is
                                                    an open-source platform built on Node and MongoDB. <br>This version
                                                    contains Meteor project with designs and components form HTML/JS
                                                    version. Project has implemented all plugins and it is created in
                                                    accordance with the convention of Meteor structure. The code is
                                                    clean and all templates are well structured. It use Iron.Router for
                                                    routes management. Like other versions this version also has
                                                    <strong style="color:black">SeedProject</strong> - a skeleton application that help you easy start a new
                                                    Meteor app.

                                                </p>

                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    <small>If you need any help feel free to write to us on support@webapplayers.com.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">


                                    <div class="col-md-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/html_logo.png" alt="HTML" style="width: 100px">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h1>Inspinia <span class="text-danger"><br>Static HTML/JS</span></h1>
                                            <small>Static HTML/JS version</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    <strong>Inspinia <span class="text-danger">HTML/JS</span></strong> is static version of INSPINIA theme.<br>
                                                    This version contains all components and plugin created with strict HTML and jQuery.
                                                    <br>
                                                    This version is great if you are a PHP or JAVA programmer.
                                                    As each page is created separately it allows you to quickly implement it for your project by including needed resources.
                                                    The code is clean and clear so you should not have any problems with its implementation.
                                                    Like in all is has also implemented more than 30 plugins which allow you to give your application a great new functionality.
                                                </p>

                                                <p class="text-center m-t-md">
                                                    <a target="_blank" href="index.html" class="btn btn-danger">Live HTML/JS version</a>
                                                </p>
                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    <small>If you need any help feel free to write to us on support@webapplayers.com.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/rails_logo.png" alt="HTML" style="width: 80px">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h1>Inspinia <span class="text-warning"><br> Ruby on Rails</span></h1>
                                            <small>Ruby on Rails version</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    <strong>Inspinia <span class="text-warning">Rails</span></strong> is Ruby on Rails version of INSPINIA theme.<br>
                                                    This version contains Ruby on Rails project with all designs from Inspinia static version.
                                                    <br>

                                                    This version is great if you are a Ruby on Rails programmer.
                                                    It is created with elementary Rails controllers to demonstrate skeleton Rails app with all views and components.
                                                    Like other versions this version also has <span class="text-warning"><strong>SeedProject</strong></span>  - a skeleton application that halp you easy start a new Rails app.
                                                </p>

                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    <small>If you need any help feel free to write to us on support@webapplayers.com.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center m-t-lg">
                                            <img src="img/starter_logo.jpg" alt="HTML">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h1>Inspinia <span class="text-info"><br> Starter Projects</span></h1>
                                            <small>Special starter projects</small>
                                        </div>
                                        <div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="text-center p-m">
                                                <p>
                                                    To help you start any project with Inspinia we provided three special starter projects for <strong><span class="text-info">ReactJS, Angular 2 and Laravel.</span></strong>  In the future
                                                    all those frameworks will have own full version of Inspinia. But if you dont want to wait for full version and want to just jump to the code
                                                    and start developing your app you can use those three <strong><span class="text-info">special starter projects</span></strong>.
                                                     <br>

                                                    They should save you a lot of work on initial integration Inspinia theme to those new frameworks.
                                                </p>

                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    <small>If you need any help feel free to write to us on support@webapplayers.com.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>

        </div>
<!--  -->
    <script src="https://kit.fontawesome.com/6aa6c40f89.js" crossorigin="anonymous"></script>

    <!-- Mainly scripts -->
    <script src="javaScripts/jquery-3.1.1.min.js"></script>
    <script src="javaScripts/jquery-2.1.1.js"></script>
    <script src="javaScripts/popper.min.js"></script>
    <!-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script> -->
    <script src="javaScripts/Bootstrap/bootstrap.min.js"></script>
    <script src="javaScripts/metisMenu/jquery.metisMenu.js"></script>
    <script src="javaScripts/slimscroll/jquery.slimscroll.min.js"></script>
    
    <!-- Customs and plugin-->
    <script src="javaScripts/inspinia.js"></script>
    <script src="javaScripts/pace/pace.min.js"></script>
    
    <!-- toastr (notificaciones) -->
    <script src="javaScripts/toastr/toastr.min.js"></script>

    <!-- jQuery UI -->
    <script src="javaScripts/jquery-ui/jquery-ui.min.js"></script>
</body>
</html>