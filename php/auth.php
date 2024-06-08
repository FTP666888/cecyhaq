<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>
        alert('Inicia Sesion para acceder a este recurso');
        window.location.href = '../login.php';
        </script>";
}
