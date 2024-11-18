# LISTA DE CONCEPTOS PHP
> Alonso Hernández Robles 2º DAW
> Ver. 18/11/2024 (_Ahora en Markdown!_)

---

## Comentarios

```php
// Comentario de línea
# Comentario de línea

/* Comentario
de
párrafo
*/
```

## Mensajes

Imprimir texto

```php
echo "Hola Mundo";
echo $mi_variable;
echo "Tengo ".$manzanas." manzanas.";

print("Hola Mundo");
```

Salto de línea

```php
echo "<br>";
```

Cualquier otra etiqueta de HTML

```php
echo "<table>";
echo "<tr><td> XD </td></tr>";
echo "</table>";
```

Ejecutar comando (sintaxis de SO)

```php
echo `ls -la`;	// Mac OS & Linux
echo `dir`;	// Windows
```

Mostrar información completa de variable

```php
var_dump($variable);
```

Mostrar array u objeto

```php
print_r($miArray);
```

---

## Información

Mostrar metadatos útiles de PHP

```php
phpinfo();
```

---

## Constantes

Declarar constante

```php
define("PI", 3.141592);
```

¿Está definida la constante?

```php
defined("PI")
```

---

## Variables y Tipos de Datos

Declarar e inicializar variable

```php
$mi_variable = 3;
```

Entero

```php
$mi_variable = 10;
$mi_variable = 0x2A;
```

Booleano

```php
$mi_variable = true;
```

Decimal

```php
$mi_variable = 4.5;
$mi_variable = 7.3e-1;
```

Cadena

```php
$mi_variable = "texto";
```

Nulo

```php
$mi_variable = null;
```

Mixto (en clase; en función)

```php
private mixed $mi_variable
public function mi_funcion(mixed $mi_variable) {...}
```

### Conversión de Tipos

Convertir a entero

```php
(int) $variable
```

Convertir a decimal

```php
(double) $variable
(float) $variable
(real) $variable
```

Convertir a booleano

```php
(boolean) $variable
```

Convertir a cadena

```php
(string) $variable
```

Convertir a array

```php
(array) $variable
```

Convertir a objeto

```php
(object) $variable
```

---

## Operadores

### Operadores Aritméticos

`+` Suma

`-` Resta

`*` Multiplicación

`/` División

`%` Módulo

`**` Potencia

`.` Concatenación

`>>` Bit a la derecha

`<<` Bit a la izquierda

Incremento anterior

```php
++$variable;
```

Incremento posterior

```php
$variable++;
```

Decremento anterior

```php
--$variable;
```

Decremento posterior

```php
$variable--;
```

Sumar valor a variable

```php
$variable += $valor;
```

Restar valor a variable

```php
$variable -= $valor;
```

Multiplicar valor a variable

```php
$variable *= $valor;
```

Dividir valor a variable

```php
$variable /= $valor;
```

Hacer módulo a variable

```php
$variable %= $valor;
```

Hacer potencia con valor a variable

```php
$variable **= valor;
```

Concatenar valor (texto) a variable

```php
$variable .= $valor
```

Convertir a entero o decimal si no lo es ya

```php
$variable = +$variable;
```

Multiplicar variable por $2^{valor}$

```php
$variable <<= $valor;
```

Dividir variable por $2^{valor}$

```php
$variable >>= $valor;
```

### Operadores Relacionales

`==` Igual (valores)

`===` Estrictamente igual (valores y tipo)

`!=` Distinto

`<>` Distinto

`!==` Estrictamente distinto (valores y tipo)

`>` Mayor


`>=` Mayor o igual

`<` Menor

`<=` Menor o igual

`<=>` Menor (`-1`), igual (`0`) o mayor (`1`)

### Operadores Lógicos

`&&` AND

`||` OR

`!` NOT

`??` OR pero sin lógica (`0` es `true`)

---

## Variables de Variables

Crear variable cuyo nombre es el valor de la variable `$var`

```php
$$var;
```

<details>
	<summary>Ejemplo</summary>

```php
$var = "nombre";
$$var = "Juan";

echo $nombre;  // Imprime: Juan
```
</details>

---

## Condicionales

### Condicional `if else`

Si se da `condición`, realizar `instrucción`

```php
if(condición) {
	// instrucción
}
if(condición) instruccion();
```

<details>
	<summary>Ejemplo 1</summary>

