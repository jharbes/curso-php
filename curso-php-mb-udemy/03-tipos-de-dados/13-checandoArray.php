<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Curso de PHP</h1>
<?php

// Alguns valores são lidos como false pelo PHP para booleanos, como por exemplo: 0, 0.0, "0", [], NULL null, perceba abaixo:

$a=[1];
$b=[3,5];
$c=[1,"Maluco"];

echo is_array([])?"É array<br>":"Não é array<br>";
echo is_array($a)?"É array<br>":"Não é array<br>";
echo is_array($b)?"É array<br>":"Não é array<br>";
echo is_array($c)?"É array<br>":"Não é array<br>";

echo "<hr>";

var_dump($c);


?>
</body>
</html>