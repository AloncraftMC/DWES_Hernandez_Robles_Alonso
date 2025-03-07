<?php

    // Se defninen las variables para la conexión a la base de datos

    $servername = "localhost";
    $database = "empresa";
    $usesrname = "root";
    $password = "";

    // Se realiza la conexión a la base de datos

    try{

        // Se crea la conexión a la base de datos
        $conexion = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4", $usesrname, $password);

        // Se definen los atributos de la conexión para que muestre los errores

        /**
         * $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
         * $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
         * 
         * Se recomienda activar esta opción para gestionar los errores con PDOException:
         */
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

    // Se cierra la conexión a la base de datos
    $conexion = null;

?>