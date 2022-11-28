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
  
$x = 4;
$limite = 30;

while($x < $limite) {

    echo "Executando o loop $x <br>";

    if($x === 24) {
        echo "Parando o loop";
        break;
    }

    $x += 2;

}
  
?>
</body>
</html>