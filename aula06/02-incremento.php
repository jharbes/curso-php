<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <?php
        $atual=$_GET["aa"]; # treinando comentários
        echo "<h4>O ano atual é $atual. e o ano anterior é ".--$atual.".</h4>"; // treinando comentários

        /* Aqui também
            estamos treinando comentarios
            multiline */
    ?>
</div>
</body>
</html>