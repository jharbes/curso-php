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
  
if(!(5 > 2)) { // true > false
    echo "A operação 1 é verdadeira <br>";
}

if(!(5 > 20)) { // false > true
    echo "A operação 2 é verdadeira <br>";
}

$a = 10;
$b = 20;

if(!($a >= $b)) {
    echo "A operação 3 é verdadeira <br>";
}
  
?>
</body>
</html>