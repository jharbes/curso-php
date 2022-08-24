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
        $v=array("A","J","M","X","K");
        print_r($v);
        array_unshift($v,"O");
        // Após a inclusão na primeira posição do vetor
        echo "<br><br>Vetor após array_unshift() (inclusão de elemento no início do vetor)<br><br>";
        print_r($v);
        echo "<br><br>Agora vamos excluir o elemento do início do vetor com array_shift, veja como o índice foi rearranjado()<br><br>";
        // excluindo da primeira posição do vetor
        array_shift($v);
        print_r($v);
    ?>
</div>
</body>
</html>