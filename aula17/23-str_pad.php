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
        $nome="Guanabara";
        $novo=str_pad($nome,30,"x",STR_PAD_RIGHT);
        $novo1=str_pad($nome,30,"x",STR_PAD_LEFT);
        $novo2=str_pad($nome,30,"x",STR_PAD_BOTH);
        print("Meu professor $novo é lindo! Right");
        print("<br>Meu professor $novo1 é lindo! Left");
        print("<br>Meu professor $novo2 é lindo! Both<br>");
        echo "$novo<br>";
        echo "$novo1<br>";
        echo $novo2;
    ?>
</div>
</body>
</html>