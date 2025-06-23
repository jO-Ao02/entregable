<?php
    $cadena = "pgsql:host=localhost;port=5433;dbname=blog";
    $user = "postgres";
    $password = "123";

    try {
        $conexion = new PDO($cadena, $user, $password);
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión establecida correctamente.";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
?>