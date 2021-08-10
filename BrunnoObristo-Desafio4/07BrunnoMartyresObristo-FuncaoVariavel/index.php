<?php

    $armadura = "Fully Powered Suit";

    var_dump($armadura);

    if(isset($armadura)){
        echo "Samus está vestindo sua armadura.";
    }
    else if(empty($armadura)){
        echo "Samus está com seu suit básico";
    }
    else{
        echo "+18";
    }

    unset($armadura);
?>