<?php

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<img src="https://i.pinimg.com/originals/63/7f/9a/637f9a3b28ed93d56d050f7d920267ba.jpg" style="width:700px;height:900px;">');
$html2pdf->output();
?>