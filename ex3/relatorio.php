<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $vendedor1 = $_POST['s11']+$_POST['s12']+$_POST['s13']+$_POST['s14'];
        $vendedor2 = $_POST['s21']+$_POST['s22']+$_POST['s23']+$_POST['s24'];
        $vendedor3 = $_POST['s31']+$_POST['s32']+$_POST['s33']+$_POST['s34'];
        $vendedor4 = $_POST['s41']+$_POST['s42']+$_POST['s43']+$_POST['s44'];

        $semana1 = $_POST['s11']+$_POST['s21']+$_POST['s31']+$_POST['s41'];
        $semana2 = $_POST['s12']+$_POST['s22']+$_POST['s32']+$_POST['s42'];
        $semana3 = $_POST['s13']+$_POST['s23']+$_POST['s33']+$_POST['s43'];
        $semana4 = $_POST['s14']+$_POST['s24']+$_POST['s34']+$_POST['s44'];

        $mes = $semana1 + $semana2 + $semana3 + $semana4;
        
        echo
        "Vendedor " . $_POST['vendedor1'] . ": " . $vendedor1 . "<br>" . 
        "Vendedor " . $_POST['vendedor2'] . ": " . $vendedor2 . "<br>" . 
        "Vendedor " . $_POST['vendedor3'] . ": " . $vendedor3 . "<br>" . 
        "Vendedor " . $_POST['vendedor4'] . ": " . $vendedor4 . "<br><br>" ;

        echo
        "<table><tr> <td>Semana 1</td> <td>Semana 2</td> <td>Semana 3</td> <td>Semana 4</td> <td>TOTAL</td> </tr>" .
        "<tr> <td>${semana1}</td> <td>${semana2}</td> <td>${semana3}</td> <td>${semana4}</td> <td>${mes}</td> </tr></table>";
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $mes = $_GET['s1'] + $_GET['s2'] + $_GET['s3'] + $_GET['s4'];
        echo "Vendedor " . $_GET['vendedorNovo'];
        echo
        "<table><tr> <td>Semana 1</td> <td>Semana 2</td> <td>Semana 3</td> <td>Semana 4</td> <td>TOTAL</td> </tr>" .
        "<tr> <td>" . $_GET['s1'] . "</td> <td>" . $_GET['s2'] . "</td> <td>" . $_GET['s3'] . "</td> <td>" . $_GET['s4'] . "</td> <td> ${mes} </td> </tr></table>";
    }
    
    //código para PUT
    if($_SERVER['REQUEST_METHOD'] == 'PUT'){

        $dados = file_get_contents('php://input');

        parse_str($dados, $_PUT);

        print_r($_PUT);
    }
        
    //código para DELETE
    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

        $dados = file_get_contents('php://input');

        parse_str($dados, $_DELETE);

        print_r($_DELETE);
    }

    //no HTML
    //<input type=“hidden” name=“_method” value=“PUT”>
    //print_r($_SERVER['REQUEST_METHOD']);
?>