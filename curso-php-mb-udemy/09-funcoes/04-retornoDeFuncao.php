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
  
function soma($n1, $n2) {

    return $n1 + $n2;

}

echo soma(4, 4) . "<br>";

$x = soma(2, 4);

echo $x . "<br>";

$y = soma($x, 19);

echo $y . "<br>";

function testeRetorno() {

    return "Testando";

}

$z = testeRetorno();

echo $z . "<br>";        
  
?>
</body>
</html>