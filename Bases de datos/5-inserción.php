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

        // Se define la consulta a realizar y se ejecuta
        $sql = "INSERT INTO usuarios(nombre, clave, rol) VALUES ('Susana', '44444', '2');";
        $ins = $bd->query($sql);

        if($ins){
            echo "Inserción exitosa";
            echo "Número de registros insertados: " . $ins->rowCount();
        }else{
            echo "Error en la inserción";
        }

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>