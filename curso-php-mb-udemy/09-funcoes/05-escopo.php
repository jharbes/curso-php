<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        h3{
            background-color: yellowgreen;
            width: fit-content;
        }
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

$b = 15;

function testeEscopo() {

    $a = 5;

    global $b; // 

    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "ESCOPO LOCAL DE A: $a <br>";

    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";

    echo "ESCOPO STATIC DE C: $c <br><hr>";

}

echo "ESCOPO GLOBAL DE A: $a <br>";
echo "ESCOPO GLOBAL DE B: $b <br><hr>";

testeEscopo();

echo "ESCOPO GLOBAL DE B 2: $b <br>";

testeEscopo();
  
?>
</body>
</html>