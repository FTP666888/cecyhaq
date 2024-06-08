<?php
require_once 'conn.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar la sentencia
    $stmt = $conn->prepare("SELECT * FROM Usuarios WHERE email = ? AND password = PASSWORD(?)");
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();


    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Las credenciales son correctas
    } else {
        // Las credenciales son incorrectas
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>
        alert('Metodo incorrecto');
        window.location.href = '../user/login.php';
        </script>";
}
