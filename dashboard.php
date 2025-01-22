<?php
session_start();
if (!isset($_SESSION['cedula'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h1>
    <p>Departamento: <?php echo htmlspecialchars($_SESSION['departamento']); ?></p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
