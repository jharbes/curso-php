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
        $nome2=ucwords($nome);
        echo "Seu nome é $nome2<br>";
        // A primeira letra de cada palavra da string ficará com a letra maiúscula nesse caso.
    ?>
</div>
</body>
</html>