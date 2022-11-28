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
  
$nomes = ["Matheus", "João", "Pedro", "Maria"];

$a = 10;

foreach($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Matheus") {
        echo "Opa $a <br>";
    }
}
  
?>
</body>
</html>