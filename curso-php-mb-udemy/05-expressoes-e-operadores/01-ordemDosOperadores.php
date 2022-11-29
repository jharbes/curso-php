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
  
  echo 3 + 2 * 5;
  echo "<br>";
  echo (3 + 2) * 5;
  echo "<br>";
  echo 5 + 2 / 10;
  echo "<br>";

  $a = 5;
  $b = 2;
  $c = 10;

  echo $a + $b / $c;
  echo "<br>";
  echo $c + $b / $a;
  echo "<br>";

  $d = $a * $b * $c;

  echo $d;
  echo "<br>";
  
?>
</body>
</html>