<?php
    session_start();
    if(!empty($_POST["bt_iniciar_sesion"])) {
        if(!empty($_POST["correo"]) and !empty($_POST["password"])) {
            $correo = $_POST["correo"];
            $password = $_POST["password"];
            $sql = $conexion->query("select * from usuario where correo_electronico = '$correo'");
            
            if($datos = $sql->fetch_object()) {
                if(password_verify($password, $datos->contraseña)) {
                    $_SESSION["id"] = $datos->id;
                    $_SESSION["nombres"] = $datos->nombres;
                    $_SESSION["apellidos"] = $datos->apellidos;
                    header("location: ../paginas/perfil_usuario.php");
                }
                else {
                    echo "Correo o contraseña incorrectos";
                }
            }
            else {
                echo "Correo o contraseña incorrectos";
            }
        }
        else {
            echo "Campos vacíos";
        }
    }
?>
