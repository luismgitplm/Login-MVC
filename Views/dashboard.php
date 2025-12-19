<?php
// Control de acceso no autorizado mediante URL
session_start();
if (!isset($_POST['csrf_token']) && $_POST['csrf_token'] !== $_SESSION['csrf_token']){
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
    <p>Has iniciado sesión correctamente y los cambios de seguridad funcionan por ahora</p>
    <a href="index.php?action=logout">Cerrar sesión (Volver al login)</a>
</body>

</html>