```php
$edad = 18;
if($edad >= 18) {
    echo "Eres mayor de edad.";
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$usuarioActivo = true;
if($usuarioActivo) echo "Usuario activo.";
```
</details>

Si se da `condición`, realizar `1`, si no, `2`.

```php
if(condición){
	// 1
}else{
	// 2
}
```

<details>
	<summary>Ejemplo 1</summary>

```php
$hora = 10;
if($hora < 12) {
    echo "Buenos días";  // Si la hora es antes de las 12
} else {
    echo "Buenas tardes";  // Si la hora es 12 o después
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$usuarioAutenticado = false;
if($usuarioAutenticado) {
    echo "Acceso concedido";  // Si el usuario está autenticado
} else {
    echo "Acceso denegado";  // Si el usuario no está autenticado
}
```
</details>

Si se da `condición`, mostrar `1`, si no, `2`.

```php
echo (condición) ? "1" : "2";
```

<details>
	<summary>Ejemplo 1</summary>

```php
echo ($esAdmin) ? "Bienvenido al sistema" : "Acceso denegado";
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$numero = 5;
$resultado = ($numero % 2 == 0) ? "Par" : "Impar";
echo "El número es: $resultado";
```
</details>

Múltiple condición

```php
if(condición1){
	// 1
}else if(condición2){
	// 2
}else if(condición3){
	// 3
}else{
	// Resto
}
```

<details>
	<summary>Ejemplo 1</summary>

```php
$hora = 14;
if($hora < 12) {
    echo "Buenos días";  // Si la hora es antes de las 12
} else if($hora < 18) {
    echo "Buenas tardes";  // Si la hora es entre las 12 y las 18
} else {
    echo "Buenas noches";  // Si la hora es después de las 18
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$puntos = 85;
if($puntos >= 90) {
    echo "Excelente";  // Si los puntos son 90 o más
} else if($puntos >= 70) {
    echo "Bueno";  // Si los puntos son 70 o más pero menos de 90
} else if($puntos >= 50) {
    echo "Regular";  // Si los puntos son 50 o más pero menos de 70
} else {
    echo "Insuficiente";  // Si los puntos son menos de 50
}
```
</details>

### Condicional `switch` / `match`

Realizar instrucción dependiendo del valor de `$variable`

```php
switch($variable){
	case 1:
		// 1
		break;
	case 2:
		// 2
		break;
	case 3:
		// 3
		break;
	default:
		// Resto
}
```

<details>
	<summary>Ejemplo 1</summary>

```php
$color = "rojo";
switch($color) {
	case "azul":
		echo "Color azul";
		break;
	case "rojo":
		echo "Color rojo";
		break;
	case "verde":
		echo "Color verde";
		break;
	default:
		echo "Color desconocido";
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$edad = 25;
switch($edad) {
	case 18:
		echo "Tienes 18 años.";
		break;
	case 25:
		echo "Tienes 25 años.";
		break;
	case 30:
		echo "Tienes 30 años.";
		break;
	default:
		echo "Edad no especificada.";
}
```
</details>

Elemento dependiendo de valor de `$variable`

```php
echo match($variable){
	1 => "Lunes",
	2 => "Martes",
	3 => "Miércoles",
	4 => "Jueves",
	5 => "Viernes",
	6 => "Sábado",
	7 => "Domingo",
	default => "Por defecto"
}
```

---

## Bucles

### Bucle `while`

Repetir `instrucción` mientras se cumpla `condición`

```php
while(condición) {
	// Instrucción
}
```

<details>
	<summary>Ejemplo</summary>

```php
$contador = 1;
while($contador <= 5) {
    echo "Contador: $contador\n";
    $contador++;  // Aumenta el contador en cada iteración
}
```
</details>

### Bucle `do while`

Realizar `instrucción` y repetir mientras se cumpla `condición`

```php
do{
	// Instrucción
}while(condición);
```

<details>
	<summary>Ejemplo</summary>

```php
$contador = 1;
do {
    echo "Contador: $contador\n";
    $contador++;  // Aumenta el contador en cada iteración
} while($contador <= 5);
```
</details>

### Bucle `for`

Realizar `inicialización` y repetir `instrucción` mientras se cumpla `condición`, y realizar `iteración`

```php
for(inicialización, condición, iteración){
	// Instrucción
}
```

