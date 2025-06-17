<?php
    $cadena = "mysql:host=localhost;port=3306;charset=utf8mb4";
    $user = "root";
    $password = "admin123";
    $database = "blog";
    try {
        $conexion = new PDO($cadena, $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("USE $database");
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
?>