<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $carrito_id = $_POST["carrito_id"];
    $sql = "DELETE FROM CARRITO WHERE ID = '$carrito_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado del carrito.";
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
    $conn->close();
}
?>