<details>
	<summary>Ejemplo 1</summary>

```php
for($i = 0; $i < 5; $i++) {
    echo $i . "\n";
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
for($i = 10; $i >= 0; $i--) {
    echo $i . "\n";
}
```
</details>

### Bucle `foreach`

Recorrer array indexado

```php
foreach ($array as $elemento) {
	echo $elemento;
}
```

<details>
	<summary>Ejemplo 1</summary>

```php
$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $numero) {
    echo $numero . "\n";
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$nombres = ["Pepe", "Lola", "Alex", "Ana", "Javi"];
foreach ($nombres as $nombre) {
    echo $nombre . "\n";
}
```
</details>

Recorrer array asociativo

```php
foreach ($array as $clave => $valor) {
	echo $clave . ":" . $valor;
}
```

<details>
	<summary>Ejemplo 1</summary>

```php
$capitales = ["España" => "Madrid", "Francia" => "París", "Portugal" => "Lisboa"];
foreach ($capitales as $pais => $capital) {
    echo "La capital de " . $pais . " es " . $capital ".\n";
}
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$array = ["nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid"];
foreach ($array as $clave => $valor) {
    echo "$clave: $valor\n";
}
```
</details>

### `break` y `continue`

Salir del bucle

```php
while(condición){
	break;
}
```

<details>
	<summary>Ejemplo</summary>

```php
$numero = 10;
while($numero > 0) {
    if($numero == 5) {
        break;  // Sale del bucle cuando $numero es igual a 5
    }
    echo "Número: $numero\n";
    $numero--;
}
```
</details>

Ejecutar siguiente iteración del bucle

```php
while(condición){
	continue;
}
```

<details>
	<summary>Ejemplo</summary>

```php
$numero = 10;
while($numero > 0) {
    $numero--;
    if($numero % 2 == 0) {
        continue;  // Salta la iteración cuando $numero es par
    }
    echo "Número impar: $numero\n";
}
```
</details>

---

## Función `gettype()`

Obtener tipo de dato de variable (`integer` / `double` / `boolean` / `string` / `null` / `object`)

```php
gettype($variable);
```

---

## Referencia de Variables

Crear variable de referencia a variable `$a` llamada `$b`

```php
$b = &$a;
```

<details>
	<summary>Ejemplo 1</summary>

```php
$a = 10;
$b = &$a;  // $b es una referencia a $a
$b = 20;   // Cambia el valor de $b y también el de $a
echo $a;   // Imprime 20, ya que $b y $a son la misma variable
```
</details>

<details>
	<summary>Ejemplo 2</summary>

```php
$nombre = "Juan";
$referencia = &$nombre;  // $referencia es una referencia a $nombre
$referencia = "Pedro";   // Cambia el valor de $referencia y también el de $nombre
echo $nombre;            // Imprime "Pedro", ya que $referencia apunta a $nombre
```
</details>

---

## Funciones de Variables

¿Está inicializada y no es nula la variable?

```php
isset($variable)
```

<details>
	<summary>Ejemplo</summary>

```php
$nombre = "Juan";
if(isset($nombre)) {
    echo "La variable está definida.";
} else {
    echo "La variable no está definida.";
}
```
</details>

¿Existe y está vacía?

```php
empty($variable)
```

<details>
	<summary>Ejemplo</summary>

```php
$variable = "";
if(empty($variable)) {
    echo "La variable está vacía.";
} else {
    echo "La variable no está vacía.";
}
```
</details>

Eliminar variable en memoria

```php
unset($variable);
```

<details>
	<summary>Ejemplo</summary>

```php
$nombre = "Juan";
unset($nombre);  // Elimina la variable $nombre
```
</details>

¿Es `<tipo de dato>`?


```php
is_integer($variable)
is_string($variable)
is_bool($variable)
is_array($variable)
is_double($variable)
is_null($variable)
is_array($variable)
is_object($variable)
```

---

## Funciones de Salida

Salir del script

```php
exit();
exit("Mensaje");
die();
die("Mensaje");
```

Salir del ámbito devolviendo un valor

```php
return $valor;
```

---

## Librerías y Ficheros

Ruta de directorio actual

```php
__DIR__
```

Incluir / Ejecutar `fichero.php` (También devuelve el valor devuelto en su código)

```php
include("fichero.php");
include __DIR__ . "fichero.php";
```

