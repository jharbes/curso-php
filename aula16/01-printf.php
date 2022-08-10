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
        $p="Leite";
        $pr=4.5;
        echo "O $p custa R$".number_format($pr,2)."<br>";
        printf("O %s custa R$%.2f<br>",$p,$pr);
    ?>
</div>
</body>
</html>