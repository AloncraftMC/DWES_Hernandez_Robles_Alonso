# Bases de Datos para PHP
> Alonso Hernández Robles 2º DAW
> Ver. 07/01/2025

---

Iniciar MariaDB en Shell

1. Iniciar **XAMPP**.
2. *Start* **Apache** y **MySQL**.
3. Presionar *Shell*.
4. Escribir `mysql -u root -p`

Consultar estado de MariaDB

```sql
STATUS
```

## Bases de Datos

Mostrar bases de datos

```sql
SHOW DATABASES;
```

Crear base de datos

```sql
CREATE DATABASE basededatos CHARACTER SET utf8;
```

Usar base de datos

```sql
USE basededatos;
```

Borrar base de datos

```sql
DROP DATABASE basededatos;
```

## Tablas

Mostrar tablas de la base de datos actual

```sql
SHOW TABLES;
```

Crear tabla

```sql
CREATE TABLE usuarios (
    id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

Descripción de tabla

```sql
DESC tabla;
```

Borrar tabla

```sql
DROP TABLE tabla;
```

### Modificación de Tablas

Renombrar tabla

```sql
ALTER TABLE gente RENAME TO usuarios;
```

Cambiar nombre de una columna

```sql
ALTER TABLE usuarios CHANGE apellidos apellido VARCHAR(100) NULL;
```

Modificar columna (sin cambiar el nombre)

```sql
ALTER TABLE usuarios MODIFY apellido CHAR(40) NULL;
```

Añadir columna

```sql
ALTER TABLE usuarios ADD website VARCHAR(100) NULL;
```

Añadir restricción a columna

```sql
ALTER TABLE usuarios ADD CONSTRAINT uq_email UNIQUE(email);
```

Borrar una columna

```sql
ALTER TABLE usuarios DROP website;
```

## DML

Insertar datos

```sql
INSERT INTO usuarios VALUES(null, 'Antonio', 'Martinez', 'antonio@antonio.com', '1234', '2019-08-05');
```

Consultas

```sql
SELECT * FROM usuarios;
```

```sql
SELECT email, nombre, apellidos FROM usuarios;
```

```sql
SELECT UPPER(nombre) AS 'Nombre', apellidos
FROM usuarios
WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;
```

```sql
SELECT COUNT(titulo) AS 'Número de Entradas', categoria_id
FROM entradas
GROUP BY categoria_id
HAVING COUNT(titulo) >= 4;
```

Subconsultas

```sql
SELECT categoria_id, titulo
FROM entradas
WHERE categoria_id
IN (
    SELECT id
    FROM entradas
    WHERE nombre = 'Deportes'
);
```

Consulta en Multitablas

```sql
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;
```

Vistas

```sql
CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;
```

Modificar datos

```sql
UPDATE usuarios SET fecha='2019-07-09', apellidos='ADMIN' WHERE id=4;
```

Borrar datos

```sql
DELETE FROM usuarios WHERE email = 'admin@admin.com';
```