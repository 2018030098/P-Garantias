<?php
    include('Profile/newProfile.php');

    $Active = 0;
    $BodyHtml = '';
    include('shared/navbar/navbar.html');
?>

<html>
    <div class="container">
        <div class="row- text-center">
            <p class="display-6 ">
                <?php   echo $_SESSION['Usr'];   ?>
            </p>
            <p class="text-muted blockquote-footer">
                no se puede modificar el username
            </p>
        </div>
        <form  method="POST" enctype="multipart/form-data" class="bg-white shadow p-2 pb-3"> <!-- action="Mod_profile.php" -->
            <div class="row">
                <div class="col-4">
                    <div class="row-auto card border-0">
                        <img alt="" class="rounded-circle circle-border m-b-md"
                        <?php  if(isset($img) && isset($tpe)) { ?>  
                                            src="data:<?php echo $tpe ?>;base64,<?php echo  base64_encode($img); ?>"  
                                <?php   }else {     ?>
                                            src="assets/img/user_icon-icons.com_57997.svg"
                                <?php   }           ?>
                        >
                        <!-- assets/img/user_icon-icons.com_57997.svg -->
                    </div>
                    <div class="row-2 d-flex justify-content-center">
                        <input id="NewFoto" name="NewFoto" type="file" class="form-control btn btn-light bg-gradient" >  <!-- Seleccionar imagen</button> -->
                    </div>
                </div>
                <div class="col-8">
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
                        <textarea type="text" id="NewDescription" name="NewDescription" class="form-control"><?php echo $_SESSION['dsc'] ?></textarea>
                    </div>
                    <div>
                        <label for="Company" class="form-label my-2">Empresa</label>
                        <input type="text" id="NewCompany" name="NewCompany" class="form-control" value="<?php echo $_SESSION['emp'] ?>">
                    </div>
                    <div>
                        <label for="email" class="form-label my-2">Correo</label>
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
        </form>
    </div>
</html>
<?php
    include('shared/navbar/navbar-2.html');
?>