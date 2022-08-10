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
        $t="Aqui temos um texto gigante criado pelo PHP que vai servir pra mostrar o funcionamento da função wordwrap()";
        $r=wordwrap($t,20,"<br>\n",false);
        echo $r;
        $r=wordwrap($t,10,"<br>\n",true);
        echo $r;

        $p="Lâmpada";
        echo strlen($p);
        echo mb_strlen($p,"UTF-8");
    ?>
</div>
</body>
</html>