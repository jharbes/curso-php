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
        $tipo=$_GET["op"];
        $n1=$_GET["a"];
        $n2=$_GET["b"];
        echo "<h3>Os valores passados foram $n1 e $n2.</h3><br>";
        $r=$tipo=="s"?$n1+$n2:$n1*$n2;
        echo "O resultado será $r.";
    ?>
</div>
</body>
</html>