<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    // O PHP Isset é um função nativa do PHP que serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso). Ou seja, caso uma variável não esteja definida, ela possui o valor nulo (null).
    $txt=isset($_GET["t"])?$_GET["t"]:"Texto Generico";
    $tam=isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <!-- Para que funcione é essencial que o script PHP de recebimento de variáveis esteja antes da tag <style>, caso contrário não irá funcionar. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Document</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
</div>
</body>
</html>