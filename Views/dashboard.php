<?php
// Control de acceso no autorizado mediante URL

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