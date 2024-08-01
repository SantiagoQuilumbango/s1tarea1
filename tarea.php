<?php
// a. Declaración de Variables:
$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Hola, mundo!";
$booleanVar = true;
$arrayVar = array("manzana", "banana", "cereza", "durazno", "pera");

// b. Operaciones Aritméticas:
$suma = $integerVar + $floatVar;
$producto = $integerVar * $floatVar;

echo "La suma de $integerVar y $floatVar es: " . $suma . "<br>";
echo "El producto de $integerVar y $floatVar es: " . $producto . "<br>";

// c. Manipulación de Cadenas:
$string1 = "Hola";
$string2 = " Mundo";
$cadenaConcatenada = $string1 . $string2;
$longitudCadena = strlen($cadenaConcatenada);

echo "Cadena concatenada: " . $cadenaConcatenada . "<br>";
echo "Longitud de la cadena concatenada: " . $longitudCadena . "<br>";

// d. Uso de Condicionales:
if ($booleanVar) {
    echo "El valor de la variable booleana es verdadero.<br>";
} else {
    echo "El valor de la variable booleana es falso.<br>";
}

// e. Creación de un Array:
echo "El segundo elemento del arreglo es: " . $arrayVar[1] . "<br>";
?>
