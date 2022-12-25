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

Removendo elementos
● Podemos remover elementos de um array com a função array_splice;
● Passamos como parâmetro o array, índice inicial e quantos elementos
queremos remover;
● Ex: array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento;

*/

// RESGATAR ELEMENTOS DE ARRAY
// REMOVER ELEMENTOS

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 1, 2); // $removidos recebera os elementos removidos e o vetor original PERDERA**** esses elementos!!

print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br><hr>";

$arr2 = [1, 2, 3, 4, 5, 6];

$removidos2 = array_splice($arr2, 3); // remove todos os elementos a partir do indice 3 (inclusive)

print_r($arr2);
echo "<br>";

print_r($removidos2); // recebeu os elementos removidos
echo "<br><hr>";


$arr3 = [1, 2, 3, 4, 5, 6];

$removidos3 = array_splice($arr3, 1, -1); // exclui do indice 1 ate o indice -1 (esse negativo contado a partir do ultimo elemento do vetor) para de contar no -1

print_r($arr3);
echo "<br>";

print_r($removidos3);
echo "<br><hr>";

array_splice($arr3,1); // nao precisa necessariamente salvar os excluidos em variaveis

print_r($arr3)
  
?>
</body>
</html>