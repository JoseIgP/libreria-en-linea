<?php
session_start();  // Iniciar sesión

// Verifica si el usuario está logueado
$user_logged_in = isset($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería en Línea</title>
    <!-- Agregar aquí los enlaces a tus archivos CSS y Bootstrap -->
</head>
<body>

<header>
    <h1>Librería en Línea</h1>
    <p>Descubre títulos y novedades para todos los gustos, los preferidos de la comunidad!</p>
    
    <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="login.html">Iniciar Sesión</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalogo.html">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="carrito.html">Carrito</a></li>
                    <li class="nav-item"><a class="nav-link" href="registro_usuarios.html">Registro de Usuarios</a></li>    
                    <li class="nav-item"><a class="nav-link" href="registro_libros.html">Registro de Libros</a></li>
                </ul>
            </div>
        </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Librería en Línea</a>
            <div class="ml-auto">
                <?php if ($user_logged_in): ?>
                    <span class="navbar-text">
                        Bienvenido, <?php echo $_SESSION['user_email']; ?>
                    </span>
                <?php else: ?>
                    <a href="login.php" class="btn btn-primary">Iniciar sesión</a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</header>

<!-- El contenido principal de la página -->
<main class="container my-4">
        <h2>Bienvenidos a nuestra librería virtual!</h2>
        <p>Aquí encontrarás una selección de los mejores libros para leer y regalar.</p>
        <a href="catalogo.html" class="btn btn-primary">Ver Catálogo</a>
</main>

<!-- Aquí iría el pie de página, si lo tienes -->
<footer>
        <p>&copy; 2024 Librería Online</p>
    </footer>
</body>
</html>
