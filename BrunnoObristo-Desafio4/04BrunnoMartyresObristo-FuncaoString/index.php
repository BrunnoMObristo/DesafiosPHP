
<?php
$armas = 'Armas deste con';

$armas = strtoupper($armas);
echo $armas, '<br>';

$armas = strtolower($armas);
echo $armas, '<br>';

$parteTexto = substr($armas, 8, 5);
echo $parteTexto, '<br>';

$qtde = strlen($armas);
echo 'Quantidade de caracteres: '.$qtde, '<br>';

$textoAlterado = str_replace($armas, 'con','conjunto');
echo 'Texto alterado: '.$textoAlterado, '<br>';