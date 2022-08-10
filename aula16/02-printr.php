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
        $v[0]=4;
        $v[1]=8;
        $v[2]=3;
        print_r($v);
        print "<br>";
        $v2=array(3,7,6,2,1,9);
        print_r($v2);
        print "<br>";
        var_dump($v2);
        print "<br>";
        var_export($v2);
    ?>
</div>
</body>
</html>