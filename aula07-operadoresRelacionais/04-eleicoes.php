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
        $ano=$_GET["ano"];
        $idade=2022-$ano;
        echo "Quem nasceu em ano $ano tem idade de $idade anos.<br>";
        $tipoVoto=($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "E dessa forma seu voto é $tipoVoto."
    ?>
</div>
</body>
</html>