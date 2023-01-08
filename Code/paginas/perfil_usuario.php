<?php
    session_start();

    if(empty($_SESSION["id"])) {
        header("location: ../paginas/login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/perfil_usuario.css" type="text/css">
    <title>Perfil de Usuario</title>
</head>
<body>
    <header>
        <h1>
            <?php
                echo "Bienvenido/a " . $_SESSION["nombres"] . " " . $_SESSION["apellidos"];
            ?>
        </h1>
    <header>
    <nav>
        <ul>
            <li><a href="../controlador/controlador_cerrar_sesion.php">salir</a></li>
        </ul>
    </nav>
</body>
</html>