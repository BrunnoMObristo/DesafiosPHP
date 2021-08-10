
<?php
$armadura = 'Varia Suit';

$novoTexto = str_pad($armadura, 20, '*', STR_PAD_BOTH);
echo 'Ambos: ', $novoTexto, '<br>';

$novoTexto = str_pad($armadura, 20, '*', STR_PAD_RIGHT);
echo 'Direito: ', $novoTexto, '<br>';

$novoTexto = str_pad($armadura, 20, '*', STR_PAD_LEFT);
echo 'Esquerdo: ', $novoTexto, '<br>';

?>