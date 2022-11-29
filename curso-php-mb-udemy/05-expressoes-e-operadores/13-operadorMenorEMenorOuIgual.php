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
  
if(4 < 12) {
echo "4 é menor que 12 <br>";
}

if(24 < 12) {
echo "24 é menor que 12 <br>";
}

if(12 <= 12) {
echo "12 é menor ou igual a 12 <br>";
}

$a = 5;
$b = 18;

if($a <= $b) {
echo "A é menor ou igual a B <br>";
}

if($b <= $a) {
echo "B é menor ou igual a A <br>";
}

if($b <= 42) {
echo "B é menor ou igual a 42 <br>";
}
  
?>
</body>
</html>