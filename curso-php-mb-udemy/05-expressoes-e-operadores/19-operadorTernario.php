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
  
// true
echo 20 > 10 ? "Deu true <br>" : "Deu false <br>";

// false
echo 20 > 50 ? "Deu true <br>" : "Deu false <br>";

$a = 10;
$b = 5;

echo $a >= $b ? "Deu true <br>" : "Deu false <br>";

echo $a === $b ? "Deu true <br>" : "Deu false <br>";

echo $a === $b && 10 > 5 ? "Deu true <br>" : "Deu false <br>";

echo 5<10?"Testando com null depois dos dois pontos<br>":null;

echo 10<5?"Testando com null depois dos dois pontos<br>":null;

  
?>
</body>
</html>