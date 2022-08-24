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
        $frase="Estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont=substr_count($frase,"PHP");
        print("PHP encontrado $cont vezes");
    ?>
</div>
</body>
</html>