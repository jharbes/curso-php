<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Curso de PHP</h1>
<?php

// alteracao de tipagem automatica da variavel chama-se autocast 
$operacao="5"*12;

echo $operacao;
echo "<br>";

echo gettype($operacao);

echo "<br>";

echo gettype([]);

echo "<br>";

echo gettype(12.2);

echo "<br>";

echo gettype("Jorge");

?>
</body>
</html>