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
  
$a = 3;
$b = 4;

if($a != $b) {
echo "Testando diferença 1<br>";
}

if($a != 3) {
echo "Testando diferença 2<br>";
}

if(false != "teste") {
echo "Testando diferença 3<br>";
}

if(3 != "3") {
echo "Testando diferença 4<br>";
}

if(3 != "4") {
echo "Testando diferença 5<br>";
}
  
?>
</body>
</html>