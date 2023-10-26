<?php

    $host = "localhost";
    $user = "juacha29_sistema";
    $clave = "Caibo19*";
    $bd = "juacha29_sistema";

    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");


?>