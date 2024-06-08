<?php
require_once 'conn.php';
session_start();

$conexion = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["email"];
    $contrasena = $_POST["password"];
    $contrasena_hashed = password_hash($contrasena, PASSWORD_DEFAULT);

    try {
        $stmt = $conexion->prepare("INSERT INTO usuarios (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $usuario, $contrasena_hashed);
        $stmt->execute();

        $_SESSION["usuario"] = $usuario;
        header("Location: ../user/arcce/administrador.php");
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) { // Código de error de MySQL para 'entrada duplicada'
            echo "<script>
            alert('La entrada de usuario ya existe');
            window.location.href = '../user/register.php';
            </script>";
        } else {
            throw $e; // Si es otro error, lánzalo de nuevo
        }
    }
} else {
    echo "<script>
        alert('Metodo incorrecto');
        window.location.href = '../index.php';
        </script>";
}

mysqli_close($conexion);
