<?php

function checarResultado($vetor, $k){
    if ($k == 1) :
        return array_sum($vetor);
    else :
        return array_sum($vetor) - array_count_values($vetor);
    endif;
}

?>
