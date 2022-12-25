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

Adicionando dados a um array

● Podemos criar novos índices com dados em um array;

● Basta por o nome do array com o novo índice em colchetes e atribuir um
valor;

● Ex: $arr[1] = “teste”;

● E em arrays associativos basta utilizar o nome da nova chave com a
atribuição de valor;

*/
  
$arr = [];

// Adicionando valores
print_r($arr);
echo "<br>";

$arr[0] = 10;

print_r($arr);
echo "<br>";

$arr[1] = 15;

print_r($arr);
echo "<br>";

$arr[5] = 25;

print_r($arr);
echo "<br>";

// Modificar valores
$arr[1] += 55;

print_r($arr);
echo "<br>";

$arrAssoc = [];

print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["aviao"] = "Boeing";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "Ferrari";

print_r($arrAssoc);
echo "<br>";
  
?>
</body>
</html>