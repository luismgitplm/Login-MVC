<?php
// Control de acceso no autorizado mediante URL


// Si no hay una sesión activa o el token CSRF no es válido, redirigir al login
if (!isset($_SESSION['idusuario']) || !isset($_SESSION['csrf_token'])) {
    header('Location: /Login-MVC/index.php?action=login&error=Debes iniciar sesión para continuar');
    exit();
}

// Verificar el CSRF token (si es necesario) antes de permitir acceso
if (isset($_GET['csrf_token']) && $_GET['csrf_token'] !== $_SESSION['csrf_token']) {
    header('Location: /Login-MVC/index.php?action=login&error=Debes iniciar sesión para continuar');
    exit();
}


?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h2>Bienvenido al Dashboard, <?php echo $_SESSION['idusuario'] ?></h2>
    <p>Has iniciado sesión correctamente</p>
    <a href="index.php?action=logout">Cerrar sesión (Volver al login)</a>
</body>

</html>