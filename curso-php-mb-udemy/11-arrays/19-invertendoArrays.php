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

Invertendo arrays
● Com a função array_reverse podemos obter o array ao inverso;
● Passamos apenas o array como argumento;
● O retorno será um array invertido do original;

***IMPORTANTE: O array original nao sera modificado nesse caso.

*/

$arr = [1, 2, 3, 4, 5];

$arrRev = array_reverse($arr);

print_r($arr);
echo "<br>";
print_r($arrRev);
echo "<br>";

$arr2 = ["Matheus", 12, true, [1, 2]];

$arr2Rev = array_reverse($arr2);

print_r($arr2Rev);
  
?>
</body>
</html>