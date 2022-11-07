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
  
// Array associativo é um array que se assemelha à estrutura de um objeto, onde cada elemento é um par chave/valor.

$carro=[
    'marca'=>'BMW',
    'rodas'=>4,
    'tetoSolar'=>true,
    'velocidadeMaxima'=>300,
    'blindado'=>false
];

var_dump($carro);

// echo $carro[0]; índice nesse caso não funciona.
echo $carro['marca'];
echo "<hr>";
echo $carro['rodas'];
echo "<hr>";
  
?>
</body>
</html>