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
        $a=3;
        $b="3";
        $r=$a==$b?"SIM":"NÃO";
        echo "As variáveis A e B são iguais? $r.<br>";
        $i=$a===$b?"SIM":"NÃO";
        echo "As variáveis A e B são idênticas? $i.";
    ?>
</div>
</body>
</html>