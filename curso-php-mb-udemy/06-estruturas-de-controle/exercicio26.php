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
  
$vel = 60;
$velMax = 40;

if($vel < $velMax) {

    echo "Parabéns, você está numa velocidade segura <br>";

} else if($vel == $velMax) {

    echo "Cuidado! Você está no limite de velocidade <br>";

} else {

    echo "Você foi multado, velocidade acima do permitido <br>";

}
  
?>
</body>
</html>