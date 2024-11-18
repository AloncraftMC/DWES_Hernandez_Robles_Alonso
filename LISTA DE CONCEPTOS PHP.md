# LISTA DE CONCEPTOS PHP
> Alonso Hernández Robles 2º DAW
> Ver. 18/11/2024 (_Ahora en Markdown!_)

---

## Comentarios

```
// Comentario de línea
# Comentario de línea

/* Comentario
de
párrafo
*/
```


## Mensajes

Imprimir texto

```
echo "Hola Mundo";
echo $mi_variable;
echo "Tengo ".$manzanas." manzanas.";

print("Hola Mundo");
```

Salto de línea

```
echo "<br>";
```

Cualquier otra etiqueta de HTML

```
echo "<table>";
echo "<tr><td> XD </td></tr>";
echo "</table>";
```

Ejecutar comando (sintaxis de SO)

```
echo `ls -la`;
echo `dir`;
```

Mostrar información completa de variable

```
var_dump($variable);
```

Mostrar array u objeto

```
print_r($miArray);
```

---

## Información

Mostrar metadatos útiles de PHP

```
phpinfo();
```

---

## Constantes

Declarar constante

```
define("PI", 3.141592);
```

¿Está definida la constante?

```
defined("PI")
```

---

## Variables y Tipos de Datos

Declarar e inicializar variable

```
$mi_variable = 3;
```

Entero

```
$mi_variable = 10;
$mi_variable = 0x2A;
```

Booleano

```
$mi_variable = true;
```

Decimal

```
$mi_variable = 4.5;
$mi_variable = 7.3e-1;
```

Cadena

```
$mi_variable = "texto";
```

Nulo

```
$mi_variable = null;
```

Mixto (en clase; en función)

```
private mixed $mi_variable
public function mi_funcion(mixed $mi_variable) {...}
```

### Conversión de Tipos

Convertir a entero

```
(int) $variable
```

Convertir a decimal

```
(double) $variable
(float) $variable
(real) $variable
```

Convertir a booleano

```
(boolean) $variable
```

Convertir a cadena

```
(string) $variable
```

Convertir a array

```
(array) $variable
```

Convertir a objeto

```
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

```
++$variable;
```

Incremento posterior

```
$variable++;
```

Decremento anterior

```
--$variable;
```

Decremento posterior

```
$variable--;
```

Sumar valor a variable

```
$variable += $valor;
```

Restar valor a variable

```
$variable -= $valor;
```

Multiplicar valor a variable

```
$variable *= $valor;
```

Dividir valor a variable

```
$variable /= $valor;
```

Hacer módulo a variable

```
$variable %= $valor;
```

Hacer potencia con valor a variable

```
$variable **= valor;
```

Concatenar valor (texto) a variable

```
$variable .= $valor
```

Convertir a entero o decimal si no lo es ya

```
$variable = +$variable;
```

Multiplicar variable por $2^{valor}$

```
$variable <<= $valor;
```

Dividir variable por $2^{valor}$

```
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

```
$$var;
```

---

## Condicionales

### Condicional `if else`

Si se da `condición`, realizar `instrucción`

```
if(condición) {
	// instrucción
}
if(condición) instruccion();
```

Si se da `condición`, realizar `1`, si no, `2`.

```
if(condición){
	// 1
}else{
	// 2
}
```

Si se da `condición`, mostrar `1`, si no, `2`.

```
echo (condición) ? "1" : "2";
```

Múltiple condición

```
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

### Condicional `switch` / `match`

Realizar instrucción dependiendo del valor de `variable`

```
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

Elemento dependiendo de valor de `variable`

