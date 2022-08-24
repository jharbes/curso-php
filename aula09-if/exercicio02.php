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
        if ($i<16){
            $tipoVoto="não pode votar";
            $d="não pode dirigir.";
        } else if ($i<18 || $i>70){
            $tipoVoto="tem voto opcional";
            $d="pode dirigir se tiver mais de 70 e for habilitado.";
        } else {
            $tipoVoto="tem voto obrigatório";
            $d="pode dirigir se for habilitado.";
        }
        echo "<br>Com essa idade você $tipoVoto e também $d";
    ?>
</div>
</body>
</html>