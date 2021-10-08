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
                    <li class="active">
                        <a href="page-3.php" class="text-decoration-none">
                            <i class="fa fa-book"></i>
                            <span> Pagina 3</span>
                        </a>
                    </li>
                    <li>
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
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Calendar</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Extra pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Calendar</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Draggable Events</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id='external-events'>
                        <p>Drag a event and drop into callendar.</p>
                        <div class='external-event navy-bg'>Go to shop and buy some products.</div>
                        <div class='external-event navy-bg'>Check the new CI from Corporation.</div>
                        <div class='external-event navy-bg'>Send documents to John.</div>
                        <div class='external-event navy-bg'>Phone to Sandra.</div>
                        <div class='external-event navy-bg'>Chat with Michael.</div>
                        <p class="m-t">
                            <input type='checkbox' id='drop-remove' class="i-checks" checked /> <label for='drop-remove'>remove after drop</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-content">
                    <h2>FullCalendar</h2> is a jQuery plugin that provides a full-sized, drag & drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is
                    easily configured to use your own feed format (an extension is provided for Google Calendar).
                    <p>
                        <a href="http://arshaw.com/fullcalendar/" target="_blank">FullCalendar documentation</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Striped Table </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
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