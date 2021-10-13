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
    $BodyHtml = "
        <div class='card mb-3 imgBG'>
            <div class='row g-0'>
                <div class='col-md-4 d-flex justify-content-center align-items-center'>
                    <img src='$img' class='img-fluid rounded-start h-75' alt='...'>
                </div>
            <div class='col-md-8'>
                <div class='card-body h-100 d-flex align-items-center'>
                    <div class='card shadow-sm p-2 flex-fill'>
                        <form>
                            <fieldset disabled>
                                <div class='mb-3'>
                                    <label class='form-label'>Username</label>
                                    <input value='$usr' class='form-control'>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label'>Nombre</label>
                                    <input value='$name' class='form-control'>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label'>Correo electronico</label>
                                    <input value='$email' class='form-control'>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label'>Genero</label>
                                    <input value='$gender'
                                    class='form-control'>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        ";
   include('shared/navbar.html');
     ?>

