<?php


// Un array multidimencional es un array que contiene otros arrays

// Php soporta array multidimensionales de dos, tres, cuatro, cinco y mas pero cuanto mas arrays tenemos, mas complejo es manejarlos


//Importante: Al tener mas arrays, aumentan la cantidad de indices.

// Array de dos dimensiones (Esto significa que tenemos una serie de arrays dentro de otro array)
// En el caso de un array de dos dimensiones, tenemos dos indices

// Definimos un array de dos dimensiones, un array, contiene varios arrays, que contiene la informacion
$autos = array(
    array("ferrari","Fitito"),
    array("clio","Honda"),
    array("Toyota","Mitsuvishi")
);

// ## Accedemos de forma manual a cada elemento del array multidimencional
echo "### Accdemos y mostramos de forma manual ###";
echo "\n";
echo "\n";
// Cuando le decimos $autos[0][0], le estamos diciendo, del primer array que esta contenido dentro del array principal, el primer elemento (elemento 0) que es "ferrari"
echo "El auto es un ". $autos[0][0]. "\n"; 
// Cuando le decimos $autos[0][1], le estamos diciendo, del primer array que esta contenido dentro del array principal, el segundo elemento (elemento 1) que es "fitito"
echo "El auto es un ". $autos[0][1]. "\n"; 


echo "El auto es un ". $autos[1][0]. "\n";
echo "El auto es un " . $autos[1][1]. "\n"; 
//Se repeti lo anterior, pero ya no pedimos el primer array, sino el segundo array
echo "El auto es un ". $autos[2][0]. "\n";
echo "El auto es un ". $autos[1][1]. "\n"; 


echo "\n";
echo "\n";
echo "### Recorremos usando doble foreach ###";
echo "\n";

// Para recorrer un array de arrays, podemos usar dos bucles foreach
//El primer foreach recorre el array que contiene los arrays
//El segundo foreach recorre los elementos de cada array
foreach ($autos as $keyColumna => $auto) {
    foreach($auto as $key => $element)
    {
        echo "El auto es un ". $element . "\n"; 
    }

}

// Agregar elementos a un array existen
// Copiamos el array anterior simplemente para trabajar tranquilos

$autos2 = array(
    array("ferrari","Fitito"),
    array("clio","Honda"),
    array("Toyota","Mitsuvishi")
);

//Mostramos el array antes de ser modificado
var_dump($auto2);

//Agregamos el array al array de arrays
$auto2[][] = array("Ford","Audi");

//Mostramos el resultado
var_dump($auto2);

//## Que pasa si queremos agregar varios arrays al mismo tiempo a un array ya existente?

$auto3 = array(
    array("ferrari","Fitito"),
    array("clio","Honda"),
    array("Toyota","Mitsuvishi")
);

//Mostramos el array antes de ser modificado
var_dump($auto3);

//Agregamos el array al array de arrays
//Si tratamos de hacer lo siguiente, nos da un error por la "," pero sin ella como podemos agregar mas de un array a un array
//$auto3[][] = array("Ford","Audi"),array("Subaru","Peugeot");

//Mostramos el resultado
//var_dump($auto3);

//Tambien falla si queremos hacerlo de esta forma

// $array1 = array("Ford","Audi");
// $array2 = array("Subaru","Peugeot");

// $auto3[][] = $array1,$array2;

// var_dump($auto3);


// Usamos el array_push()
$array1 = array("Subaru","Peugeot");
$array2 = array("Ford","Audi");
array_push($auto3,$array1,$array2);
var_dump($auto3);
