<!-- <!DOCTYPE html>
<html>

    <body>

        <h1>Cabeçalho</h1>
        <p>E um elemento parágrafo.</p>

    </body>

</html> -->

<?php

function ex3($altura, $sexo){
    $sexo = strtoupper ($sexo);
    
    switch($sexo){
        case "M":
            return (62.1 * $altura) - 44.7;
            break;
        case "H":
            return (72.7 * $altura) - 58;
            break;
        default:
            return "Erooou!";
            break;
    }
    
}

?>