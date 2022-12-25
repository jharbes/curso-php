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

Retornando o resto da string

● Com a função strstr podemos encontrar um texto em uma string;

● Se algo for encontrado, a função vai retornar o resto da string após o texto
encontrado; (com esse texto inclusive)

● Se não encontrar nada retorna false;

*/
  
$str = "Testando o resto da string, pra ver se dá certo";

$resto = strstr($str, "resto");

echo "$resto <br>"; 

$s = "string";

$resto2 = strstr($str, $s);

echo "$resto2 <br>";

if(strstr($str, ".NET") === false) {

    echo "Não encontramos a string! <br>";

}
  
?>
</body>
</html>