<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Document</title>
    <style>
        p{
            font-family: Arial, Helvetica, sans-serif;
            color: blue;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <?php
        $preco=$_GET["p"];
        $preco2=$_GET["p"];
        echo "<p>O preço do produto é R$$preco.</p>";
        $preco+=0.1*$preco;
        echo "<br>E o novo preço com 10% de aumento será R$".number_format($preco,2,",",".").".";
        echo "<br>E o novo preço com 10% de desconto será R$".number_format(0.9*$preco2,2,",",".").".";
    ?>
</div>
</body>
</html>