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
  
if(5 > 2) {

    echo "Entrou no if <br>";

} else {

    echo "Entrou no else <br>";

}


if("teste" === 5) {

    echo "Entrou no if 2 <br>";

} else {

    echo "Entrou no else 2 <br>";

}

// variáveis
$a = 10;
$b = 20;

if($a > $b) {

} else {

    echo "Entrou no else 3 <br>";

}

$msg = "Entrou no else 4 <br>";

if($a > $b) {

} else {

    echo $msg;

}
  
?>
</body>
</html>