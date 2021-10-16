<?php
    session_start();
    include('shared/Conexion.php');

    $Active = 0;
    $BodyHtml = '';
    include('shared/navbar/navbar.html');
?>

<html>
    <form action="Profile/newProfile.php" method="POST" enctype="multipart/form-data" class="bg-white shadow p-2 pb-3">
        <div class="container">
            <div class="row- text-center">
                <p class="display-6 ">
                    <?php   echo $_SESSION['Usr'];   ?>
                </p>
                <p class="text-muted blockquote-footer">
                    no se puede modificar el username
                </p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row-auto">
                        <img src="000" alt="" class="h-25 rounded-circle circle-border m-b-md">
                        <!-- assets/img/user_icon-icons.com_57997.svg -->
                    </div>
                    <div class="row-2 d-flex justify-content-center">
                        <input id="NewFoto" name="NewFoto" type="file" class="form-control btn btn-light bg-gradient" >  <!-- Seleccionar imagen</button> -->
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="Name" class="form-label my-2">Nombre Completo</label>
                        <input type="text" id="NewName" name="NewName" class="form-control" value="<?php echo $_SESSION['Name'] ?>">
                    </div>
                    <div>
                        <label for="Job" class="form-label my-2">Puesto</label>
                        <input type="text" id="NewJob" name="NewJob" class="form-control" value="<?php echo $_SESSION['job'] ?>">
                    </div>
                    <div>
                        <label for="Description" class="form-label my-2">Descripcion</label>
                        <input type="text" id="NewDescription" name="NewDescription" class="form-control" value="<?php echo $_SESSION['dsc'] ?>">
                    </div>
                    <div>
                        <label for="Company" class="form-label my-2">Empresa</label>
                        <input type="text" id="NewCompany" name="NewCompany" class="form-control" value="<?php echo $_SESSION['emp'] ?>">
                    </div>
                    <div>
                        <label for="email" class="form-label my-2">Correo*</label>
                        <input type="email" id="NewEmail" name="NewEmail" class="form-control" value="<?php echo $_SESSION['email'] ?>">
                    </div>
                </div> 
            </div>
            <div class="row container m-4 d-inline">
                <div class="d-flex justify-content-center">
                    <a href="profile.php" class="btn btn-lg btn-danger">Cancelar</a>
                    <button class="btn btn-lg btn-success m-3" type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </form>
    </html>
<?php
    include('shared/navbar/navbar-2.html');
?>