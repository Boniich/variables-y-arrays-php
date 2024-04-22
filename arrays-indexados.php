<?php

// ## Array indexados
// Un array indexado es un tipo de array en el cual vamos agregando valores de forma seguida, separando con "," (coma)
// Los array indexados en casi cualquier lenguaje inician de 0 y van subiendo

echo "## Arrays indexados ##";
echo "\n";

echo "### Declaramos un array indexado y lo mostramos con var_dump ###";

$auto = array("Ferrari","fitito","Clio");

echo "\n";
var_dump($auto);
echo "\n";

echo "### Accedemos a un elemento en particular del array usando su index";

echo "\n";

echo $auto[2];

echo "\n";
echo "### Agregamos un nuevo elemento al array";

echo "\n";
$auto[] = "Toyota";
var_dump($auto);
echo "\n";

echo "### Agregamos multiples valores al array";

// para esto debemos hacer uso del array_push()
echo "\n";
array_push($auto,"Mustang","Tesla","Ford");
var_dump($auto);
echo "\n";
echo "### Cambiamos el valor de un elemento del array usando su index";

echo "\n";
echo "Antes de cambiar: ";
echo $auto[2];
echo "\n";
echo "Despues de cambiar: ";
echo $auto[2] = "Ford";

echo "\n";

echo "### Recorremos el array usando un bucle";
echo "\n";

foreach ($auto as $value) {
    echo $value;
    echo "\n";
}






?>