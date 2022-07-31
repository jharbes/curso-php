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
        // O PHP Isset é um função nativa do PHP que serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso). Ou seja, caso uma variável não esteja definida, ela possui o valor nulo (null).
        $nome=isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano=isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo=isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade=date("Y")-$ano; // date("Y") é funcao do php para mostrar o ano atual
        echo "$nome é $sexo e tem idade de $idade anos."
    ?>
    <br>
    <a href="02-exercicio.html"><<< VOLTAR</a>
</div>
</body>
</html>