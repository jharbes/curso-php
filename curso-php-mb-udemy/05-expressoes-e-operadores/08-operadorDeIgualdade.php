<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
<h1>Curso de PHP</h1>
<?php
  
echo 5==5,"<br>";

echo "João"=="João","alo<br>";
echo 6===5;

$cachorro=6;
printf("João foi amigo do ".$cachorro."!!!<br>");

echo "Podemos concatenar com virgula"," ou não? <br>";

if(3 == 3) {
    echo "Comparação verdadeira 1<br>";
}

  if(3 == 4) {
    echo "Comparação verdadeira 2<br>";
  }

  $a = 12;
  $b = 12;
  $c = 100;

  if($a == $b) {
    echo "Comparação verdadeira 3<br>";
  }

  if($a == $c) {
    echo "Comparação verdadeira 4<br>";
  }

$nome = "Matheus";
$nomeDoSistema = "João";

if($nome == $nomeDoSistema) {
    echo "O nome coincide 1<br>";
}

if($nome == $nomeDoSistema) {
    echo "O nome coincide 2<br>";
}
  
?>
</body>
</html>