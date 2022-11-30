<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP - include_once e require_once</h1>
<?php

// Arquivos que nao existem
// include_once "teste.php";

include_once "teste2.php";

include_once "teste2.php"; // Repare que embora sejam incluidos duas vezes o arquivo sera reproduzido apenas uma vez por estar usando o include_once

echo "<hr><hr>";

include "teste2.php";
include "teste2.php"; // Nesse caso, diferente do anterior, o arquivo sera disponibilizado duas vezes

echo "<hr><hr>";

require_once "teste3.php";
require_once "teste3.php";

?>
<p>Testando Código</p>
<div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus qui ratione saepe vitae, voluptate, ipsa atque, modi dolor quidem ea voluptatem autem. Repellat repellendus consequuntur labore quidem enim. Alias possimus nobis amet dicta, quidem voluptatem sint, quasi odio velit, fugiat eum officia soluta molestias nam. Voluptatum, ipsa rerum nulla voluptatibus, temporibus repellendus sapiente fuga vero nihil aliquam enim praesentium laborum illo, ullam quas facilis. Repudiandae asperiores aperiam iusto minima fugiat voluptatum inventore incidunt facilis ipsum. Cumque accusamus eos minima voluptatum sed natus aliquid soluta error nemo! Quasi facere delectus, animi voluptatibus cumque ipsam ratione vero, eos nisi nam inventore dolor!</div>
</body>
</html>