<?php
session_start();

// Verificar si el usuario está logueado
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
    // Si está logueado, redirigir a index.html
    header("Location: index.php");  // Redirigir a la página de inicio
    exit();  // Detener la ejecución para evitar que se ejecute código adicional
} else {
    // Si no está logueado, mostrar el contenido de la cuenta (o redirigir a login)
    echo "<h1>Por favor, inicie sesión.</h1>";
    // O redirigir a la página de login
    header("Location: login.html");
    exit();
}
?>
