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
  
if(10 > 2) {

    echo "Entrou no primeiro if <br>";

if("teste" == "teste") {

    echo "entrou no segundo if <br>";

}

}

if(10 > 2) {

echo "Entrou no primeiro if 2<br>";

if("teste" != "teste") {

    echo "entrou no segundo if 2<br>";

} else {

    echo "Entrou no segundo else 2<br>";

}

}


if(10 < 2) {

echo "Entrou no primeiro if 2<br>";

if("teste" != "teste") {

    echo "entrou no segundo if 2<br>";

} else {

    echo "Entrou no segundo else 2<br>";

}

} else {

echo "Entrou no primeiro else <br>";

}


$escopo = 10;

if(10 > 2) {

echo "Entrou no primeiro if 2<br>";

$escopo2 = 20;

if("teste" == "teste") {

    echo "entrou no segundo if 2<br>";

    echo $escopo;
    echo " " . $escopo2;

} else {

    echo "Entrou no segundo else 2<br>";

}

} else {

echo "Entrou no primeiro else <br>";

}
  
?>
</body>
</html>