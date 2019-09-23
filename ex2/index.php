<?php

//ex.1
require_once('functions.php');

$vetor = array(2, 5, 7, 9, 2, 1, 3, 7);

echo "<h1>Exercício 1</h1>";

echo "<br>" . maior($vetor);
echo "<br>" . "Valor booleano: " . buscar(2, $vetor);

//ex.2
require_once('script_aee.php');

$adao = array(0, 0, 0, 0, 0, 1);
$eva = array(1, 1, 1, 1, 1, 0);

$ex2 = checarResultado($eva, 1);

echo "<h1>Exercício 2</h1>";

echo "$ex2";

//ex.3
echo "<h1>Exercício 3</h1>";
$texto = "Stark#Bran, Arya, Tony#Wolf";
$texto = explode("#", $texto);
$nomes = explode(",", $texto[1]);
// $texto = ltrim($texto, " ");
require_once('ex3.html');

//ex.4
echo "<h1>Exercício 4</h1>";
$matriz = array (
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
    );

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
require_once('ex4.html');

//ex.5
echo "<h1>Exercício 5</h1>";
$venda = array (
    array(1, 1, 1, 1, 1),
    array(2, 2, 2, 2, 2),
    array(3, 3, 3, 3, 3),
    array(4, 4, 4, 4, 4),
    array(5, 5, 5, 5, 5)
    );
require_once('ex5.html');

//ex.6
echo "<h1>Exercício 6</h1>";
require_once('tabela.php');
require_once('ex6.html');

?>