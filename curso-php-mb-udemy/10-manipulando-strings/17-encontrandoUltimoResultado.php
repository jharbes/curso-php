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
<h1>Curso de PHP</h1><hr>
<?php
  
$str = "Testando encontrado palavra teste, em uma string que tem teste";

$palavra = strrpos($str, "teste");

echo "$palavra <br>";

$palavra2 = strpos($str, "teste");

echo "$palavra2 <br>";

if(strrpos($str, "Java") === false) {
    echo "A palavra Java não foi encontrada <br>";
}

$p = substr($str, strpos($str, "teste"), 5);

echo "$p <br>";

  
?>
</body>
</html>