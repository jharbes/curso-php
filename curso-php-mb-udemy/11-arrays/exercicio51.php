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
        li{
            border: 1px solid goldenrod;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1><hr>
<?php
  
/*

Exercício 51
● Crie um array associativo com chaves com valor de nomes, e valores com
uma pontuação;
● Ordene os dados do maior para o menor;
● Exiba uma lista, simulando um ranking, em HTML;

*/

$pontosGanhos=[
    'vasco'=>20,
    'botafogo'=>25,
    'flamengo'=>22,
    'são paulo'=>12,
    'cruzeiro'=>32,
    'fluminense'=>50
];

arsort($pontosGanhos);
  
?>
<h3>Pontuação do campeonato</h3>
<ol>
    <?php
        foreach ($pontosGanhos as $key => $value) {
            echo "<li>$key: $value pontos ganhos</li>";
        }
    ?>
</ol>
</body>
</html>