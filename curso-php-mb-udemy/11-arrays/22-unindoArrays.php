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

Unindo arrays
● Podemos unir arrays, a ação também é conhecida como merge;
● A função que vamos utilizar é a array_merge;
● Que como argumento aceita um número indeterminado de arrays;

*/

$arr1 = [1, 2, 3];
$arr2 = [10, 40, 90];
$arr3 = [2.1, 44.5, 43.3];
$arr4 = ["asd", "as", "a"];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0,1]);

print_r($arrMerge);
echo "<br>";
  
?>
</body>
</html>