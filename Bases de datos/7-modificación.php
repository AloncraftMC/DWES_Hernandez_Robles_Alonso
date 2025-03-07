<?php

    // Se definen las variables para la conexión a la base de datos

    $dsn = "mysql:host=localhost;dbname=empresa;charset=utf8mb4";
    $usuario = "root";
    $clave = "";

    // Se realiza la conexión a la base de datos

    try{

        // Se crea la conexión a la base de datos

        $pdo = new PDO($dsn, $usuario, $clave);
        echo "Conexión exitosa";

        /**
         * No preparada
         */

        // Se define la consulta a realizar y se ejecuta

        $sql = "UPDATE usuarios SET rol = 1 WHERE rol = 0";
        $stmt = $pdo->query($sql);

        /**
         * Preparada
         */

        // Se define la consulta a realizar con marcares conocidos

        $sql = "UPDATE usuarios SET rol = :rol WHERE nombre = :nombre";
        $stmt = $pdo->prepare($sql);

        // Se asignan valores a los marcadores

        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":rol", $rol);

        // Se definen los valores a insertar y se ejecuta
        $nombre = "Carmen";
        $rol = 4;
        $stmt->execute();

        echo "Filas actualizadas: " . $stmt->rowCount();

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>