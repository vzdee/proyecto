<?php
require '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí deberías agregar la lógica para autenticar al usuario
    // Por ejemplo, verificar las credenciales en la base de datos

    // Si la autenticación es exitosa, redirigir al dashboard
    header('Location: dashboard.php');
    exit();
}


?>