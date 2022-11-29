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
<h1>Curso de PHP - Parametros Default</h1>
<?php
  
function teste($a = "teste") {

    echo "<h3>O valor de A é: $a <br></h3>";

}

teste();
teste("asd");

function testando($b, $a = "x") {

    echo "<h3>O valor de a é: $a e de b é: $b <br></h3>";

}

testando("1");
testando("1", "2");
  
?>
</body>
</html>