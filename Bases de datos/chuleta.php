<?php

    $dsn = "mysql:host=localhost;dbname=empresa;charset=utf8mb4";
    $username = "root";
    $password = "";

    try{

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";

        /**
         * Ejemplo 1: Consulta sin parámetros
         */

        try{

            $sql = "SELECT * FROM usuarios";
            $stmt = $pdo->query($sql);

            $usuarios = $stmt->fetchAll();

            foreach($usuarios as $usuario){
                echo "Nombre: " . $usuario["nombre"] . "<br>";
            }

        }catch(PDOException $e){
            echo "Error en la consulta: " . $e->getMessage();
        }

        /**
         * Ejemplo 2: Consulta con marcadores anónimos
         */

        try{

            $sql = "SELECT nombre FROM usuarios WHERE edad = ?";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(1, $edad);
            
            $edad = 2;
            
            $stmt->execute();

            $usuarios = $stmt->fetchAll();

            foreach($usuarios as $usuario){
                echo "Nombre: " . $usuario["nombre"] . "<br>";
            }
            
        }catch(PDOException $e){
            echo "Error en la consulta: " . $e->getMessage();
        }

        /**
         * Ejemplo 3: Consulta con marcadores conocidos
         */

        try{

            $sql = "SELECT nombre FROM usuarios WHERE edad = :edad";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":edad", $edad);
            
            $edad = 2;
            
            $stmt->execute();

            $usuarios = $stmt->fetchAll();

            foreach($usuarios as $usuario){
                echo "Nombre: " . $usuario["nombre"] . "<br>";
            }

        }catch(PDOException $e){
            echo "Error en la consulta: " . $e->getMessage();
        }

    }catch(PDOException $e){
        echo "Error en la conexión: " . $e->getMessage();
    }

    $stmt = null;
    $pdo = null;

?>