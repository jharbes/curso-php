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
        $v=array("A","J","M","X","K");
        print_r($v);
        sort($v); // utilizamos a função sort() para ordenar um vetor, tanto numericamente quanto em ordem alfabetica
        echo "<br><br>Vetor inicial após ordenamento com sort():<br><br>";
        print_r($v);
        echo "<br><br>Agora utilizaremos a função rsort() para colocar em ordem decrescente ou no inverso da alfabetica:<br><br>";
        rsort($v);
        print_r($v);

        echo "<br><br>Utilizando o asort() agora, ordenamento associativo, os índices permanecem os originais.<br><br>";
        asort($v);
        print_r($v);
    ?>
</div>
</body>
</html>