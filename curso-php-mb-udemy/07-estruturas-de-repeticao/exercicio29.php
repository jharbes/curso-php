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
  
$vetor=[];
$j=0;

for ($i=10;$i<=100;$i+=10){
    $vetor[$j]=$i;
    $j++;
}

var_dump($vetor);

echo "<hr>";

$i=0;

while ($i<count($vetor)){
    if ($vetor[$i]==30 || $vetor[$i]==40){
        $i++;
        continue;
    }
    echo $vetor[$i]."<br>";
    $i++;
}
  
?>
</body>
</html>