<?php

include("conexion.php");

// Corregir typo 'isse' a 'isset'
if(isset($_POST['send'])){
    // Corregir typo 'strlrn' a 'strlen'
    if(
       strlen($_POST['name']) >= 1 &&
       strlen($_POST['phone']) >= 1 &&
       strlen($_POST['email']) >= 1 &&
       strlen($_POST['mensaje']) >= 1) {

        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);

        // Posible error corregido
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) 
                     VALUES ('$name', '$phone','$email', '$mensaje')";

        $resultado = mysqli_query($conex, $consulta);
    }
}
?>
