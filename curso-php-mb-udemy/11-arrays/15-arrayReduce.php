<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        h3{
            background-color: yellowgreen;
            width: fit-content;
        }
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1><hr>
<?php
  
/*

Reduce em arrays
● A função array_reduce tem como objetivo reduzir um array a apenas um
valor;
● Podemos passar uma segunda função como parâmetro, para algum
processo ser executado;
array_reduce($arr, $funcao);

*/

$arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

function soma($a, $b) {
    return $a + $b;
}

function subtracao($a, $b) {
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

$resultado2 = array_reduce($arr, "subtracao");

echo "$resultado2 <br>";
  
?>
</body>
</html>