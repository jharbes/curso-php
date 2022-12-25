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

Exercício 45
● Crie um array com a função range de 10 a 45;
● Imprima todos os números com uma soma de 6;
● Se passar de 30 a soma, imprima também que o número é muito alto;

*/

$array=range(10,45);

foreach ($array as $item){
    $item=$item+=6;
    echo $item;
    if ($item>30)
        echo "Número muito alto!";
    echo "<br>";
}
  
?>
</body>
</html>