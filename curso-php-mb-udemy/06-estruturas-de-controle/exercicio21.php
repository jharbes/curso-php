<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1>
<?php
  
$a = 5;
$b = 2;

if($a > $b) {

    echo "Entrou no if 1 <br>";

}

$nome = "Matheus";
$nome2 = "Pedro";

if($nome != $nome2) {

    echo "Entrou no if 2 <br>";

}

$x = 12;
$y = 11;

if($x <= $y) {

    echo "Entrou no if 3 <br>";

}
  
?>
</body>
</html>