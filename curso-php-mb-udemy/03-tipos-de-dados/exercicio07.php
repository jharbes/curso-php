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
  
$pessoa=['nome'=>'Jorge','idade'=>39,'sexo'=>'M'];

if ($pessoa['idade']>=18)
    echo "<p>Sim, é maior de idade!</p>";
  
?>
</body>
</html>