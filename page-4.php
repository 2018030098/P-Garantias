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
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Widgets</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Widgets</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget style1">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Today income </span>
                                <h2 class="font-bold">$ 4,232</h2>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Today degrees </span>
                            <h2 class="font-bold">26'C</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-envelope-o fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> New messages </span>
                            <h2 class="font-bold">260</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> New albums </span>
                            <h2 class="font-bold">12</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 1,540</h1>

                        <h3 class="font-bold no-margins">
                            Annual income
                        </h3>
                        <small>Income form project Alpha.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget lazur-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 210,660</h1>

                        <h3 class="font-bold no-margins">
                            Monthly income
                        </h3>
                        <small>Income form project Beta.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget yellw-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 50,992</h1>

                        <h3 class="font-bold no-margins">
                            Half-year revenue margin
                        </h3>
                        <small>Sales marketing.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart3"></div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-3">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h2 class="font-bold">217</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-3">
                                <i class="fa fa-thumbs-up fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h2 class="font-bold">400</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-3">
                                <i class="fa fa-rss fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h2 class="font-bold">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-3">
                                <i class="fa fa-phone fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h2 class="font-bold">120</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-3">
                                <i class="fa fa-euro fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h2 class="font-bold">462</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 yellow-bg">
                        <div class="row vertical-align">
                            <div class="col-3">
                                <i class="fa fa-shield fa-3x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h2 class="font-bold">610</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Alex Smith
                            </h2>
                                <small>Founder of Groupeq</small>
                            </div>
                            <img src="img/a4.jpg" class="rounded-circle circle-border m-b-md" alt="profile">
                            <div>
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Alex Smith</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-right">
                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a href="" class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-shield fa-4x"></i>
                            <h1 class="m-xs">456</h1>
                            <h3 class="font-bold no-margins">
                                Shield
                            </h3>
                            <small>power</small>
                        </div>
                    </div>
                    <div class="widget  p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-flash fa-4x"></i>
                            <h1 class="m-xs">612</h1>
                            <h3 class="font-bold no-margins">
                                Thunder
                            </h3>
                            <small>amount</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget lazur-bg p-xl">

                                <h2>
                                    Janet Smith
                                </h2>
                        <ul class="list-unstyled m-t-md">
                            <li>
                                <span class="fa fa-envelope m-r-xs"></span>
                                <label>Email:</label>
                                mike@mail.com
                            </li>
                            <li>
                                <span class="fa fa-home m-r-xs"></span>
                                <label>Address:</label>
                                Street 200, Avenue 10
                            </li>
                            <li>
                                <span class="fa fa-phone m-r-xs"></span>
                                <label>Contact:</label>
                                (+121) 678 3462
                            </li>
                        </ul>

                    </div>
                    <div class="widget red-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-bell fa-4x"></i>
                            <h1 class="m-xs">47</h1>
                            <h3 class="font-bold no-margins">
                                Notification
                            </h3>
                            <small>We detect the error.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                <div class="widget yellow-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-thumbs-up fa-4x"></i>
                        <h1 class="m-xs">520</h1>
                        <h3 class="font-bold no-margins">
                            Likes
                        </h3>
                        <small>amount</small>
                    </div>
                </div>
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-warning fa-4x"></i>
                            <h1 class="m-xs">Alarm</h1>
                            <h3 class="font-bold no-margins">
                                Do
                            </h3>
                            <small>something</small>
                        </div>
                    </div>
                    </div>
            </div>
        <div class="row m-t-lg">
            <div class="col-lg-6">
                <div class="ibox ">

                    <div class="ibox-content">

                        <div>
                <div class="chat-activity-list">

                    <div class="chat-element">
                        <a href="#" class="float-left">
                            <img alt="image" class="rounded-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="float-right text-navy">1m ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element right">
                        <a href="#" class="float-right">
                            <img alt="image" class="rounded-circle" src="img/a4.jpg">
                        </a>
                        <div class="media-body text-right ">
                            <small class="float-left">5m ago</small>
                            <strong>John Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element ">
                        <a href="#" class="float-left">
                            <img alt="image" class="rounded-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="float-right">2h ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                </div>
                </div>
                        <div class="chat-form">
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Send message</strong></button>
                                </div>
                            </form>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-danger m-r-sm">12</button>
                                Total messages
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">28</button>
                                Posts
                            </td>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">15</button>
                               Comments
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">20</button>
                                News
                            </td>
                            <td>
                                <button type="button" class="btn btn-success m-r-sm">40</button>
                                Likes
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger m-r-sm">30</button>
                                Notifications
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-warning m-r-sm">20</button>
                                Albums
                            </td>
                            <td>
                                <button type="button" class="btn btn-default m-r-sm">40</button>
                                Groups
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning m-r-sm">30</button>
                                Permissions
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ibox-content text-center">
                                <h1>Nicki Smith</h1>
                                <div class="m-b-sm">
                                        <img alt="image" class="rounded-circle" src="img/a8.jpg">
                                </div>
                                        <p class="font-bold">Consectetur adipisicing</p>

                                <div class="text-center">
                                    <a href=""  class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a href="" class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ibox-content">
                                <div>
                                    <div>
                                        <span>Memory</span>
                                        <small class="float-right">10/200 GB</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 60%;" class="progress-bar"></div>
                                    </div>

                                    <div>
                                        <span>Bandwidth</span>
                                        <small class="float-right">20 GB</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 50%;" class="progress-bar"></div>
                                    </div>

                                    <div>
                                        <span>Activity</span>
                                        <small class="float-right">73%</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 40%;" class="progress-bar"></div>
                                    </div>

                                    <div>
                                        <span>FTP</span>
                                        <small class="float-right">400 GB</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox-content">
                    <h2>TODO List</h2>
                    <small>This is example of task list</small>
                    <ul class="todo-list m-t">
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks"/>
                            <span class="m-l-xs">Buy a milk</span>
                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" checked/>
                            <span class="m-l-xs">Go to shop and find some products.</span>
                            <small class="label label-info"><i class="fa fa-clock-o"></i> 3 mins</small>
                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" />
                            <span class="m-l-xs">Send documents to Mike</span>
                            <small class="label label-warning"><i class="fa fa-clock-o"></i> 2 mins</small>
                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks"/>
                            <span class="m-l-xs">Go to the doctor dr Smith</span>
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> 42 mins</small>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox ">
                    <div class="ibox-content">
                        <h2>TODO Small version</h2>
                        <small>This is example of small version of todo list</small>
                        <ul class="todo-list m-t small-list">
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs todo-completed">Buy a milk</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs  todo-completed">Go to shop and find some products.</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Send documents to Mike</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Go to the doctor dr Smith</span>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Plan vacation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-12">
                <div class="ibox-content">
                    <h2>Word map</h2>
                    <small>This is simple example of map</small>
                <div id="world-map" style="height: 300px;"></div>
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