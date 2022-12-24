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

// Esse método encontra alguma string dentro de outra string.
// Nesse caso ele retorna o indice inicial da primeira vez que a string procurada aparece
// retorna false caso nao encontre a string em questao
  
$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo "$testeEncontrar <br>";

$testeEncontrar2 = strpos($str, "Java");

echo "$testeEncontrar2 <br>";

if($testeEncontrar2 === false) {
    echo "Palavra não encontrada <br>";
}

$palavra = "com";

$testeEncontrar3 = strpos($str, $palavra);

echo "$testeEncontrar3 <br>";

$palavra2 = "to";

$testeEncontrar4 = strpos($str, $palavra2);

echo "$testeEncontrar4 <br>";
  
?>
</body>
</html>