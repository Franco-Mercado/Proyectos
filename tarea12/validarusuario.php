<?php
        include_once("funciones.php");
        if (isset($_POST["nombre"] != "" && $_POST["pass"] != "") {
            $nombreUsuario = $_POST["nombre"];
            $passUs = md5($_POST["pass"]);
            echo signin($nombreUsuario, $passUs);
        } else { }

        ?>