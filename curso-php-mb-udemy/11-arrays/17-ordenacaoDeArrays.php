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

Ordenação de arrays
● Para ordenar em ordem crescente podemos utilizar a função sort em um
array;
● Para ordenar de forma inversa utilizamos rsort;

*/

$arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];
  
sort($arr);

print_r($arr);
echo "<br>";


$arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

rsort($arr2);

print_r($arr2);
echo "<br>";


$nomes = ["Maria", "Aaron", "Joao", "José", "Matheus"];

sort($nomes); // a ordenacao em letra com acento em geral são feitas depois de todas as outras letras, 
                // importante atentar para isso em ordenacao de strings com acentos

print_r($nomes);
echo "<br>";
  
?>
</body>
</html>