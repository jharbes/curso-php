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

Resgatando elementos de array
● Com a função array_slice podemos resgatar uma faixa de elementos de
um array;
● Passamos 3 parâmetros: o array, índice inicial (inclusive ele estará no novo array) e quantos elementos
queremos resgatar a partir do índice, caso nao seja informado o numero do elementos será retornado até o fim do array.

*/
  
$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

$slice1 = array_slice($arr, 1, 3); // output [4,6,8]

print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr, 4, 4);

print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr, 4); // nesse caso será a partir do elemento de indice 4 até o fim do array

print_r($slice3);
echo "<br>";

$slice4 = array_slice($arr, 4, -3); // nesse caso ele contará o ultimo elemento de tras pra frente a partir do ultimo elemento do array

print_r($slice4);
echo "<br>";
  
?>
</body>
</html>