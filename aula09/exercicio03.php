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
        $nota1=isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2=isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media=($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 é igual a $media";
        if ($media<4)
            $s="REPROVADO";
        else if ($media<7)
            $s="RECUPERAÇÃO";
        else
            $s="APROVADO";
        echo "<br>Situação do aluno: $s";
    ?>
    <br>
    <a href="exercicio03.html">VOLTAR</a>
</div>
</body>
</html>