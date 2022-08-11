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
        $nome="Gustavo Guanabara";
        $nome2=strtolower($nome);
        echo "Seu nome é $nome2<br>";
        print("Mudamos seu nome de $nome para ".strtoupper($nome));
    ?>
</div>
</body>
</html>