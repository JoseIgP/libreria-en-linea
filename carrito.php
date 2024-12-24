<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.html');
    exit();
}

echo "<h1>Bienvenido, " . htmlspecialchars($_SESSION['usuario_nombre']) . "</h1>";
?>
<form action="procesar_carrito.php" method="POST">
    <label for="libro">Selecciona un libro:</label>
    <select id="libro" name="libro">
        <!-- Opciones dinámicas desde la base de datos -->
    </select>
    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required>
    <button type="submit" class="btn btn-success">Agregar al carrito</button>
</form>