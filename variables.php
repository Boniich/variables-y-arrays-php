<?php

// Una variable es un espacio en memoria, al cual le damos un nombre simbolico, y en dicho espacio guardaremos un determinado valor
//Otra definicion: Es una caja donde guardaremos un valor, y que en algun momento, es posible que cambiemos ese valor por otro

$mi_variable = "Hola mundo";

echo $mi_variable;

// Ambito de las variables
// En php existen 3 ambitos para las  variables
// 1- local
// 2- global
// 3- static


// ## Global

// Una variable declarada por fuera de una funcion tiene un ambito o zona de uso que solo puede ser accedida por fuera de la funcion

$numero = 4;

function myTest()
{
    // nos va a dar un error
    echo $numero;
}

myTest();

echo "Mi variable global llamada numero tiene el valor de ". $numero;


//## GLOBAL por dentro de una funcion ### 


// Usando la palabra reservada global para permitir que una variable DECLARADA DE FORMA GLOBAL SEA ACCESIBLE POR DENTRO DE UNA FUNCION

$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();
echo "\n";
echo "Es valor viene de usar la palabra GLOBAL: ".$y; // outputs 15
echo "\n";

$a = 5;
$b = 10;


function myTest3Copy($valor){
  return $total = $valor;
}

echo "Este valor viene de pasar las variables por parametros: ".myTest3Copy($a,$b);
echo "\n";


// ## Local

//Una variable declarada dentro de una funcion, solo es posible acceder y usarla DENTRO DE ESA FUNCION

function myTest2()
{
    $mi_variable_dentro_de_mi_funcion_mytest2 = "Estoy dentro de la funcion myTest2";
    echo $mi_variable_dentro_de_mi_funcion_mytest2;
}

myTest2();

//intentar usar una variable que esta definida dentro de una funcion por fuera de esta, producira un error
echo $mi_variable_dentro_de_mi_funcion_mytest2;

echo "\n";

// ## Static

// Cuando las variables ya no son mas necesarias son eliminadas o destruidas, pero en ciertos casos podemos querer que eso no sea asi
// para mantener ese valor podemos usar la palabra reservada static


echo "Con la palabra reservada static";

echo "\n";

function myTest4() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest4();
  echo "\n";
  myTest4();
  echo "\n";
  myTest4();

  // Cada vez que la funcion se ejecuta recupera la informacion que obtuvo en la ejecucion anterior y arranca desde ahi
  // Veamos que pasa si no usamos la palabra reservada static

  echo "\n";

  echo "SIN la palabra reservada static";

echo "\n";


  function myTest5() {
    $x = 0;
    echo $x;
    $x++;
  }
  
  myTest5();
  echo "\n";
  myTest5();
  echo "\n";
  myTest5();