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
  
$j = 0;

$teste = "Matheus";

do {

    echo "Testando do while $j <br>";

    if($j == 2) {
        echo "$teste <br>";
    }

    $j++;

} while($j < 10);

$i = 10;

do {

    echo "Testando do while 2 $i <br>";

    if($i == 2) {
        echo "$teste <br>";
    }

    $i--;

} while($i > 0);
  
?>
</body>
</html>