<?php

include("conexion.php");

$consulta = "SELECT * FROM datos";
$resultado = mysqli_query($conex, $consulta);

while($row = mysqli_fetch_assoc($resultado)) {
    echo "Nombre: " . $row['nombre'] . "<br>";
    echo "Teléfono: " . $row['telefono'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Mensaje: " . $row['mensaje'] . "<br><br>";
}

?>
