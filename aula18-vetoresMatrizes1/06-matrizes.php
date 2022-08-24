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
        $m=array(array(6,4),
                array(4,9),
                array(3,2));
        print_r($m);
        var_dump($m);

        $m[0][1]=$m[2][0];
        var_dump($m);
    ?>
</div>
</body>
</html>