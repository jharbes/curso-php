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
        $v=array(0=>5,
                1=>9,
                2=>8,
                3=>7);
        print_r($v);
        var_dump($v);

        $s=array(3=>5,1=>9,0=>8,7=>7);
        var_export($s);
        echo "<br>";
        unset($s[0]);
        var_export($s);
    ?>
</div>
</body>
</html>