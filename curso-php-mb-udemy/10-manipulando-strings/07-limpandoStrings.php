<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        h3{
            background-color: yellowgreen;
            width: fit-content;
        }
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1><hr>
<?php
  
$str1 = "    Matheus  ";

echo "<p>Esta é a string 1: $str1. <br></p>";

$str1Limpa = trim($str1); // limpa espaços antes e depois das strings

echo "<p>Esta é a string 1: $str1Limpa. <br></p>";

$str1Limpa2 = rtrim($str1); // limpa espaços depois das strings (right)

echo "<p>Esta é a string 1: $str1Limpa2. <br></p>";

$str1Limpa3 = ltrim($str1); // limpa espaços antes das strings (left)

echo "<p>Esta é a string 1: $str1Limpa3. <br></p>";
  
?>
</body>
</html>