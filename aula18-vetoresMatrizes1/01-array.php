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
    <pre>
        <?php
            $n=array(3,5,8,2);
            print_r($n);
            var_dump($n);
            var_export($n);
            $n[]=7;
            print_r($n);
        ?>
    </pre>
</div>
</body>
</html>