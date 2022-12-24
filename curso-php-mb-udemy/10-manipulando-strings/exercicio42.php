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

Na frase "Cadê meu queijo? Ele estava aqui em cima"
Resgate apenas a palavra queijo e a palavra estava.

*/

$stringOriginal="Cadê o meu queijo? Ele estava aqui em cima";

$palavra1=substr($stringOriginal,12,6);

echo "<p>A primeira palavra resgatada é <mark>$palavra1</mark></p>";

$palavra2=substr($stringOriginal,24,6);

echo "<p>A segunda palavra resgatada é <mark>$palavra2</mark></p>";
  
?>
</body>
</html>