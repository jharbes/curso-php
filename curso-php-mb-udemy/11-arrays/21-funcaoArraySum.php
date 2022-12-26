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

Somando itens de um array
● Para somar os itens de um array utilizamos a função array_sum;
● Ela nos retorna a soma de todos elementos numéricos do array que
passamos como argumento;

IMPORTANTE*** : caso haja algum valor nao numerico no array ele será ignorado na soma e ela continuará
normalmente

*/

$arr = [2, 4, 34, 34.1, 324, 12, 34, 1];

$soma = array_sum($arr);

print_r($arr);
echo "<br>";
echo $soma;
echo "<br>";

$arr2 = [2, 4, 34, 34.1, 324, 12, 34, 1,"teste"];

$soma2 = array_sum($arr2);

print_r($arr2);
echo "<br>";
echo $soma2;
  
?>
</body>
</html>