<details>
	<summary>Ejemplo</summary>

`fichero.php`
```php
$mensaje = "Hola desde el archivo incluido";
```

`Archivo Principal`
```php
include("fichero.php");
echo $mensaje;  // Imprime "Hola desde el archivo incluido"
```
</details>

Redirigir navegador a `rutaDeArchivo.php` y ejecutarlo

```php
header("Location: rutaDeArchivo.php");
```

<details>
	<summary>Ejemplo</summary>

```php
// Instrucciones

header("Location: rutaDeArchivo.php"); // Redirige a 'rutaDeArchivo.php'
exit();  // Es recomendable usar exit después de redirigir
```
</details>

---

## Variables Superglobales

Sanitizar variable de caracteres conflictivos

```php
htmlspecialchars($variable);
```

<details>
	<summary>Ejemplo</summary>

```php
$texto = "<Hola>";
echo htmlspecialchars($texto);  // Imprime "&lt;Hola&gt;"
```
</details>

Variable `$_POST` (Array asociativo con claves que son los `name` de un `<form>`)

```php
$_POST
```

Acceder a clave de `$_POST` con `name = "usuario"`

```php
$_POST["usuario"]
```

<details>
	<summary>Ejemplo 1</summary>

`index.html`
```html
<html>
	<head>
		<title>Ejemplo 1</title>
	</head>
	<body>
		<form method="post" action="index.php">
			<input type="text" name="nombre"/>
			<input type="submit"/>
		</form>
	</body>
</html>
```

`index.php`
```php
$nombre = $_POST["nombre"];
echo "Hola, " . $nombre;
```
</details>

<details>
	<summary>Ejemplo 2</summary>

`index.html`
```html
<html>
	<head>
		<title>Ejemplo 2</title>
	</head>
	<body>
		<form method="post" action="index.php">
			<input type="email" name="email"/>
			<input type="submit"/>
		</form>
	</body>
</html>
```

`index.php`
```php
if(isset($_POST["email"]) && !empty($_POST["email"])) {
    echo "El email es: " . $_POST["email"];
} else {
    echo "No se ha enviado un email.";
}
```
</details>

<details>
	<summary>Ejemplo 3</summary>

`index.html`
```html
<html>
	<head>
		<title>Ejemplo 3</title>
	</head>
	<body>
		<form method="post" action="index.php">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" required/>
			<br>
			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido" required/>
			<br>
			<label for="edad">Edad:</label>
			<input type="number" name="edad" required/>
			<br>
			<input type="submit" value="Enviar"/>
		</form>
	</body>
</html>
```

`index.php`
```php
if(!isset($_POST["nombre"]) || empty($_POST["nombre"])) exit();
if(!isset($_POST["apellido"]) || empty($_POST["apellido"])) exit();
if(!isset($_POST["edad"]) || empty($_POST["edad"])) exit();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];

echo "Hola, $nombre $apellido. Tienes $edad años.";
```
</details>

<details>
	<summary>Ejemplo 4</summary>

`index.html`
```html
<html>
	<head>
		<title>Ejemplo 4</title>
	</head>
	<body>
		<form method="post" action="index.php">
			<label for="usuario">Usuario:</label>
			<input type="text" name="usuario" required/>
			<br>
			<label for="password">Contraseña:</label>
			<input type="password" name="password" required/>
			<br>
			<label for="remember">Recordarme</label>
			<input type="checkbox" name="remember" value="1"/>
			<br>
			<input type="submit" value="Iniciar sesión"/>
		</form>
	</body>
</html>
```

`index.php`
```php
if(!isset($_POST["usuario"]) || empty($_POST["usuario"])) exit();
if(!isset($_POST["password"]) || empty($_POST["password"])) exit();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Validación simple
if($usuario == "admin" && $password == "1234") {
    echo "Bienvenido, $usuario!";
    if(isset($_POST["remember"]) && $_POST["remember"] == "1") {
        echo " Has elegido recordar tu sesión.";
    }
} else {
    echo "Usuario o contraseña incorrectos.";
}
```
</details>

Variable `$_GET` (Array asociativo con claves mostradas en la URL)

```php
$_GET
```

Acceder a clave de `$_GET` con `name = "clave"`

```php
$_GET["clave"]
```

