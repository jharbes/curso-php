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
        $nome="GustaVo GuaNabara";
        $nome2=ucfirst($nome);
        echo "Seu nome é $nome2<br>";
        // Apenas a primeira letra da string vai mudar para maiúscula.
    ?>
</div>
</body>
</html>