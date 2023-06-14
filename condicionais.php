<?php
    #CONDICIONAIS
    #TRADICIONAL IF
    $idade = 16;
    if ($idade >= 17){
        echo("É MAIOR DE IDADE<br>");
    }
    else {
        echo("É MENOR DE IDADE<br>");
    }
    echo("<br>");
    #CONDICIONAL BUNITA
    $idade2 = 18;
    echo($idade2 >= 18?"É MAIOR DE IDADE":"É MENOR DE IDADE");
?>