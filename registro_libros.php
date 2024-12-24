<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener datos del formulario
$titulo = $_POST['titulo'] ?? '';
$autor = $_POST['autor'] ?? '';
$precio = $_POST['precio'] ?? '';
$cantidad = $_POST['cantidad'] ?? '';

// Verificar si los campos están vacíos
if (empty($titulo) || empty($autor) || empty($precio) || empty($cantidad)) {
    die("Por favor, completa todos los campos.");
}

// Insertar en la tabla libros
$sql = "INSERT INTO libros (titulo, autor, precio, cantidad) 
        VALUES ('$titulo', '$autor', '$precio', '$cantidad')";

if ($conn->query($sql) === TRUE) {
    echo "Libro registrado con éxito.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
