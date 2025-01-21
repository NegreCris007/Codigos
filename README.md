<?php 
session_start(); 
if (isset($_SESSION['usuario'])) { 
    header('Location: dashboard.php'); 
    exit(); 
} 
?> 
 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login Simple</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f2f5; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        } 
        .login-container { 
            background-color: #ffffff; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            width: 100%; 
            max-width: 400px; 
            text-align: center; 
        } 
        .login-container h2 { 
            margin-bottom: 20px; 
            color: #333; 
        } 
        .input-group { 
            margin-bottom: 15px; 
            text-align: left; 
        } 
        .input-group label { 
            display: block; 
            font-weight: bold; 
            color: #555; 
        } 
        .input-group input { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            font-size: 16px; 
        } 
        .login-button { 
            width: 100%; 
            padding: 10px; 
            border: none; 
            border-radius: 5px; 
            background-color: #007bff; 
            color: #fff; 
            font-size: 18px; 
            cursor: pointer; 
            transition: background 0.3s ease; 
        } 
        .login-button:hover { 
            background-color: #0056b3; 
        } 
        .error-message { 
            color: red; 
            margin-bottom: 15px; 
        } 
    </style> 
</head> 
<body> 
    <div class="login-container"> 
        <h2>Iniciar Sesión</h2> 
 
        <?php 
        if (isset($_GET['error'])) { 
            echo '<p class="error-message">Usuario o contraseña incorrectos.</p>'; 
        } 
        ?> 
 
        <form action="procesar_login.php" method="POST"> 
            <div class="input-group"> 
                <label>Usuario:</label> 
                <input type="text" name="usuario" required> 
            </div> 
            <div class="input-group"> 
                <label>Contraseña:</label> 
                <input type="password" name="password" required> 
            </div> 
            <button class="login-button" type="submit">Ingresar</button> 
        </form> 
    </div> 
</body> 
</html>
