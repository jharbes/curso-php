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
  
$n1=5;
$n2=10;
$string1="Matheus";
$string2="Marcos";

if (is_numeric($n1)){
    $n3=$n1*2;
    echo "Valor é numérico 1.<br>";
}

if (is_numeric(($string1)))
    echo "Valor é numérico 2.<br>";
else
    echo "Valor não numérico.<br>";

echo $n3."<br>";

if ($n3>=100)
    echo "Número maior ou igual a 100<br>";
else
    echo "Número menor que 100<br>";
  
?>
</body>
</html>