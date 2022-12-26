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

Ordem aleatório de itens
● Com a função shuffle podemos reorganizar os itens em ordem aleatória;
● Passamos apenas o array como parâmetro;
● Temos um array retornado em ordem aleatória;

IMPORTANTE*** O array original sempre será alterado

*/

$arr = range(1, 20);

print_r($arr);
echo "<br>";

shuffle($arr);

print_r($arr);
echo "<br>";

shuffle($arr);

print_r($arr);
echo "<br>";
  
?>
</body>
</html>