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

Dividindo arrays
● Podemos dividir um array grande em diversos arrays de número de
elementos iguais;
● Vamos utilizar a função array_chunk;
● Passamos o array como argumento e também o número de elementos
que cada array deve ter;

*/

$arr = range(1, 20); // cria um array com elementos de 1 a 20

print_r(array_chunk($arr, 4)); 
echo "<br><hr>";

$arrays = array_chunk($arr, 10);

print_r($arrays);
echo "<br><hr>";

print_r($arrays[1]);
echo "<br>";
  
?>
</body>
</html>