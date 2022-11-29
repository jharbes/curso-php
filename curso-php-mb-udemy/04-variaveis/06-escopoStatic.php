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
<h3><mark>Utilizando escopo static, esse escopo é utilizado para declarar variáveis DENTRO de funções, assim ao chamar novamente a mesma função o valor da variável permanecerá com o valor que ela tinha na última chamada, ou seja, seu valor não se perde.</mark></h3>
<?php

function teste() {
    $a = 0;
    $a++;
    echo "$a <br>";
}

teste();
teste();
teste();

echo "<hr>";
echo "Depois de declarar a variável com static<hr>";

function testeStatic() {
    static $a = 0;
    $a++;
    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();

?>
</body>
</html>