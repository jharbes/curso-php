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
  
// condicao verdadeira
if(5 > 2) {

    echo "Deu certo! Entrou no if <br>";

}

// condicao falsa
if(2 >= 5) {

    echo "Não vai entrar no if, porque deu false! <br>";

}

// utilizar op. lógico
if(10 === 10 && 9 > 3) {

    echo "Deu certo! Entrou no if 2 <br>";

}

// variáveis
$a = 10;
$b = 5;

$c = "Deu certo, entrou no if 3 <br>";

if($a >= $b) {

    echo $c;

}
  
?>
</body>
</html>