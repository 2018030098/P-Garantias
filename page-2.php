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
                    <li class="active">
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
<div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5 class="m-b-md">Server status Q12</h5>
                                <h2 class="text-navy">
                                    <i class="fa fa-play fa-rotate-270"></i> Up
                                </h2>
                                <small>Last down 42 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content ">
                                <h5 class="m-b-md">Server status Q13</h5>
                                <h2 class="text-navy">
                                    <i class="fa fa-play fa-rotate-270"></i> Up
                                </h2>
                                <small>Last down 42 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5 class="m-b-md">Server status Q42</h5>
                                <h2 class="text-danger">
                                    <i class="fa fa-play fa-rotate-90"></i> Down
                                </h2>
                                <small>Server down since 4 days</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5 class="m-b-md">Server status Q43</h5>
                                <h2 class="text-danger">
                                    <i class="fa fa-play fa-rotate-90"></i> Down
                                </h2>
                                <small>Server down since 4:32 pm.</small>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Visits in last 24h</h5>
                                <h2>198 009</h2>
                                <div id="sparkline1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Visits week</h5>
                                <h2>65 000</h2>
                                <div id="sparkline2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Last month</h5>
                                <h2>680 900</h2>
                                <div id="sparkline3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Avarage time</h5>
                                <h2>00:06:40</h2>
                                <div id="sparkline4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>65%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 68%;" class="progress-bar"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>50%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>14%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Usage</h5>
                                <h2>20%</h2>
                                <div class="progress progress-mini">
                                    <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                </div>

                                <div class="m-t-sm small">Server down since 4:32 pm.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage distribution</h5>
                                <h2>42/20</h2>
                                <div class="text-center">
                                    <div id="sparkline5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage division</h5>
                                <h2>100/54</h2>
                                <div class="text-center">
                                    <div id="sparkline6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage distribution</h5>
                                <h2>685/211</h2>
                                <div class="text-center">
                                    <div id="sparkline7"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Percentage division</h5>
                                <h2>240/32</h2>
                                <div class="text-center">
                                    <div id="sparkline8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income</h5>
                                <h1 class="no-margins">886,200</h1>
                                <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income last month</h5>
                                <h1 class="no-margins">1 738,200</h1>
                                <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income last day</h5>
                                <h1 class="no-margins">-200,100</h1>
                                <div class="stat-percent font-bold text-danger">12% <i class="fa fa-level-down"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Income all</h5>
                                <h1 class="no-margins">54,200</h1>
                                <div class="stat-percent font-bold text-danger">24% <i class="fa fa-level-down"></i></div>
                                <small>Total income</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>All new alerts</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Alerts</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-navy"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>All messages</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-content">
                                <h5>Last notification</h5>
                                <table class="table table-stripped small m-t-md">
                                    <tbody>
                                    <tr>
                                        <td class="no-borders">
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td  class="no-borders">
                                            Example element 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle text-danger"></i>
                                        </td>
                                        <td>
                                            Example element 3
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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