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
  
$a = 12;
$b = "Roda";
$c = [];

if(is_int($a)) {

    echo "É um inteiro 1 <br>";

} else {

    echo "Não é um inteiro 1 <br>";

}

if(is_int($b)) {

    echo "É um inteiro 2 <br>";

} else {

    echo "Não é um inteiro 2 <br>";

}

if(is_int($c)) {

    echo "É um inteiro 3 <br>";

} else {

    echo "Não é um inteiro 3 <br>";

}
  
?>
</body>
</html>