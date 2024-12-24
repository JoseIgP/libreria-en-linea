<?php
session_start();  // Asegúrate de que esto esté al principio de tu archivo

// Incluir archivo de conexión
include 'conexion.php';

// Verificar si los datos han sido enviados
if (isset($_POST['email']) && isset($_POST['contraseña'])) {
    $email = $_POST['email'];
    $password = $_POST['contraseña'];

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consultar en la base de datos
    $sql = "SELECT id, email, contraseña FROM usuarios WHERE email = '$email' AND contraseña = '$password'";
    $result = $conn->query($sql);

    // Verificar si se encontró el usuario y la contraseña
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Almacenar el ID y el correo en la sesión
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];

        // Redirigir al usuario a la página de cuenta
        header("Location: cuenta.php");  // Redirige a la página de cuenta
        exit();  // Asegúrate de llamar exit() para detener el script
    } else {
        echo "Correo o contraseña incorrectos.";
    }

    $conn->close();
} else {
    echo "Por favor, complete todos los campos.";
}
?>
