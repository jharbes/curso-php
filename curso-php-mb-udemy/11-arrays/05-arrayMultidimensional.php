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

Array multidimensional

● Quando inserimos arrays dentro de arrays formamos um array
multidimensional, também conhecido como matriz;
● Para acessar este tipo de array também utilizamos índices, acessando o
externo e depois os internos;
● Ex: $arr[1][0] => Primeiro elemento do segundo array;

*/

  
$arr = [
    [1, 2, 3],
    [2, 4, 6]
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>"; // acessando primeiro array, e segundo elemento
echo $arr[1][2] . "<br>"; // acessando o segundo array, e último elemento

echo count($arr) . "<br>";
echo count($arr[0]) . "<br>";
  
?>
</body>
</html>