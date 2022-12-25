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

Criando muitas variáveis
● Podemos criar muitas variáveis com base em um array;
● Para isso vamos utilizar a função list;
● Ex: list($nome, $idade, $profissao) = $pessoa;

*/

$pessoa = ["Matheus", 29, "Programador", "verde"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corDosOlhos <br>";
  
?>
</body>
</html>