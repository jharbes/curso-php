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
<p>Teste</p>
<?php
  
// ==, !=, ===, !==

$a = 5;
$b = 3;

if($a == $b) {
echo "A é igual a B <br>";
}

if($a != $b) {
echo "A é diferente a B <br>";
}

if($a === $b) {
echo "A é idêntico a B <br>";
}

if($a !== $b) {
echo "A não é idêntico a B <br>";
}
  
?>
</body>
</html>