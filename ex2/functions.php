<?php

function maior($numero){
    return max($numero);
}

function menor($numero){
    return min($numero);
}

function medir($numero){
    return count($numero);
}

function media($numero){
    $qtd = medir;
    $med = array_sum($numero) / $qtd;
    return $med;
}

function ordenar($numero){
    return $numero = sort($numero);
}

function buscar($numero, $k){
    $resultado = array_search($k,  $numero);
    if ($resultado >= 0) :
        $resultado=True;
    else :
        $resultado=False;
    endif;
    return $resultado;
}

?>