Variable `$_REQUEST` (Array asociativo con todos los campos ya sean de `$_GET` o `$_POST`)

```php
$_REQUEST
```

Acceder a clave de `$_REQUEST` con `name = "clave"`

```php
$_REQUEST["clave"]
```

Variable `$_FILES` (Array bidimensional asociativo con todos los archivos y sus atributos)

```php
$_FILES
```

Acceder a archivo de `$_FILES` con `name = "archivo"`

```php
$_FILES["archivo"]
```

Acceder a propiedades de un archivo

```php
$_FILES["archivo"]["name"]	// Nombre
$_FILES["archivo"]["type"]	// Tipo
$_FILES["archivo"]["size"]	// Tamaño
$_FILES["archivo"]["tmp_name"]	// Nombre en el cliente
$_FILES["archivo"]["error"]	// Error
```

Variable `$_SERVER` (Array asociativo con información del servidor)

```php
$_SERVER
```

Método de la solicitud del formulario (devuelve `"GET"` o `"POST"`)

```php
$_SERVER["REQUEST_METHOD"]
```

---

## Fechas

Generar objeto tiempo de: hoy

```php
strtotime("now")
```

Generar objeto tiempo de: fecha en string

```php
strtotime(string)
strtotime("02-10-2024")
```

Generar objeto tiempo de: tiempo de fecha específica con offset

```php
strtotime("offset", tiempo);

$hoy = strtotime("now");
$mañana = strtotime("+1 day", $hoy);
```

Tipos de offsets

- `"+1 day"` Un día más
- `"-2 month"` 2 meses menos
- `"+3 year"` 3 años más

Generar objeto fecha con formato `dd/mm/yyyy` de: hoy 

```php
date("d/m/Y");
```

Generar objeto fecha con formato `dd/mm/yyyy` de: tiempo de fecha específica

```php
date("d/m/Y", strtotime("02-10-2024"))
```

Tipos de formatos de `date`

- `d` Día en número
- `D` Día en tres letras
- `m` Mes en número
- `M` Mes en tres letras
- `y` Año en dos números
- `Y` Año en cuatro números



## Funciones de Strings

Carácter en posición

```php
$string[posicion]
```

Longitud de string

```php
strlen($string)
```

String al revés

```php
strrev($string)
```

String en minúscula

```php
strtolower($string)
```

String en mayúscula

```php
strtoupper($string)
```

Comparar strings

```php
strcmp($string1, $string2)
```

Posición de primera ocurrencia de `string2` dentro de `string1`

```php
strpos($string1, $string2);
```

¿`string1` contiene `string2`?

```php
str_contains($string1, $string2)
```

¿`string1` empieza por `string2`?

```php
str_starts_with($string1, $string2)
```

¿`string1` acaba por `string2`?

```php
str_ends_with($string1, $string2)
```

Array de substrings separados por `","` de `$string` (similar a `split()` de Java)

```php
explode(",", $string)
```

Generar string a partir de array de strings, separados por `","`

```php
implode(",", $array)
```

---

## Número Aleatorio

Generar número aleatorio entre `1` y `100` (incluyente)

```php
rand(1, 100)
```

---

## Redondeo

Valor redondeado a `n` decimales

```php
round($valor, n)
```

---

## Funciones `decode()` y `uncode()` HTML

Codificar texto a valores URL

```php
urlencode(texto)
```

Descodificar texto de valores URL

```php
urldecode(texto)
```

---

## Expresiones Regulares

Comprobar que variable cumple con expresión regular

```php
preg_match($patron, $variable)
```

Patrón que contenga la letra `a`

```php
"/a/"
```

Patrón que contenga la letra `a` o `b`

```php
"/a|b/"
```

Patrón que contenga una letra de `a`, `b` o `c`

```php
"/[abc]/"
```

Patrón que sea solamente un número

```php
"/^[0-9]$/"
```

Patrón que sean solamente `3` números

```php
"/^[0-9]{3}$/"
```

Patrón que contenga `3` números

```php
"/[0-9]{3}/"
```

Patrón que empiece por `3` números

```php
"/^[0-9]{3}/"
```

Patrón que acabe por `3` números

```php
"/[0-9]{3}$/
```

Patrón que contenga mayúsculas

```php
"/[A-Z]/"
```

Patrón que contenga minúsculas

```php
"/[a-z]/"
```

Patrón que no contenga minúsculas

