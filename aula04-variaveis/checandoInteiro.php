<?php

echo is_int(5);
echo "<br>";
echo "";
echo is_int(5.4)."_____";
echo "<br>";
echo is_int("jorge");

$a=1;
$b=2.5;
$c="jorge";

echo is_int(1)?"inteiro<br>":"Nao inteiro<br>";

echo is_int($b)?"inteiro<br>":"Nao inteiro<br>";

echo is_int($c)?"inteiro<br>":"Nao inteiro<br>";

echo is_int(0)?"inteiro<br>":"Nao inteiro<br>";

?>