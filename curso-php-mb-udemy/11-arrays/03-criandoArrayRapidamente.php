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

Criar array rapidamente

● Podemos utilizar a função range para criar um array de forma rápida;

● Exemplo: range(1, 10);

● Um array de 1 a 10 será criado, podemos atribuir este valor a uma
variável;

*/
  
$arr = range(1, 10); // cria um array com numeros de 1 a 10 (10 elementos)

print_r($arr);
echo "<br>";

$arr2 = range(5, 50); // cria um array com numeros de 5 a 50 (46 elementos)

print_r($arr2);
echo "<br>";

$arr3 = range(0, 1000, 100); // cria um array com numeros de 0 a 100, pulando de 100 em 100 (11 elementos)

print_r($arr3);
echo "<br>";
  
?>
</body>
</html>