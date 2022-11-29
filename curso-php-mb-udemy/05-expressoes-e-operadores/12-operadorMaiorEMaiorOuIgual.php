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
  
$a = 4;
$b = 5;
$c = 6;
$d = 6;
$e = 7;

if($a > $b) {
echo "A é maior que B <br>";
}

if($b > $a) {
echo "B é maior que A <br>";
}

if($d >= $c) {
echo "D é maior ou igual a C <br>";
}

if($d >= $a) {
echo "D é maior ou igual a A <br>";
}

if($d >= $e) {
echo "D é maior ou igual a E <br>";
}
  
?>
</body>
</html>