<?php
// Incluir la conexión
include 'conexion.php';

// Verificar si el usuario está logueado
session_start();
if (!isset($_SESSION['user_id'])) {
    die("No estás logueado. Por favor, inicia sesión.");
}

// Obtener el nombre del libro o el ID para agregar al carrito
if (isset($_POST['add_to_cart'])) {
    $user_id = $_SESSION['user_id'];
    $libro_titulo = $_POST['libro_titulo']; // Obtener el título del libro desde el formulario

    // Buscar el libro por su título
    $sql = "SELECT id FROM libros WHERE titulo = '$libro_titulo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el libro existe, obtenemos el ID
        $row = $result->fetch_assoc();
        $libro_id = $row['id'];

        // Insertar en la tabla carrito
        $cantidad = $_POST['cantidad'];
        $insertar_sql = "INSERT INTO carrito (user_id, libro_id, cantidad) 
                         VALUES ('$user_id', '$libro_id', '$cantidad')";

        if ($conn->query($insertar_sql) === TRUE) {
            echo "Libro agregado al carrito con éxito.";
        } else {
            echo "Error al agregar libro al carrito: " . $conn->error;
        }
    } else {
        echo "El libro no fue encontrado.";
    }
}

// Cerrar la conexión
$conn->close();
?>