```
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

```
while(condición) {
	// Instrucción
}
```

### Bucle `do while`

Realizar `instrucción` y repetir mientras se cumpla `condición`

```
do{
	// Instrucción
}while(condición);
```

### Bucle `for`

Realizar `inicialización` y repetir `instrucción` mientras se cumpla `condición`, y realizar `iteración`

```
for(inicialización, condición, iteración){
	// Instrucción
}
```

Bucle `foreach` para array indexado

```
foreach ($array as $elemento) {
	echo $elemento;
}
```

Bucle `foreach` para array asociativo

```
foreach ($array as $clave => $valor) {
	echo $clave . ":" . $valor;
}
```

### `break` y `continue`

Salir del bucle

```
while(condición){
	break;
}
```

Ejecutar siguiente iteración del bucle

```
while(condición){
	continue;
}
```

---

## Función `gettype()`

Obtener tipo de dato de variable (`integer` / `double` / `boolean` / `string` / `null` / `object`)

```
gettype($variable);
```

---

## Referencia de Variables

Crear variable de referencia a variable `$a` llamada `$b`

```
$b = &$a;
```

---

## Funciones de Variables

¿Está inicializada y no es nula la variable?

```
isset($variable)
```

¿Existe y está vacía?

```
empty($variable)
```

Eliminar variable en memoria

```
unset($variable);
```

¿Es `<tipo de dato>`?


```
is_integer($variable)
is_string($variable)
is_bool($variable)
is_array($variable)
is_double($variable)
is_null($variable)
is_array($variable)
is_object($variable)
```



## Funciones de Salida

Salir del script

```
exit();
exit("Mensaje");
die();
die("Mensaje");
```

Salir del script devolviendo un valor

```
return $valor;
```

---

## Librerías y Ficheros

Ruta de directorio actual

```
__DIR__
```

Incluir fichero (También devuelve el valor devuelto en su código)

```
include("fichero.php");
include __DIR__ . "fichero.php";
```

Cargar fichero

```
header("Location: rutaDeArchivo.php");
```

---

## Variables Superglobales

Sanitizar variable

```
htmlspecialchars($variable);
```

Variable `$_POST` (Array asociativo con claves que son los `name` de un `<form>`)

```
$_POST
```

Acceder a clave de `$_POST` con `name = "usuario"`

```
$_POST["usuario"]
```

Variable `$_GET` (Array asociativo con claves mostradas en la URL)

```
$_GET
```

Acceder a clave de `$_GET` con `name = "clave"`

```
$_GET["clave"]
```

Variable `$_REQUEST` (Array asociativo con todos los campos ya sean de `$_GET` o `$_POST`)

```
$_REQUEST
```

Acceder a clave de `$_REQUEST` con `name = "clave"`

```
$_REQUEST["clave"]
```

Variable `$_FILES` (Array bidimensional asociativo con todos los archivos y sus atributos)

```
$_FILES
```

Acceder a archivo de `$_FILES` con `name = "archivo"`

```
$_FILES["archivo"]
```

Acceder a propiedades de un archivo

```
$_FILES["archivo"]["name"]	// Nombre
$_FILES["archivo"]["type"]	// Tipo
$_FILES["archivo"]["size"]	// Tamaño
$_FILES["archivo"]["tmp_name"]	// Nombre en el cliente
$_FILES["archivo"]["error"]	// Error
```

Variable `$_SERVER` (Array asociativo con ...)

```
$_SERVER
```

Método de la solicitud del formulario (devuelve `"GET"` o `"POST"`)

```
$_SERVER["REQUEST_METHOD"]
```

---

## Fechas

Generar objeto tiempo de: hoy

```
strtotime("now")
```

Generar objeto tiempo de: fecha en string

```
strtotime(string)
strtotime("02-10-2024")
```

Generar objeto tiempo de: tiempo de fecha específica con offset

```
strtotime("offset", tiempo);

$hoy = strtotime("now");
$mañana = strtotime("+1 day", $hoy);
```

Tipos de offsets

- `+1 day` Un día más
- `-2 month` - 2 meses menos
- `+3 year` 3 años más

Generar objeto fecha con formato `dd/mm/yyyy` de: hoy 

```
date("d/m/Y");
```

Generar objeto fecha con formato `dd/mm/yyyy` de: tiempo de fecha específica

```
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

```
$string[posicion]
```

Longitud de string

```
strlen($string)
```

String al revés

```
strrev($string)
```

String en minúscula

```
strtolower($string)
```

String en mayúscula

```
strtoupper($string)
```

Comparar string

```
strcmp($string1, $string2)
```

Posición de primera ocurrencia de `string2` dentro de `string1`

```
strpos($string1, $string2);
```

¿`string1` contiene `string2`?

```
str_contains($string1, $string2)
```

¿`string1` empieza por `string2`?

```
str_starts_with($string1, $string2)
```

¿`string1` acaba por `string2`?

```
str_ends_with($string1, $string2)
```

Array de substrings separados por `","` en string (similar a `split()` de Java)

```
explode(",", $string)
```

Generar string a partir de array

```
implode(",", $array)
```

---

## Número Aleatorio

Generar número aleatorio entre `1` y `100` (incluyente)

```
rand(1, 100)
```

---

## Redondeo

Valor redondeado a `n` decimales

```
round($valor, n)
```

---

## Funciones `decode()` y `uncode()` HTML

Codificar texto a valores URL

```
urlencode(texto)
```

Descodificar texto de valores URL

```
urldecode(texto)
```

---

## Expresiones Regulares

Comprobar que variable cumple con expresión regular

```
preg_match($patron, $variable)
```

Patrón que contenga la letra `a`

```
"/a/"
```

Patrón que contenga la letra `a` o `b`

```
"/a|b/"
```

Patrón que contenga una letra de `a`, `b` o `c`

```
"/[abc]/"
```

Patrón que sea solamente un número

```
"/^[0-9]$/"
```

Patrón que sean solamente `3` números

```
"/^[0-9]{3}$/"
```

Patrón que contenga `3` números

```
"/[0-9]{3}/"
```

Patrón que empiece por `3` números

```
"/^[0-9]{3}/"
```

Patrón que acabe por `3` números

```
"/[0-9]{3}$/
```

Patrón que contenga mayúsculas

```
"/[A-Z]/"
```

Patrón que contenga minúsculas

```
"/[a-z]/"
```

Patrón que no contenga minúsculas

```
"/[^a-z]/"
```

