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

Exercício 46
● Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
● Imprima todos os elementos de cada um dos arrays;
● Imprima também quando está mudando de array;

*/

$testeForeach=[50,100,150,200];

$arrayMulti=[
    range(0,3),
    range(4,7),
    range(8,11)
];

var_dump($arrayMulti);
var_export($arrayMulti);    

echo "<hr>";

foreach($arrayMulti as $arrayItem){
    foreach ($arrayItem as $item){
        echo $item." - ";
    }
    echo "Trocando de array<br>";
}

echo "<hr>";

foreach ($testeForeach as $key => $value) { // foreach com indice e valor, podemos omitir o key e deixar apenas o value.
    echo "<p>$key => $value</p>";
}
  
?>
</body>
</html>