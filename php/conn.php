<?php
function connectDB()
{
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $nombreBaseDeDatos = 'cecyhaq';

    // Intenta establecer la conexión
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombreBaseDeDatos);

    // Verifica si la conexión fue exitosa
    if (!$conexion) {
        die('Error al conectar a la base de datos: ' . mysqli_connect_error());
    }

    // Devuelve la conexión
    return $conexion;
}
