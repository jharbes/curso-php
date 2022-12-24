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

// Lembrando que após a utilizaao da funcao substr a string original nao é afetada.

$str = "Esta é a minha string";

$minha = substr($str, 10, 5); // STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA, nesse caso a partir do 10 (inclusive)
                                // lembrar que palavras com acento contam como dois caracteres

echo $str . "<br>";
echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 8); // OMITIR COMPRIMENTO = PEGAR ATE O FIM - omitir de 0 a 8, deixar o resto

echo $novaString . "<br>";

$novaString2 = substr($str2, 8, -3); // COMPRIMENTO NEGATIVO = REMOVER DO ULTIMO INDICE - omitir de zero a oito e deixar o resto
                                        // porem tambem diminuir 3 do fim pra tras.

echo $novaString2 . "<br>";
  
?>
</body>
</html>