<?php
    $armadura = "Fully Powered Suit";
    $qtdMisseis = 20;
    $precoMissel = 1,50;    

    if(is_int($qtdMisseis)){
        echo "qtdMisseis é int";
    }
    if(is_float($precoMissel)){
        echo "precoMissel é float";
    }
    if(is_string($armadura))
        echo "armadura é string";
    }    
?>