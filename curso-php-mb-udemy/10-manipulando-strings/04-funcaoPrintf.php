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

// printf vem da expressao print format
  
$nome = "Matheus";

// %s -> string

printf("O nome é %s <br>", $nome);

// %d -> int

$n = 10;

printf("O número é %d e o outro é %d <br>", $n, 150);

// %f -> float

printf("A temperatura atual é %.1f <br>", 12.58); // o .1 faz com que imprima com apenas uma casa decimal, arredondando se for o caso.
  
?>
</body>
</html>