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

        // Se definen la consulta a realizar y se ejecuta

        $sql = 'SELECT nombre, clave, rol FROM usuarios;';
        $usuarios = $bd->query($sql);

        // Se muestran los resultados de la consulta

        echo "Número de usuarios: " . $usuarios->rowCount() . "<br>";

        foreach($usuarios as $usuario){

            echo "Nombre: " . $usuario["nombre"] . "<br>";
            echo "Clave: " . $usuario["clave"] . "<br>";

        }

    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

?>