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

echo is_float(5);
echo "<br>";
echo "";
echo is_float(5.4)."_____";
echo "<br>";
echo is_float("jorge");

$a=1;
$b=2.5;
$c="jorge";

echo is_float(1)?"Float<br>":"Nao Float<br>";

echo is_float($b)?"Float<br>":"Nao Float<br>";

echo is_float($c)?"Float<br>":"Nao Float<br>";

echo is_float(0)?"Float<br>":"Nao Float<br>";

echo is_float(0.0)?"Float<br>":"Nao Float<br>";

echo is_float(1.0)?"Float<br>":"Nao Float<br>";

?>

</body>
</html>