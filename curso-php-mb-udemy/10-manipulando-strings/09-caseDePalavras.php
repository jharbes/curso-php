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
  
$frase = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";
$frase3 = "testando o case de uma palavra <br>";

// Primeira letra da string em maiúsculo
echo ucfirst($frase);
echo ucfirst($frase2);

// Todas as palavras com as iniciais maiúsculas
echo ucwords($frase3);
echo ucwords($frase2);
  
?>
</body>
</html>