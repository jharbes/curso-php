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

Ordenação de arrays associativos
● Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar
a função asort; (array sort), no caso de ordem reversa arsort (array reverse sort)
● Se quisermos ordenar o array pelas chaves, utilizamos o valor ksort; (key sort) ou na ordem inversa
        krsort (key reverse sort)

*/

$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

asort($arr); // em ordem crescente pelo valor das chaves

print_r($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
];


arsort($arr2); // em ordem reversa pelo valor das chaves

print_r($arr2);
echo "<br>";

ksort($arr2); // em ordem crescente pelo valor das keys

print_r($arr2);
echo "<br>";

krsort($arr2); // em ordem decrescente pelo valor das keys

print_r($arr2);
echo "<br>";
  
?>
</body>
</html>