<?php
// Obtiene la informacion registrada en la base de datos del usuario que acaba de ingresar
try {
        $stmt -> bind_result($id, $usr, $psw, $email, $name, $gender, $img);
        while ($stmt->fetch()) {
                $_SESSION['id'] = $id;
                $_SESSION['Usr'] = $usr;
                $_SESSION['psw'] = $psw;
                $_SESSION['email'] = $email;
                $_SESSION['Name'] = $name;
                $_SESSION['gender'] = $gender;
                $_SESSION['img'] = $img;
        }
} 
catch (\Throwable $th) {
        echo "Problema al tomar los valores de la base de datos";
        throw $th;
}
?>