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

Criando variáveis com extract
● Com a função extract podemos criar variáveis rapidamente de arrays
associativos;
● O nome da chave será o nome da variável;
● Se houver uma variável já criada com o nome da chave, a mesma será
sobrescrita;

*/

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matheus";

$pessoa = [
    'nome' => 'João',
    'idade' => 29
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";

?>
</body>
</html>