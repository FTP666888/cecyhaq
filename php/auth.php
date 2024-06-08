<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php?error=inicia sesion para ingresar a este recurso");
    exit();
}
