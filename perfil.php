<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
</head>
<body>
    <h1>Perfil de Usuario</h1>
    <p>Nombre: <?php echo $user['nombre']; ?></p>
    <p>Teléfono: <?php echo $user['telefono']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Mensaje: <?php echo $user['mensaje']; ?></p>
</body>
</html>
