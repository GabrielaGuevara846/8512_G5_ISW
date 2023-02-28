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
            $correo = $_POST["correo"];
            $password = password_hash($_POST["password"]);

            $stmt = $conn->prepare("INSERT INTO usuario (cedula_identidad,
                                                         nombres,
                                                         apellidos,
                                                         correo_electronico,
                                                         contraseña) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param($cedula, $nombre, $apellido, $correo, $password);
            $stmt->execute();
            $conn->close();

            header("location: ./login.php");
        }
        else {
            echo "Campos vacíos";
        }
    }
?>