<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1>
<?php
  
$a = 10;

// O CONTINUE, diferente do break nao sai completamente da estrutura de repeticao, mas sim pula para a proxima repeticao da propria estrutura em questao.
// EXEMPLO: em um for ele iria pra proxima repeticao do mesmo for, sem terminar a repeticao em que estava.

while($a > 0) {

    if($a == 5 || $a == 7) {

        echo "Pulou a execução $a <br>";

        $a--;

        continue;

    }

    if($a == 2) {

        echo "Terminando o loop break $a <br>";

        break;

    }

    echo "Executando o loop $a <br>";

    $a--;

}
  
?>
</body>
</html>