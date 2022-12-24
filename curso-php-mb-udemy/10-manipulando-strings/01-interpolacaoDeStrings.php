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

// O ideal é se manter apenas com uma das sintaxes
// trata=se apenas de colocar a variavel no meio da string em vez de ter necessidade de concatenar para que elas sejam impressas junto
// com as strings

$nome = "Matheus";
$idade = 29;
$profissao = "Programador";

echo "Eu sou o $nome e tenho $idade anos, e atuo como $profissao <br>";

echo "Eu sou o {$nome} e tenho {$idade} anos, e atuo como {$profissao} <br>";

// Indiferente com ou sem as chaves ao interpolar as strings
  
?>
</body>
</html>