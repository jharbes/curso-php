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

// A string funciona como um vetor de caracteres onde cada um de seus caracteres é um indice do vetor,
// importante lembrar que acento e letra sao caracteres distintos nesse caso e nao serao impressos
// adequadamente sozinhos

$str = "Esta é uma string muito grande, ela tem vários caracteres";

for($i = 0; $i < strlen($str); $i++) {

    echo "$str[$i] <br>";

}
  
?>
</body>
</html>