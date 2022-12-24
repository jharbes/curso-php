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

$str = "esta string está em caixa baixa <br>";

echo strtoupper($str); // coloca toda a string em caixa alta, string to upper

$str2 = "E ESTA AQUI EM CAIXA ALTA <br>";

echo strtolower($str2); // coloca toda a string em caixa baixa, string to lower
  
?>
</body>
</html>