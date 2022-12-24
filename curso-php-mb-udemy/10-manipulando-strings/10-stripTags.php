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

// Utilizamos para remover tags de HTML das strings
// Muito usado por exemplo para salvarmos o texto em um banco de dados
  
$textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;
  
?>
</body>
</html>