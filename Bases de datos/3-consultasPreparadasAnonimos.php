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

        // Se define la consulta a realizar con marcares anónimos
        $sql = 'INSERT INTO usuarios(nombre, clave, rol) VALUES (?, ?, ?);';

        // NO SE DEBE HACER (Inyección SQL):
        // $sql = "INSERT INTO usuarios(nombre, clave, rol) VALUES ($nombre, $clave, $rol);";

        // Se prepara la consulta
        $ins = $bd->prepare($sql);

        // ...

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>