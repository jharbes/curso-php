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
<h1>Curso de PHP - While</h1>
<?php
  
// A definição do contador
$x = 0;

// Início / Definição da estrutura
while($x < 10) {

  // Corpo do loop
  echo $x . "<br>";

  // Incremento do contador
  $x++;

}

echo "<hr>Continuando código <br>";

// A definição do contador
$y = 0;

// Início / Definição da estrutura
while($y <= 10) {

  // Corpo do loop
  echo $y . "<br>";

  // Incremento do contador
  $y += 2;

}

echo "<hr>Continuando código <br>";

// A definição do contador
$z = 10;

// Início / Definição da estrutura
while($z > 0) {

  // Corpo do loop
  echo $z . "<br>";

  // Incremento do contador
  $z--;

}

echo "<hr>Continuando código <br>";

// A definição do contador
$a = 10;

// Início / Definição da estrutura
while($a > 0) {

  // Corpo do loop
  if($a % 2 != 0) {
    echo $a . "<br>";
  }

  // Incremento do contador
  $a--;

}
  
?>
</body>
</html>