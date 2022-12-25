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
  
/*

Buscando em arrays
● A função in_array verifica se um item passado por parâmetro está no
array;
● O retorno é true se encontrar o item e false se não encontrar;
● Vamos passar dois argumentos para a função, exemplo:
in_array(“item”, $arr)

*/

$arr = ['banana', 'maçã', 'batata', 'pêra', 'mamão'];

if(in_array("batata", $arr)) {
    echo "Há o item batata no array <br>";
} else {
    echo "Não há batata no array <br>";
}

$b = "banana";

if(in_array($b, $arr)) {
    echo "Há o item banana no array <br>";
} else {
    echo "Não há banana no array <br>";
}

if(in_array("teste", $arr)) {
    echo "Há o item teste no array <br>";
} else {
    echo "Não há teste no array <br>";
}
  
?>
</body>
</html>