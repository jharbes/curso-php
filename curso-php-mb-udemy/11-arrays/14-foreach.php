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

Foreach e arrays

● Anteriormente vimos a estrutura foreach com arrays, podemos iterar
facilmente com ela;

● Utilizando a notação de chave => valor, temos acesso rápido também a
arrays associativos; ** também funcionam para chave e valor de arrays normais onde o keys acessam os indices do vetor

● Exemplo:
foreach($itens as $key => $value) { } ****

*/

$matheus = [
    'nome' => 'Matheus',
    'idade' => 29,
    'profissao' => 'Programador'
];

$alexia = [
    'nome' => 'Aléxia',
    'idade' => 25,
    'profissao' => 'Eng. Civil'
];

foreach($matheus as $carac => $value) {

    echo "$carac => $value <br>";

}

echo "<hr>";

foreach($alexia as $value) {

    echo "$value <br>";

}
  
?>
</body>
</html>