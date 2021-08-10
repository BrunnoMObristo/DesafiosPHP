<?php

$armas = 'Armas obtidas: ';
$arma1 = 'Charged Shot';
$arma2 = 'Ice Shot';

$armas = "As armas obtidas são $arma1 e $arma2 que estão no conjunto atual de Samus";
echo $armas, '<br>';

$armas = "As armas obtidas são ".$arma1." e ".$aram2." que estão no conjunto atual de Samus";
echo $armas, '<br>';

$armas = "As armas obtidas são {$arma1} e {$arma2} que estão no conjunto atual de Samus";
echo $armas, '<br>';

$armas = 'As armas são ';
$armas .= $arma1;
$armas .= ' e '; 
$armas .= $arma2; 
$armas .= 'que estão no conjunto atual de Samus';
echo $armas;

?>