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
  
// Variável por referência é quando criamos uma variável e ela passa a apontar para o mesmo endereço de memória que a outra variável referenciada aponta, sendo assim ao alterar o valor da variável original, a referenciada altera seu valor em conjunto.

$x=2;
$y=&$x;

$x=3;

echo $y;
echo "<hr>";

$z=4;
$z=&$y;
echo $z;
echo "<hr>";

$z=10;
echo $x." ".$y." ".$z;

// importante salientar que a referencia é multidirecional, ou seja, alterar qualquer uma das variáveis referenciadas muda o valor de todas as outras pois o valor no endereço de memória original (igual para todas), receberá o valor novo da variável.

  
?>
</body>
</html>