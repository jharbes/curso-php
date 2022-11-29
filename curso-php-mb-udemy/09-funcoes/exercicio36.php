<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        h3{
            background-color: yellowgreen;
            width: fit-content;
        }
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1>
<?php
  
function retornaArrayMaior7($vetor){
    $novoVetor=[];
    foreach ($vetor as $x){
        if ($x>7)
            array_push($novoVetor,$x);
    }
    return $novoVetor;
}

$vetor=[0,1,2,3,4,5,6,7,8,9,10];

var_dump(retornaArrayMaior7($vetor));
  
?>
</body>
</html>