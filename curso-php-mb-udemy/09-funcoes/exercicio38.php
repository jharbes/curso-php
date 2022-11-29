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
  
function vetorEmString($vetor){
    return "<h3>".implode(", ",$vetor)."</h3>";
}

echo vetorEmString(["sabao","refrigerante","arroz","queijo","carne","suco"]);



/*
*  SOLUCAO DO PROFESSOR
*/

$lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

function listaParaString($arr) {

  $str = "Você levou estes itens do mercado: ";

  for($i = 0; $i < count($arr); $i++) {

    if($i + 1 == count($arr)) {
      $str .= "$arr[$i].";
    } else {
      $str .= "$arr[$i], ";
    }

  }

  return $str;

}

echo listaParaString($lista);
?>
</body>
</html>