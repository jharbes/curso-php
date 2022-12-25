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

Chaves e valores
● Com a função array_keys recebemos um array apenas com as chaves de
um array;
● Com a função array_values recebemos um array com apenas os valores
de um array;

*/

$vetorSimples=[10,20,30,40,50];

$vetorSimplesKeys=array_keys($vetorSimples);
$vetorSimplesValues=array_values($vetorSimples);

print_r($vetorSimplesKeys);
echo "<br>";
print_r($vetorSimplesValues);

echo "<hr>";

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'Manual',
    'portas' => 4
];

$chaves = array_keys($carro); // output apenas dos keys do array

print_r($chaves);
echo "<br>";

$valores = array_values($carro); // output apenas com os valores do array

print_r($valores);
echo "<br>";
  
?>
</body>
</html>