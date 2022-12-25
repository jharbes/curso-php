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

Exercício 47
● Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar,
automático;
● Chame este array de carro;
● Crie variáveis com base neste array;

*/

$carro=["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

list($modelo,$cilindrada,$cor,$aro,$opcional,$cambio)=$carro;

echo "$modelo<br>";
echo "$cilindrada<br>";
echo "$cor<br>";
echo "$aro<br>";
echo "$opcional<br>";
echo "$cambio<br>";
  
?>
</body>
</html>