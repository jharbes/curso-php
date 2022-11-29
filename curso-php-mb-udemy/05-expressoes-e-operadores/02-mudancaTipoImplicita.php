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
  
  echo 5 / 2;
  echo "<br>";

  if(is_float(5/2)) {
    echo "É float <br>";
  }

  echo 2 . 3;
  echo "<br>";

  if(is_string(2 . 3)) {
    echo "É string <br>";
  }

  $nome = "Matheus";
  $sobrenome = "Battisti";

  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;
  echo "<br>";
  
?>
</body>
</html>