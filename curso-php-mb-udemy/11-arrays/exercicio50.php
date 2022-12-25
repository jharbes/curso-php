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
        table,tr,th,td{
            border: 1px solid blueviolet;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1><hr>
<?php
  
/*

Exercício 50
● Crie um array associativo com nomes e idades;
● Imprima estes dados em uma tabela de HTML;
● Dica: utilize as tags do elemento table

*/

$arrayNomesIdades=[
    'Jorge'=>39,
    'Carol'=>28,
    'Marcos'=>10,
    'Matheus'=>14
]

?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($arrayNomesIdades as $key=>$value){
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }

        ?>
    </tbody>
</table>
  
</body>
</html>