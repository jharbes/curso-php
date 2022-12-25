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

Adicionando valor ao fim do array
● Podemos adicionar valor ao fim de um array utilizando a atribuição sem
determinar um índice;
● Então o valor atribuído será enviado para o último e novo índice do array;
● Exemplo: $arr[] = 5;

*/


$arr = [1, 2, 3];

$arr[] = 4;

print_r($arr);
echo "<br>";

$arr[] = 5;

print_r($arr);
echo "<br>";


$arr2 = [];

$arr2[] = 1;

print_r($arr2);
echo "<br>";

$arr3 = [];

$arr3['teste'] = 'testando';

print_r($arr3);
echo "<br>";
  
?>
</body>
</html>