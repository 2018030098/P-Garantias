<?php
    session_start();
    include('shared/Conexion.php');

    $Active = 0;
    $BodyHtml = '';
    include('shared/navbar/navbar.html');
?>

<html>
    <form action="Mod_profile.php" method="POST">
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
                        <img src="assets/img/user_icon-icons.com_57997.svg" alt="" class="h-25 rounded-circle circle-border m-b-md">
                    </div>
                    <div class="row-2 d-flex justify-content-center">
                        <button class="btn btn-dark bg-gradient">Seleccionar imagen</button>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="Name" class="form-label my-2">Nombre Completo</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['Name'] ?>">
                    </div>
                    <div>
                        <label for="Job" class="form-label my-2">Puesto</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['job'] ?>">
                    </div>
                    <div>
                        <label for="Description" class="form-label my-2">Descripcion</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['dsc'] ?>">
                    </div>
                    <div>
                        <label for="Company" class="form-label my-2">Empresa</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['emp'] ?>">
                    </div>
                    <div>
                        <label for="email" class="form-label my-2">Correo*</label>
                        <input type="email" class="form-control" value="<?php echo $_SESSION['email'] ?>">
                    </div>
                </div> 
            </div>
            <div class="row container">
                <div class="col">
                    <form action="profile.php" method="post">
                        <button class="btn btn-danger" type="submit">Cancelar</button>
                    </form>
                </div>
                <div class="col">
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</html>
<?php
    include('shared/navbar/navbar-2.html');
?>