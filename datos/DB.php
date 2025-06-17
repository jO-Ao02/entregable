<?php
    $cadena = "mysql:host=localhost;dbname=blog;charset=utf8mb4";
    $user = "root";
    $password = "admin123";

    try {
        $conexion = new PDO($cadena, $user, $password);
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
?>