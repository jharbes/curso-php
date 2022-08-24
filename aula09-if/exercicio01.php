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
        $a=isset($_GET["ano"])?$_GET["ano"]:1900;
        $i=date("Y")-$a;
        echo "Você nasceu em $a e terá $i anos.";
        if ($i>=18){
            $v="Já deve votar.";
            $d="Já pode dirigir.";
        } else {
            $v="não pode votar";
            $d="não pode dirigir.";
        }
        echo "<br>Com essa idade você $v e também $d";
    ?>
</div>
</body>
</html>