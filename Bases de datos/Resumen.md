# Apéndice de Variables para Manejo de Bases de Datos con el Objeto `PDO` en PHP

## `$dsn`

Características de la base de datos

```php
$dsn = "mysql:host=localhost;dbname=empresa;charset=utf8mb4";
```

## `$username`

Nombre de usuario de la base de datos

```php
$username = "root";
```

## `$password`

Contraseña de usuarios de la base de datos

```php
$password = "";
```

## `$pdo`

Conexión a la base de datos

```php
$pdo = new PDO($dsn, $username, $password);
```

Cerrar conexión

```php
$pdo = null;
```

### `$pdo->setAttribute()`

Tipos de manejo de errores

```php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
```

### `$pdo->query()`

Valor de la consulta SQL no preparada (Ver [`$stmt`](#stmt))

```php
$pdo->query($sql)
```

### `$pdo->prepare()`

Preparar sentencia SQL (Ver [`$stmt`](#stmt))

```php
$pdo->prepare($sql)
```

### `$pdo->errorinfo()`

Información de error de sentencia SQL

```php
$pdo->errorinfo()
```

## `$sql`

Sentencia SQL a la base de datos

```php
$sql = "SELECT * FROM usuarios";
```

### Inserción (`INSERT`)

Inserción sin parámetros

```sql
INSERT INTO usuarios(nombre, clave, rol) VALUES ('Susana', '44444', '2');
```

Inserción preparada con marcadores anónimos

```sql
INSERT INTO usuarios(nombre, clave, rol) VALUES (?, ?, ?);
```

Inserción preparada con marcadores conocidos

```sql
INSERT INTO usuarios(nombre, clave, rol) VALUES (:nombre, :clave, :rol);
```

### Modificación (`UPDATE`)

Modificación sin parámetros

```sql
UPDATE usuarios SET rol = 1 WHERE rol = 0;
```

Modificación preparada con marcadores anónimos

```sql
UPDATE usuarios SET rol = ? WHERE nombre = ?;
```

Modificación preparada con marcadores conocidos

```sql
UPDATE usuarios SET rol = :rol WHERE nombre = :nombre;
```

### Eliminación (`DELETE`)

Eliminación sin parámetros

```sql
DELETE FROM usuarios WHERE nombre = 'Margarita';
```

Eliminación preparada con marcadores anónimos

```sql
DELETE FROM usuarios WHERE nombre = ?;
```

Eliminación preparada con marcadores conocidos

```sql
DELETE FROM usuarios WHERE nombre = :nombre;
```

### Consultas (`SELECT`)

Consulta sin parámetros

```sql
SELECT nombre, clave, rol FROM usuarios;
```

Consulta preparada con marcadores anónimos

```sql
SELECT nombre FROM usuarios WHERE rol = ?;
```

Consulta preparada con marcadores conocidos

```sql
SELECT nombre FROM usuarios WHERE rol = :rol;
```

## `$stmt`

Resultado de sentencia SQL no preparada

```php
$stmt = $pdo->query($sql);
```

Preparar sentencia SQL y guardarla

```php
$stmt = $pdo->prepare($sql);
```

Borrar resultados

```php
$stmt = null;
```

### `$stmt->bindParam()`

Vincular valores a marcadores anónimos

```php
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $contrasena);
$stmt->bindParam(3, $rol);
```

Vincular valores a marcadores conocidos

```php
$stmt->bindParam(":nombre", $nombre);
$stmt->bindParam(":contrasena", $contrasena);
$stmt->bindParam(":rol", $rol);
```

### `$stmt->execute()`

Ejecutar sentencia SQL ya preparada

```php
$stmt->execute();
```

Ejecutar sentencia SQL con los valores de los marcadores anónimos especificados en un array

```php
$array = ['Pedro', '666666', '0'];
$stmt->execute($array);
```

Ejecutar sentencia SQL con los valores de los marcadores conocidos especificados en un array

```php
$array = ['nombre' => 'Olga', 'clave' => '676767', 'rol' => '0'];
$stmt->execute($array);
```

### `$stmt->rowCount()`

Cantidad de filas del resultado

```php
$stmt->rowCount()
```

### `$stmt->fetch()`

Siguiente fila del resultado

```php
while($usuario = $stmt->fetch()){
    echo $usuario["nombre"];
}
```

### `$stmt->fetchAll()`

Array de todas las filas del resultado

```php
$usuarios = $stmt->fetchAll();

foreach($usuarios as $usuario){
    echo $usuario["nombre"];
}
```

## `PDOException $e`

Excepción en la base de datos

```php
try{
    # ...
}catch(PDOException $e){
    echo "Error en la base de datos.";
}
```

### `$e->getMessage()`

Mensaje del error

```php
try{
    # ...
}catch(PDOException $e){
    echo $e->getMessage();
}
```