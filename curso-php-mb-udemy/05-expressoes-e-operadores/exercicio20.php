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
$b = 5;

echo $a <= $b ? "A é menor ou igual a B <br>" : "B é menor que A <br>";

echo $a >= $b ? "A é maior ou igual a B <br>" : "B é maior que A <br>";
  
?>
</body>
</html>