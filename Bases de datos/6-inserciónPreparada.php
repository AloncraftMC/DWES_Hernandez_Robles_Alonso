<?php

    // Se definen las variables para la conexión a la base de datos

    $cadenaConexion = "mysql:dbname=empresa;charset=utf8mb4";
    $usuario = "root";
    $clave = "";

    // Se realiza la conexión a la base de datos

    try{

        // Se crea la conexión a la base de datos

        $bd = new PDO($cadenaConexion, $usuario, $clave);
        echo "Conexión exitosa";

        /**
         * 1. Marcadores anónimos
         */

        // Se define la consulta a realizar con marcadores anónimos
        $sql = 'INSERT INTO usuarios(nombre, clave, rol) VALUES (?, ?, ?);';

        // Se prepara la consulta
        $stmt = $bd->prepare($sql);

        // Se asocian los valores a los marcadores
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $clave);
        $stmt->bindParam(3, $rol);

        // Se definen los valores a insertar y se ejecuta
        $nombre = "Susana";
        $clave = "44444";
        $rol = 2;
        $stmt->execute();

        // Se define otro conjunto de valores a insertar y se ejecuta
        $nombre = "Pedro";
        $clave = "55555";
        $rol = 1;
        $stmt->execute();

        // Se define otro conjunto de valores a insertar y se ejecuta
        $nombre = "María";
        $clave = "66666";
        $rol = 3;
        $stmt->execute();

        // También se puede asociar los valores mediante un array
        $valores = array("Juan", "77777", 2);
        $stmt->execute($valores);

        /**
         * 2. Marcadores conocidos
         */

        // Se define la consulta a realizar con marcadores conocidos
        $sql = 'INSERT INTO usuarios(nombre, clave, rol) VALUES (:nombre, :clave, :rol);';

        // Se prepara la consulta
        $stmt = $bd->prepare($sql);

        // Se asocian los valores a los marcadores
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':clave', $clave);
        $stmt->bindParam(':rol', $rol);

        // Se definen los valores a insertar y se ejecuta
        $nombre = "Carmen";
        $clave = "25252525";
        $rol = "1";

        $stmt->execute();

        // Al igual que con los marcadores anónimos, se pueden asociar los valores mediante un array
        $valores = array(":nombre" => "Luis", ":clave" => "36363636", ":rol" => 3);
        $stmt->execute($valores);

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>