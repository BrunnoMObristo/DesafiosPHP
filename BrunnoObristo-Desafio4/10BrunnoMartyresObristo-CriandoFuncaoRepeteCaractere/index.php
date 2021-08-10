<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<?php  

include '10BrunnoMartyresObristo-CriandoFuncaoRepeteCaractere.php';

//Exercício 9
 if(isset($_POST["submitar"]) == "POST"){  

   
    $texto =  $_POST['texto']; 
    
    $resul = "";
    
    if(!empty($texto)){
    $resultado = new Repete();        

    echo $resultado->RepetirCaracteres($texto), '<br>';

    }
 }

?>

<!-- Exercício 9 -->
<form action="index.php" method="POST">
<h1>Exercício 10</h1>
<input type="text" id="texto" name="texto" class="" placeholder="Digite aqui:">

<input type="submit" name="submitar"></button>
</form>

