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
  
// definindo funcao
function soma() {

    $a = 5;
    $b = 4;

    echo $a + $b . "<br>";

}

// chamando / invocando funcao
soma();
soma();

// funcao do php
echo strtoupper("testando função");
  
?>
</body>
</html>