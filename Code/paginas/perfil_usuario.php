<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</body>
</html>