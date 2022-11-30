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
  
$i = 1;

$c = "variável teste";

while($i <= 10) {

    echo "Loop externo $i <br>";

    // segundo contador
    $j = 1;

    echo "$c <br>";

    while($j <= 5) {

        echo "Loop interno $j <br>";

        echo "$c 2 <br>";

        $j++;

    }

    echo "<hr>";
    
    $i++;

}
  
?>
</body>
</html>