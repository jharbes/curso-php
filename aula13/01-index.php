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
        for ($i=1;$i<10;$i++)
            echo $i.",  ";
        echo "$i<br>";
        for ($i=10;$i>=1;$i--)
            echo "$i  ";
        echo "<br>";
        for ($i=0;$i<=50;$i+=5)
            echo "$i  ";
        print "<br>";
        for ($i=20;$i>=1;$i-=2)
            print "$i  ";
    ?>
</div>
</body>
</html>