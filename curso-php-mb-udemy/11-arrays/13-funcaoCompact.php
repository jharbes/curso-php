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
  
/*

Criando array com compact - basicamente o inverso de extract

● Com a função compact podemos criar um array a partir de variáveis;
● Passamos para a função o nome das variáveis em string;
● E então um novo array é criado, podemos atribuir a uma variável
neste novo array será associativo, onde as chaves serao os antigos nomes das variaveis
e os valores serão os valores que as variaveis possuem

*/

$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

$carro = compact("marca", "motor", "tetoSolar", "portas");

print_r($carro);
  
?>
</body>
</html>