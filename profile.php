<?php
    session_start();
    $Time = $_SESSION['Time'];

    $usr = $_SESSION['Usr'];
    $email = $_SESSION['email'];
    $name = $_SESSION['Name'];
    if ($_SESSION['gender'] === 0) {
            $gender = 'Hombre';
    }else{
        $gender = 'Mujer';
    }
    if ($_SESSION['img'] === NULL) {
        $img = "assets/img/user_icon-icons.com_57997.svg";
    }

    $Active = 0;
    $BodyHtml = '';
    include('shared/navbar/navbar.html');
?>
    <html>
        <div class="card animated fadeInUp bg-transparent border-0">
            <div class="card-body">
                <div class="row d-flex my-2 shadow rounded">
                    <div class="col-3 justify-content-center bg-white">
                        <div class="row "> <!-- w-75 -->
                            <img src="assets/img/user_icon-icons.com_57997.svg" class="rounded-circle circle-border m-b-md" alt="">
                        </div>
                        <div class="row "> <!-- w-75 -->
                            <h2 class="text-center">
                                <?php   echo $_SESSION['Usr'];   ?>
                            </h2>
                        </div>
                    </div>

                    <div class="col-6 align-items-center bg-white">
                        <div class="row mt-5">
                            <p class="display-6">
                                <?php   echo $_SESSION['Name'];   ?>
                            </p>
                        </div>
                        <div class="row">
                            <h3>
                                <?php   echo $_SESSION['job'];   ?>
                            </h3>
                        </div>
                        <div class="row my-4">
                            <p>
                                <?php   echo $_SESSION['dsc'];   ?>
                            </p>
                        </div>
                        <div class="row d-flex">
                            <div class="justify-content-end">
                                <p class="text-end lead">
                                    <?php   echo $_SESSION['emp'];   ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 bg-white">
                        <div class="row-6 h6 mt-3">
                            <div class="col-auto ms-auto">
                                <p>
                                    <?php   echo $_SESSION['email'];   ?>
                                    <b class="fas fa-at"></b>
                                </p>
                            </div>
                        </div>
                        <div class="row-1 mt-auto ms-auto" title="Modificar">
                            <a href="Mod_profile.php" class="bg-primary rounded-pill d-inline p-2">
                                <i class="fas fa-cogs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </html>
<?php
    include('shared/navbar/navbar-2.html');
?>

