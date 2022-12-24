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
<h1>Curso de PHP</h1><hr>
<?php
  
$frase="O rato roeu a roupa do rei de Roma";

$soma=0;

for ($i=0;$i<strlen($frase);$i++){
    if ($frase[$i]=='a')
        $soma++;
}

echo "<h2>O número de caracteres a da string são $soma</h2>";
  
?>
</body>
</html>