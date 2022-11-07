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
  
$idade1 = 16;
$idade2 = 18;
$idade3 = 26;

$maioridade = 18;

$msg = "Você é maior de idade <br>";

if($idade1 >= $maioridade) {
    echo "1 - ";
    echo $msg;
}

if($idade2 >= $maioridade) {
    echo "2 - ";
    echo $msg;
}

if($idade3 >= $maioridade) {
    echo "3 - ";
    echo $msg;
}
  
?>
</body>
</html>