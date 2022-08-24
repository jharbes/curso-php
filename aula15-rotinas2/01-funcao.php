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
        function teste(&$x){ // o & antes da variável faz com que a passagem da variável seja por referência, ou seja, a alteração será também replicada na variável original que foi passada para a função.
            $x+=2;
            echo "<p>O valor de X é $x.<br></p>";
        }
        $a=3;
        teste($a);
        echo "<p>O valor de A é $a.</p>";
    ?>
</div>
</body>
</html>