Patrón que contenga `3` o más minúsculas

```
"/[a-z]{3,}/"
```

Patrón que contenga `1` o más minúsculas

```
"/[a-z]+/"
```

Patrón que contenga `0` o más minúsculas

```
"/[a-z]*/"
```

Patrón que contenga `0` o `1` minúscula

```
"/[a-z]?/"
```

Patron que contenga un número o minúscula o mayúscula

```
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

### Anexo 4. Apéndice de Metacaracteres y Equivalencias:

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

```
throw new InvalidArgumentException("Mensaje de error");
```

Cazar excepción

```
try{
	// Código peligroso
}catch(InvalidArgumentException $iae){
	// Mensaje de error informativo
}
```

Mensaje de la excepción

```
$iae->getMessage()
```

---

## Arrays

Crear array indexado

```
$miArray = ["Pepe", 20.3, "XD"];
```

Crear array asociativo (similar a `HashMap` de Java)

```
$capitales = ["España" => "Madrid", "Francia" => "París", "Italia" => "Roma"];
```

Acceder a posición de array

```
$miArray[0] = 5;
$miArray[1] = "X";
$capitales["España"]
```

Agregar valor a array

```
$miArray[] = valor;
```

Tamaño de array

```
count($miArray)
```

Generar array de números en un rango ordenadamente

```
range(1, 10)
```

Array nuevo de función aplicada a elementos de un array

```
$arrayModificado = array_map($funcion, $array);
```

Array nuevo de sólo los elementos de un array que cumplan un criterio

```
$arrayFiltrado = array_filter($array, $funcion);
```

Valor devuelto luego de aplicar una función a un array iterativamente con un acumulador y su valor inicial

```
$valor = array_reduce($array, $funcion, $valorInicialAcum);
```

Almacenar en variables los valores de un array (Desestructuración)

```
list($a, $b, $c, $d) = [1, 2, 3, 4];
```

Array Multidimensional

```
$miArray = [[1, 2], [3, 4], [5, 6]];
$miArray[0][1]
```

Ordenar array original indexado ascendentemente y descendentemente

```
sort($array);
rsort($array);
```

Ordenar array original asociativo por valores ascendentemente y descendentemente

```
asort($array);
arsort($array);
```

Ordenar array original asociativo por claves ascendentemente y descendentemente

```
ksort($array);
krsort($array);
```

Ordenar array original por criterio

```
usort($array, criterio);
```

¿Está en un array un valor?

```
in_array($valor, $array)
```

Array de valores de un array (redundante pero sirve)

```
array_values($array)
```

Array de claves de un array

```
array_keys($array)
```

¿Existe la clave en el array?

```
array_key_exists($array, $clave)
```

Array al revés

```
array_reverse($array);
```

Insertar valor/es al final de un array

```
array_push($array, ...$valores);
```

Extraer valor al final de un array (null si está vacío)

```
array_pop($array)
```

Insertar valor/es al principio de un array

```
array_unshift($array, ...$valores);
```

Extraer valor al principio de un array (null si está vacío)

```
array_shift($array)
```

Intercambiar claves por valores

```
array_flip($array)
```

Posición actual del puntero en el array

```
current($array)
```

Moverse a posición anterior del puntero del array

```
prev($array);
```

Moverse a posición posterior del puntero del array

```
next($array);
```

Posición de la primera ocurrencia de elemento en array (`indexOf` de Java)

```
array_search($elemento, $array)
```

Porción del array empezando por un valor y de una longitud determinada, opcionalmente manteniendo las claves

```
array_slice($array, $inicio, $longitud, $preservarClaves)
```

Reemplazar elementos de un array que están empezando por un valor y con una longitud determinada, por otros valores

```
array_splice($array, $inicio, $longitud, $valoresNuevos);
```

Dos arrays concatenados

```
array_merge($array1, $array2)
```

---

## Funciones

Definir función

```
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

```
saludar();
echo suma(1,3);
```

Usar función con argumentos desplegados (Las dos siguientes son equivalentes)

```
$nums = [1, 2, 3];

sumarTodo(1, 2, 3)
sumarTodo(...$nums)
```

Función como variable

```
$comparaEnteros = function($num1, $num2) {
	if ($num1 > $num2) return 1;
	if ($num1 < $num2) return -1;
	return 0;
}
$comparaEnteros(10,20);
```

Función flecha (es directamente `return`)

```
fn($num) => $num ** 2
```

---

## Variables Globales

Crear referencia a variable global en función (importarla)

```
function miFuncion() {
	global $variable;
}
```

Usar variable global en función anónima (con `use`)

```
function($argumento) use($variable) {
	// Instrucciones
}
```

---

## Variables Estáticas

Crear y usar variable estática en función

```
function contador() {
	static $cont = 0;
	$cont++;
}
```

---

## Clases y Objetos

Crear clase

```
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

```
$objeto = new Objeto(12, "Hola", null);
$vacio = new Vacio();
```

Atributo que puede ser nulo

```
?String cadena;
?int entero;
```