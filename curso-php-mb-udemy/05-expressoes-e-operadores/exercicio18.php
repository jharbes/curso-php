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
  
// comparação 1
if(12 < 5 || "João" === "João") {
echo "A operação 1 é verdadeira <br>";
}

// comparação 2
if(1 > 5 || 1) {
echo "A operação 2 é verdadeira <br>";
}

// comparação 3
if(20 === "20" && 51 >= 31) {
echo "A operação 3 é verdadeira <br>";
}

// comparação teste
if(20 == "20" && 51 >= 31) {
echo "A operação teste é verdadeira <br>";
}

if (!0)
    echo "0 é falso? SIM<br>";

if (1)
    echo "1 é verdadeiro? SIM<br>";

if (!"")
    echo "String vazia é falso? SIM<br>";
  
?>
</body>
</html>