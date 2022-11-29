<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
</head>
<body>
<h1>Curso de PHP</h1>
<?php
  
$a = 1;
$b = "1";

if($a != $b) {
echo "A é diferente de B 1 <br>";
}

if($a !== $b) {
echo "A é diferente de B 2 <br>";
}

if(1 !== 2) {
echo "Não é idêntico 1 <br>";
}

if(1 !== "1") {
echo "Não é idêntico 2 <br>";
}

if([] !== "abc") {
echo "Não é idêntico 3 <br>";
}
  
?>
</body>
</html>