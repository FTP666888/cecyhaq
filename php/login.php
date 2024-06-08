<?php
require_once 'conn.php';
session_start();

$conexion = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["email"];
    $contrasena = $_POST["password"];

    try {
        $stmt = $conexion->prepare("SELECT password FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($contrasena, $user['password'])) {
            $_SESSION["usuario"] = $usuario;
            header("Location: ../user/arcce/administrador.php");
        } else {
            echo "<script>
            alert('Usuario o contraseña incorrectos');
            window.location.href = '../index.php';
            </script>";
        }
    } catch (mysqli_sql_exception $e) {
        throw $e; // If it's another error, throw it again
    }
} else {
    echo "<script>
        alert('Metodo incorrecto');
        window.location.href = '../index.php';
        </script>";
}

mysqli_close($conexion);
