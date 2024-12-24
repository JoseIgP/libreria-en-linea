<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

// Insertar en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, email, contraseña, direccion, telefono) 
        VALUES ('$nombre', '$email', '$contraseña', '$direccion', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado con éxito.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
