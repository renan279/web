<?php

    $a = 10;

    $b = '10';

###########
    //ex. 1
    echo "<h1>Exercício 1</h1>";
    if ($a === (int)$b) :
        echo $a + $b;
    else :
        echo $a - $b;
    endif;

###########
    //ex. 2
    echo "<h1>Exercício 2</h1>";
    function status($numero1 = 0, $numero2 = 0, $numero3 = 10){
        $media = $numero1 + $numero2 + $numero3;
        if ( $media >= 7) :
            return $media . " - aprovado";
        elseif ( $media >= 4) :
            return $media . " - prova final";
        else :
            return $media . " - reprovado";
        endif;            
    }

    echo status(0, 0, 0);

###########
    //ex. 3
    echo "<h1>Exercício 3</h1>";
    require_once('script_lista_1.php');
    echo ex3(1.93, 'H');

###########
    //ex. 4
    echo "<h1>Exercício 4</h1>";
    for($i = 1; $i <= 6; $i++){
        echo "<h".$i.">" . "Olá mundo" . "</h".$i.">";
    } 

###########
    //ex. 5
    echo "<h1>Exercício 5</h1>";
    $link = 'http://www.utfpr.edu.br';
    $label = 'UTFPR';
    echo "<br/> $link$label";
    echo "<br/>" . $link . $label;

###########
    //ex. 6
    echo "<h1>Exercício 6</h1>";
    require_once('script_lista_1.html');

?>