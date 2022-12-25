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

Decompor uma URL

● Com a função parse_url podemos decompor uma URL;

● Vamos receber um array com todas as partes que a URL tem;

● Alguns elementos que podem ser retornados são: protocolo, host,
parâmetros;

*/
  
$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["host"];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/?busca=php";

$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);
echo "<br>";

$url3 = "http://www.horadecodar.com.br/usuarios/matheusbattisti?id=12&nome=Matheus";

$arrayUrl3 = parse_url($url3);

print_r($arrayUrl3);
echo "<br>";
  
?>
</body>
</html>