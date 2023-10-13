<?php
    $conexion= new mysqli_connect('localhost','root','','login', '3306');

    function insertar($conexion)
    {
        $correo= $_POST['correo'];
        $contraseña= $_POST['contraseña'];

        $consulta="INSERT INTO login(correo,contraseña) VALUES('$correo','$contraseña')";
        mysqli_query($conexion, $consulta);
        mysquli_close($conexion);
    }
?>