<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Document</title>
    <style>
        a{
            background-color: blueviolet;
            color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 7px yellowgreen;
        }
    </style>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <?php
        $v=isset($_GET["valor"])?$_GET["valor"]:1;
        echo "O fatorial de $v é ";
        $fat=1;
        if ($v==0)
            echo "1";
        else{
            do{
                $fat*=$v;
                $v--;
            } while ($v>=1);
            echo $fat;
        }
    ?>
    <br><br>
    <a href="02-index.html">VOLTAR</a>
</div>
</body>
</html>