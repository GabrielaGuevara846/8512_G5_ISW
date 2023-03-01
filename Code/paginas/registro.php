<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/registro.css">

    <title>Registro</title>
</head>
<body>
  <section class="seccion_formulario">
    <form method="post">
      <h4> Registro</h4>
      <input class="controls" type="text" name="cedula" placeholder="Cédula de identidad">
      <input class="controls" type="text" name="nombre" placeholder="Nombres">
      <input class="controls" type="text" name="apellido" placeholder="Apellidos">
      <select class="controls" name="sexo">
        <option value="2">Femenino</option>
        <option value="1">Masculino</option>        
      </select>
      <input class="controls" type="email" name="correo" placeholder="Correo electrónico">
      <input class="controls" type="password" name="password" placeholder="Contraseña">
      <input class="controls" type="password" name="conf_password" placeholder="Confirmar contraseña">
      <input class="botons" type="submit" name="bt_registro" value="Registrar">
    </form>

    <p><a href="./login.php">¿Ya tengo Cuenta?</a></p>

    <?php
        include "../modelo/conexion.php";
        include "../controlador/controlador_registro.php";
    ?>
  </section>
</body>
</html>