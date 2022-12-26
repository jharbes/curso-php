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

Diferença entre arrays
● Podemos verificar qual a diferença entre dois ou mais arrays com PHP;
● A função que vamos utilizar para isso é a array_diff;
● Esta função aceita um número indeterminado de arrays;

Ela funciona subtraindo do array do primeiro argumento todos os elementos que existem iguais 
nos outros arrays que entram como argumentos a partir do segundo argumento

*/

$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];

$diff = array_diff($arr1, $arr2);

print_r($diff);
echo "<br>";

$diff2 = array_diff($arr2, $arr1);

print_r($diff2);
echo "<br>";

$arr3 = [4];

$diff3 = array_diff($arr2, $arr1, $arr3);

print_r($diff3);
echo "<br>";
  
?>
</body>
</html>