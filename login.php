<?php
session_start();
include("conexion.php");

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $consulta = "SELECT * FROM datos WHERE email='$email'";
    $resultado = mysqli_query($conex, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['user'] = mysqli_fetch_assoc($resultado);
        header("Location: perfil.php");
    } else {
        echo "Email no encontrado. Inténtalo de nuevo.";
    }
}
?>
