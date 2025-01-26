<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Iniciar sección</h1>
    <header class="cabecera">
        <div class="menu_container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu"></label>
            <nav class="navbar">
                <li><a href="#">Iniciar</a></li>
                <li><a href="#">crear</a></li>
                <li><a href="#">servicios</a></li>
                <li><a href="#">usuarios</a></li>
            </nav>
        </div>
    </header>

    <section class="about_contenido">
        <h1>Crear</h1>
        <p>icono</p>
        <i class="fa-sharp fa-solid fa-hospital-user"></i>
        <form method="post" autocomplete="off">
            <div class="grupo">
                <div>
                    <input type="text" name="name">
                    <i class="fa-sharp fa-solid fa-user"></i>
                </div>
                <div>
                    <input type="text" name="phone">
                    <i class="fa-sharp fa-solid fa-phone"></i>
                </div>
                <div>
                    <input type="text" name="email">
                    <i class="fa-sharp fa-solid fa-envelope"></i>
                </div>
                <div>
                    <textarea name="mensaje" placeholder="detalles de la consulta"></textarea>
                    <i class="fa-sharp fa-solid fa-hospital-user"></i>
                </div>
                <div>
                    <input type="submit" name="send" class="btn" onclick="myfuncion()">
                </div>
            </div>
        </form>
    </section>

    <section class="about_contenido2">
        <h1>Iniciar</h1>
        <p>icono</p>
        <i class="fa-sharp fa-solid fa-hospital-user"></i>
        <form method="post" action="login.php" autocomplete="off">
            <div class="grupo">
                <div>
                    <input type="text" name="email" placeholder="Email">
                    <i class="fa-sharp fa-solid fa-envelope"></i>
                </div>
                <div>
                    <input type="submit" name="login" value="Iniciar sesión" class="btn">
                </div>
            </div>
        </form>
    </section>

    <?php
    include("send.php");
    ?>

    <section class="about_contenido3">
        <h1>Datos de Usuarios</h1>
        <?php
        include("conexion.php");

        $consulta = "SELECT * FROM datos";
        $resultado = mysqli_query($conex, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<p>Nombre: " . $row['nombre'] . "</p>";
            echo "<p>Teléfono: " . $row['telefono'] . "</p>";
            echo "<p>Email: " . $row['email'] . "</p>";
            echo "<p>Mensaje: " . $row['mensaje'] . "</p><hr>";
        }
        ?>
    </section>

    <script>
        function myfuncion() {
            window.location.href = "http://localhost/pagina";
        }
    </script>
</body>
</html>
