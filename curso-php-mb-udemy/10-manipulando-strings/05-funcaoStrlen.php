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

// o nome strlen vem de string length

// IMPORTANTE*** : O strlen contabiliza acentos como um caractere.

$str1 = "Esta string é muito grande";
$str2 = "Esta não";
$str3 = "Não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";
echo strlen($str3) . "<br>";


$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2) {
    echo "A string 1 é maior que a string 2";
} else {
    echo "A string 2 é maior que a string 1";
}
  
?>
</body>
</html>