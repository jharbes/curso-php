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

echo is_string(5);
echo "<br>";
echo "";
echo is_string(5.4)."_____";
echo "<br>";
echo is_string("jorge");
echo "<hr>";

$a=1;
$b=2.5;
$c="jorge";

echo is_string(1)?"String<br>":"Nao String<br>";

echo is_string($b)?"String<br>":"Nao String<br>";

echo is_string($c)?"String<br>":"Nao String<br>";

echo is_string(0)?"String<br>":"Nao String<br>";

echo is_string(0.0)?"String<br>":"Nao String<br>";

echo is_string("Luau doido")?"String<br>":"Nao String<br>";

echo is_string('Aspas simples')?'String<br>':'Não String<br>';

?>

</body>
</html>