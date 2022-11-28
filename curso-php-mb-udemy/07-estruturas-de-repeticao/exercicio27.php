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
<h1>Curso de PHP - Exercicio 27</h1>
<?php

$vetor=[1,"jorge",'a',true,"harbes",2.56565,"nami",[1,2,3],25,false];

$contador=0;

while ($contador<count($vetor)){
    if (is_string($vetor[$contador]))
        echo $vetor[$contador]."<br>";
    $contador++;
}
  
?>
</body>
</html>