```php
"/[^a-z]/"
```

Patrón que contenga `3` o más minúsculas

```php
"/[a-z]{3,}/"
```

Patrón que contenga `1` o más minúsculas

```php
"/[a-z]+/"
```

Patrón que contenga `0` o más minúsculas

```php
"/[a-z]*/"
```

Patrón que contenga `0` o `1` minúscula

```php
"/[a-z]?/"
```

Patron que contenga un número o minúscula o mayúscula

```php
"/[0-9A-Za-z]/"
```

### Anexo 1. Literales y Conjuntos específicos y de Rango

| Expresión         | Descripción                   |
|-------------------|-------------------------------|
| `a`               | Literal                       |
| `[abc]`           | Conjunto específico           |
| `[A-Z]`           | Conjunto de Rango             |
| `[A-Za-z0-9]`     | Conjunto Agrupado de Rango    |
| `[A-Zabc]`        | Conjunto Agrupado Mixto       |

### Anexo 2. Delimitación de cadena

| Expresión | Descripción |
|-----------|-------------|
| `^`       | Inicio      |
| `$`       | Fin         |
| `\|`      | OR          |
| `[^...]`  | NOT         |

### Anexo 3. Apéndice de Cuantificadores

| Expresión   | Descripción            |
|-------------|------------------------|
| `?`         | `0` o `1` veces        |
| `*`         | `0` o más veces        |
| `+`         | `1` o más veces        |
| `{5}`       | `5` veces              |
| `{3,}`      | Más de `3` veces       |
| `{3,9}`     | Entre `3` y `9` veces  |

### Anexo 4. Apéndice de Metacaracteres y Equivalencias

| Expresión | Descripción                  | Equivalencia          |
|-----------|------------------------------|-----------------------|
| `\d`      | Dígito                       | `[0-9]`               |
| `\D`      | No dígito                    | `[^0-9]`              |
| `\w`      | Carácter Alfanumérico        | `[A-Za-z0-9]`         |
| `\W`      | Carácter No Alfanumérico     | `[^A-Za-z0-9]`        |
| `\s`      | Espacio Invisible            | `[ \t\n\r\f\v]`       |
| `\S`      | Carácter No Invisible        | `[^ \t\n\r\f\v]`      |
| `.`       | Comodín (Excepto `\n`)       | No tiene              |


---

## Excepciones

Lanzar excepción

```php
throw new InvalidArgumentException("Mensaje de error");
```

Cazar excepción

```php
try{
	// Código peligroso
}catch(InvalidArgumentException $iae){
	// Mensaje de error informativo
}
```

Mensaje de la excepción

```php
$iae->getMessage()
```

---

## Arrays

Crear array indexado

```php
$miArray = ["Pepe", 20.3, "XD"];
```

Crear array asociativo (similar a `HashMap` de Java)

```php
$capitales = ["España" => "Madrid", "Francia" => "París", "Italia" => "Roma"];
```

Acceder a posición de array

```php
$miArray[0] = 5;
$miArray[1] = "X";
$capitales["España"]
```

Agregar valor a array

```php
$miArray[] = valor;
```

Tamaño de array

```php
count($miArray)
```

Generar array de números en un rango ordenadamente

```php
range(1, 10)
```

Array nuevo de función aplicada a elementos de un array

```php
$arrayModificado = array_map($funcion, $array);
```

Array nuevo de sólo los elementos de un array que cumplan un criterio

```php
$arrayFiltrado = array_filter($array, $funcion);
```

Valor devuelto luego de aplicar una función a un array iterativamente con un acumulador y su valor inicial

```php
$valor = array_reduce($array, $funcion, $valorInicialAcum);
```

Almacenar en variables los valores de un array (Desestructuración)

```php
list($a, $b, $c, $d) = [1, 2, 3, 4];
```

Array Multidimensional

```php
$miArray = [[1, 2], [3, 4], [5, 6]];
$miArray[0][1]
```

Ordenar array original indexado ascendentemente y descendentemente

```php
sort($array);
rsort($array);
```

Ordenar array original asociativo por valores ascendentemente y descendentemente

```php
asort($array);
arsort($array);
```

Ordenar array original asociativo por claves ascendentemente y descendentemente

```php
ksort($array);
krsort($array);
```

Ordenar array original por criterio

```php
usort($array, criterio);
```

