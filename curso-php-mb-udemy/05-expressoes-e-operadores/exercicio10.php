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
  
// -, /, *
$a = 10;
$x = 5;
$z = 9;

$operacao = ($x - $z) / $a * $z;

echo $operacao;
echo "<br>";

// teste abaixo, operador de concatenacao eh o ponto e nao o +

$nome="Jorge";
$sobrenome=" Harbes";

echo $nome.$sobrenome;

echo "<br>";

echo "jurubeba ".$a." eh o leao do norte ".$nome;
  
?>
</body>
</html>