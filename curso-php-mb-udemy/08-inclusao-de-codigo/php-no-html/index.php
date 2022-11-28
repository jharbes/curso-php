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
<h1>Curso de PHP - PHP no HTML</h1>
<?php
  
include_once "backend.php";
  
?>
<h1>Seja bem vindo ao nosso site</h1>
<p><?= $nome; ?> veja nossas ofertas</p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
    
    <li><?= $produto; ?></li>

    <?php endforeach; ?>
</ul>
</body>
</html>