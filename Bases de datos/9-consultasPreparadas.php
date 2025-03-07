<?php

    // Se definen las variables para la conexión a la base de datos

    $dsn = "mysql:host=localhost;dbname=empresa;charset=utf8mb4";
    $usuario = "root";
    $contrasena = "";

    // Se realiza la conexión a la base de datos

    try{

        // Se crea la conexión a la base de datos
        $pdo = new PDO($dsn, $usuario, $contrasena);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";

        // Se realizan las consultas a la base de datos

        /**
         * Ejemplo 1: Consulta sin parámetros
         */

        try{

            // Se define la consulta a realizar

            $sql = "SELECT * FROM usuarios";
            $stmt = $pdo->prepare($sql);

            // Se ejecuta la consulta
            $stmt->execute();

            // Se obtienen los resultados de la consulta
            $usuarios = $stmt->fetchAll();

            foreach($usuarios as $usuario){
                echo "Nombre: " . $usuario["nombre"] . ", Rol: " . $usuario["rol"] . "<br>";
            }

        }catch(PDOException $e){
            echo "Error en la consulta: " . $e->getMessage();
        }

        /**
         * Ejemplo 2: Consulta con marcadores anónimos
         */

        try{

            // Se define la consulta a realizar

            $sql = "SELECT nombre FROM usuarios WHERE rol = ?";
            $stmt = $pdo->prepare($sql);

            // Se definen los valores de los marcadores
            $stmt->bindParam(1, $rol);

            // Se asignan valores a los marcadores y se ejecuta la consulta
            $rol = 2;
            $stmt->execute();
            
            // Se obtienen los resultados de la consulta (uno a uno)
            while($usuario = $stmt->fetch()){
                echo "Nombre: " . $usuario["nombre"] . "<br>";
            }
            echo "Número de usuarios con rol 2: " . $stmt->rowCount() . "<br>";

        }catch(PDOException $e){
            echo "Error en la consulta: " . $e->getMessage();
        }

        /**
         * Ejemplo 3: Consulta con marcadores conocidos
         */

        try{

            // Se define la consulta a realizar

            $sql = "SELECT nombre FROM usuarios WHERE rol = :rol";
            $stmt = $pdo->prepare($sql);

            // Se definen los valores de los marcadores
            $stmt->bindParam(":rol", $rol);

            // Se asignan valores a los marcadores y se ejecuta la consulta
            $rol = 2;
            $stmt->execute();
            
            // Se obtienen los resultados de la consulta
            $usuarios = $stmt->fetchAll();
            
            foreach($usuarios as $usuario){
                echo "Nombre: " . $usuario["nombre"] . "<br>";
            }
            echo "Numero de usuarios con rol 2: " . $stmt->rowCount() . "<br>";

        }catch(PDOException $e){
            echo "Error en la consulta: " . $e->getMessage();
        }

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

    $pdo = null;
    $bd = null;

?>