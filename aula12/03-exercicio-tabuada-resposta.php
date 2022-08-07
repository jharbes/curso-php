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
        $i=1;
        do{
            echo "$n x $i = ".$n*$i."<br>";
            $i++;
        } while ($i<=10);
    ?>
</div>
</body>
</html>