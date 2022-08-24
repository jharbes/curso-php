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
        $valor=$_GET["v"];
        echo "O valor enviado foi $valor.";
        $rq=sqrt($valor);
        echo "<br>A raíz quadrade de $valor é igual a ".number_format($rq,2).".";
    ?>
    <br>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>