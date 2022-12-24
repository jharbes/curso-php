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

// FUNCAO EXPLODE = transforma uma string em um array com base em um separador previamente selecionado.
  
$frase = "Testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase); // Nao conseguirá separar pois não existe virgula na frase

print_r($fraseArray2);
echo "<br>";

$fraseB = "Carro, Avião, Barco, Navio";

$fraseBArray = explode(",", $fraseB);

print_r($fraseBArray);
echo "<br>";

for($i = 0; $i < count($fraseBArray); $i++) {

    echo "$fraseBArray[$i] <br>";

}
  
?>
</body>
</html>