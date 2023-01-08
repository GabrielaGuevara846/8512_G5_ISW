<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/registro.css">

    <title>Registro</title>
</head>
<body>
  <section class="form-register">
    <h4>Login</h4>
    <form method="post">
        <input type="text" class="controls" name="correo" placeholder="Correo electrónico">
        <input type="password" class="controls" name="password" placeholder="Contraseña">
        <input type="submit" class="botons" name="bt_iniciar_sesion" value="Iniciar Sesión">
    </form>   
      <?php
        include "../modelo/conexion.php";
        include "../controlador/controlador_login.php";
    ?>
  </section>
</body>
</html>
