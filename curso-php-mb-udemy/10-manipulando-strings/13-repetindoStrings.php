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

// Lembrando que a string original permanece inalterada

$str = "Teste";

$strRepetida = str_repeat($str, 5); // Repete 5 vezes a string original uma após a outra

echo "$strRepetida <br>";

$frase = "Testando repetição por frase ";

echo str_repeat($frase, 3);
  
?>
</body>
</html>