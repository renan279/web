<?php
require_once('tabela.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    foreach($equipes as $pora => $id){
        
        $aux = $equipes[$pora];
        
        if($_GET['time1']==$aux['nome']) :
            $time1 = $classificacao[$aux['id']];
        endif;
        
        if($_GET['time2']==$aux['nome']) :
            $time2 = $classificacao[$aux['id']];
        endif;
    }

echo $time1['posicao'];
echo $time2['posicao'];

    if($time1['posicao'] >= $time2['posicao']) :
        echo "Vencedor: " . $_GET['time1'];
    else :
        echo "Vencedor: " . $_GET['time2'];
    endif; 

}

?>