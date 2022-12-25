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

Número de elementos
● Podemos obter o número de elementos de um array com a função count;
● Basta passar o array como argumento;
● Um inteiro será retornado;

*/
  
$arr = [1, 2, 3];

echo count($arr) . "<br>";

$arr2 = range(1, 10);

echo count($arr2) . "<br>";

$arr3 = ['nome' => 'Matheus', 'idade' => 29, 'profissao' => 'Programador'];

echo count($arr3) . "<br>";
  
?>
</body>
</html>