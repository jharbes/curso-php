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

Exercício 48
● Crie um array com os valores: batata, maçã, pera, feijão, arroz;
● Remova pera e feijão;

*/

$vetor=['batata', 'maçã', 'pera', 'feijão', 'arroz'];

array_splice($vetor,2,2);

var_dump($vetor);
  
?>
</body>
</html>