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
  
header("Content-type: text/plain"); // essa funcao faz com que apareca o codigo puro, so nesse caso funcionam esses comandos com contrabarra

//  para pular linha
echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha \n";

// para aplicar um Tab
echo "Testando o tab \t aqui \n";

// para que saia uma Barra invertida
echo "Barra invertida \\ \n";

// para que saia um Dólar ou cifrao
echo "Imprimindo o dólar \$teste";
  
?>
</body>
</html>