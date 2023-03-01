<?php
    session_start();
    if(!empty($_POST["bt_registro"])) {
        if(!empty($_POST["cedula"])
            and !empty($_POST["nombre"]) 
            and !empty($_POST["apellido"])
            and !empty($_POST["correo"])
            and !empty($_POST["password"])
            and !empty($_POST["conf_password"])
            and ($_POST["password"] === $_POST["conf_password"])) {
            
            $cedula = $_POST["cedula"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $sexo =  $_POST["sexo"];
            $correo = $_POST["correo"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $perfil = 2;

            $stmt = $conexion->prepare("INSERT INTO usuario (cedula_identidad,
                                                         nombres,
                                                         apellidos,
                                                         sexo,
                                                         correo_electronico,
                                                         contraseña,
                                                         perfil) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssissi", $cedula, $nombre, $apellido, $sexo, $correo, $password, $perfil);
            $stmt->execute();
            $conexion->close();
            
            echo "Usuario registrado con éxito";
        }
        else {
            echo "Campos vacíos";
        }
    }
?>