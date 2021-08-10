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
//Exercício 11
 if(isset($_POST["submitar"]) == "POST"){  


    $texto =  $_POST['texto']; 

    if(!empty($texto)){

        switch ($texto) {
            case is_int($texto):
                echo "Int";
                break;
            case is_string($texto):
                echo "string";
                break;
            case is_double($texto):
                echo "double";
                break;
        }
    }else{
        
    }
}

?>

<!-- Exercício 11 -->
<form action="index.php" method="POST">
<h1>Exercício 11</h1>
<input type="string" id="texto" name="texto" class="" placeholder="Digite aqui:">

<input type="submit" name="submitar"></button>
</form>

