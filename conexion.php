<?php
// Configuración de la conexión
$host = 'localhost';
$usuario = 'root';  // Usuario de MySQL
$contraseña = '';  // Contraseña de MySQL - en blanco por XAMPP
$base_de_datos = 'libreria';  // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    // Esto se puede eliminar después de que la conexión esté confirmada
    echo "Conexión exitosa a la base de datos.";
}
?>
