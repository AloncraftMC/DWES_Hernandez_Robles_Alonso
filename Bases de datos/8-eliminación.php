<?php

    // Se definen las variables para la conexión a la base de datos

    $dsn = "mysql:host=localhost;dbname=empresa;charset=utf8mb4";
    $usuario = "root";
    $contraseña = "";

    // Se realiza la conexión a la base de datos

    try{

        // Se crea la conexión a la base de datos

        $bd = new PDO($dsn, $usuario, $contraseña);
        echo "Conexión exitosa";

        /**
         * Sin preparadas
         */

        // Se define la consulta a realizar y se ejecuta
        $sql = "DELETE FROM usuarios WHERE nombre = 'Margarita';";
        $stmt = $bd->query($sql);

        // Se muestra el número de registros eliminados si todo ha ido bien
        if($stmt){
            echo "Eliminación exitosa";
            echo "Número de registros eliminados: " . $stmt->rowCount();
        }else{
            echo "Error en la eliminación";
        }

        /**
         * Preparadas
         */

        // Se define la consulta a realizar con marcares conocidos
        $sql = "DELETE FROM usuarios WHERE nombre = :nombre;";
        $stmt = $bd->prepare($sql);

        // Se asignan valores a los marcadores
        $stmt->bindParam(":nombre", $nombre);

        // Se definen los valores a eliminar y se ejecuta
        $nombre = "Angelines";
        $stmt->execute();

        echo "Filas eliminadas: " . $stmt->rowCount();
        
    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>