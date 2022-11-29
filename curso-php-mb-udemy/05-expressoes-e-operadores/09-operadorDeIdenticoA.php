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
  
if(5 == "5") {
  echo "5 é 5 1<br>";
}

// op de identico
if(5 === "5") {
  echo "5 é 5 2<br>";
}

if(5 === 5) {
  echo "5 é 5 3<br>";
}

if(3 === "teste") {
  echo "É igual <br>";
}

$a = 4;
$b = 4;
$c = "4";

if($a === $b) {
  echo "A é igual a B <br>";
}

if($a === $c) {
  echo "A é igual a C <br>";
}
  
?>
</body>
</html>