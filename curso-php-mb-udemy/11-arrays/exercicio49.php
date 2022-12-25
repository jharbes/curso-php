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

Exercício 49
● Crie variáveis com característica de algum objeto ou animal;
● Depois crie um array com compact com estas mesmas variáveis;
● Faça um loop no array e imprima os valores;

*/

$carro="vermelho";
$nota=8.5;
$nome="Jorge";
$aprovado=true;

$arrayCompact=compact("carro","nota","nome","aprovado");

foreach ($arrayCompact as $key => $value) {
    echo "$key -> $value<br>";
}

print_r($arrayCompact);     
  
?>
</body>
</html>