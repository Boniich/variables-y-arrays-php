<?php

// Arrays Asociativos
// Los arrays asociativos son arrays que tiene una forma de llave-valor

//por ejemplo

$autos = array("marca" => "Ferrari","color" => "azul");
var_dump($autos);

echo "\n";

// Accediendo a un elemento del array asociativo
// En los asociativos como en vez de usar numeros, usamos una palabra, es esta palabra la que debemos usar para seleccionar un determinado elemento del array
echo $autos["marca"];

echo "\n";

// Cambiando el valor de un elemento del array asociativo
// En los asociativos como en vez de usar numeros, usamos una palabra, es esta palabra la que debemos usar para seleccionar un determinado elemento del array
echo "### Antes de re asignar valor al elemento ###";
echo "\n";
echo $autos["marca"];
echo "\n";
echo "### Despues de re asignar valor al elemento ###";
echo "\n";
echo $autos["marca"] = "fitito";

// Recorrer un array asociativo usando un foreach es lo mismo que un indexado

echo "\n";
echo "### Recorremos un array usando un foreach ###";
echo "\n";
foreach ($autos as $key => $valor) {
    echo $key . " : " . $valor;
    echo "\n";
}



//A diferencia de los indexados, que podemos agregar diferentes autos dentro de un array
//cuando usamos un asociado, solo podemos tener informacion sobre una cosa sola


//tenemos nuestro array con dobles llaves, llamadas iguales
$autos2 = array("marca" => "Ferrari","color" => "Rojo" , "marca" => "Clio","color" => "azul");


// Si bien no nos tira error, vemos que el array solo contiene el ultimo par de datos (los de clio)
// esto aplica para cualquier otra accion, mostrar, cambiar, etc
var_dump($autos2);
echo "\n";
// si lo recorremos veremos lo mismo
foreach ($autos2 as $key => $valor) {
    echo $key . " : " . $valor;
    echo "\n";
}

// Si bien no podemos agregar de forma repetida una llave, por lo tanto no podemos tener pares diferentes de informacion
// si podemos agregar una llave a un array existente

$autos["cantidad_puertas"] = 4;
echo "\n";
var_dump($autos);

// si queremos agregar varias llaves con su valor a un array asociativo existente
// debemos hacer lo siguiente
echo "Antes de agregar nuevas propiedades " . "\n";
$nuevo_array = ["nombre" => "Ezequiel", "apellido" => "Bonino"];
var_dump($nuevo_array);
echo "Despues de agregar nueva propiedades" . "\n";

$nuevo_array += ["edad" => 32, "color_ojos" => "Marrones"];
echo "\n";
var_dump($nuevo_array);