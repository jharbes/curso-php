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
        $n=isset($_GET["num"])?$_GET["num"]:1;
        echo "A tabuada de $n é: <br><br>";
        for ($i=1;$i<=10;$i++)
            echo "$n x $i = ".$n*$i."<br>";
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>