<?php
    include('Login/Login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<!--  -->    <!-- Scripts externos -->    <!--  -->
                    <!-- Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <!-- Diseño del login creado usando bootstrap -->
    <div class="d-flex align-content-center p-4 mt-2">
        <div class="container bg-light" id="D_Container rounded">
            <div class="text-center p-2">
                <h3>Login</h3>
            </div>
            <form action="index.php" method="POST">
                <div class="mb-3">
                    <!-- input del username -->
                  <input id="LoginUsername" name="LoginUsername" type="text" class="form-control" placeholder="Nombre de Usuario" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <!-- input del password -->
                  <input id="LoginPassword" name="LoginPassword" type="password" class="form-control" placeholder="Contraseña" autocomplete="off" required>
                </div>
                <div class="pb-4 d-grid g-0">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
    <?php
        echo $ErrorLogin;
    ?>

<!--  -->    <!-- Scripts externos -->    <!--  -->
                    <!-- Bootstrap5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>