¿Está en un array un valor?

```php
in_array($valor, $array)
```

Array indexado de valores de un array (sea indexado o asociativo)

```php
array_values($array)
```

Array indexado de claves de un array

```php
array_keys($array)
```

¿Existe la clave en el array?

```php
array_key_exists($array, $clave)
```

Array al revés

```php
array_reverse($array);
```

Insertar valor/es al final de un array

```php
array_push($array, ...$valores);
```

Extraer valor al final de un array (`null` si está vacío)

```php
array_pop($array)
```

Insertar valor/es al principio de un array

```php
array_unshift($array, ...$valores);
```

Extraer valor al principio de un array (`null` si está vacío)

```php
array_shift($array)
```

Intercambiar claves por valores

```php
array_flip($array)
```

Posición actual del puntero en el array

```php
current($array)
```

Moverse a posición anterior del puntero del array

```php
prev($array);
```

Moverse a posición posterior del puntero del array

```php
next($array);
```

Posición de la primera ocurrencia de elemento en array (`indexOf()` de Java)

```php
array_search($elemento, $array)
```

Porción del array empezando por un valor y de una longitud determinada, opcionalmente manteniendo las claves

```php
array_slice($array, $inicio, $longitud, $preservarClaves)
```

Reemplazar elementos de un array que están empezando por un valor y con una longitud determinada, por otros valores

```php
array_splice($array, $inicio, $longitud, $valoresNuevos);
```

Dos arrays concatenados

```php
array_merge($array1, $array2)
```

---

## Funciones

Definir función

```php
function saludar() {
	echo "Hola";
}

function suma(int|float $a, int|float $b) : int|float {
	return $a + $b;
}

function hola(?String $nombre) : void {
	echo "Hola ".$nombre;
}

function mostrar($string = "Valor por defecto") : void {
	echo $string;
}

function sumarTodo(...$numeros) : void {
	$suma = 0;
	for($i = 0; $i < count($numeros); $i++){
		$suma += $numeros[$i];
	}
	return $suma;
}
```

Ejecutar función

```php
saludar();
echo suma(1,3);
```

Usar función con argumentos desplegados (Las dos siguientes son equivalentes)

```php
$nums = [1, 2, 3];

sumarTodo(1, 2, 3)
sumarTodo(...$nums)
```

Función como variable

```php
$comparaEnteros = function($num1, $num2) {
	if ($num1 > $num2) return 1;
	if ($num1 < $num2) return -1;
	return 0;
}
$comparaEnteros(10,20);
```

Función flecha (es directamente `return`)

```php
fn($num) => $num ** 2
```

---

## Variables Globales

Crear referencia a variable global en función (importarla)

```php
function miFuncion() {
	global $variable;
}
```

Usar variable global en función anónima (con `use`)

```php
function($argumento) use($variable) {
	// Instrucciones
}
```

---

## Variables Estáticas

Crear y usar variable estática en función

```php
function contador() {
	static $cont = 0;
	$cont++;
}
```

---

## Clases y Objetos

Crear clase

```php
class Objeto {

	private int|float $atributo1;
	private string $atributo2;
	private mixed $atributo3;
	private $atributo4;

	public function __construct(int|float $atributo1, string $atributo2, mixed $atributo3, $atributo4) {
		$this->atributo1 = $atributo1;
		$this->atributo2 = $atributo2;
		$this->atributo3 = $atributo3;
		$this->atributo4 = $atributo4;
	}

	public function getAtributo1() : int|float {
		return $this->atributo1;
	}
	public function getAtributo2() : string{
		return $this->atributo2;
	}
	public function getAtributo3() : mixed{
		return $this->atributo3;
	}
	public function getAtributo4() {
		return $this->atributo4;
	}

	public function setAtributo1(int|float $atributo1) {
		$this->atributo1 = $atributo1;
	}
	public function setAtributo2(string $atributo2) {
		$this->atributo2 = $atributo2;
	}
	public function setAtributo3(mixed $atributo3) {
		$this->atributo3 = $atributo3;
	}
	public function setAtributo3($atributo4) {
		$this->atributo4 = $atributo4;
	}
	
}
```

Crear objeto

```php
$objeto = new Objeto(12, "Hola", null);
$vacio = new Vacio();
```

Atributo que puede ser nulo

```php
?String cadena;
?int entero;
```