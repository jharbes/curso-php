<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php

function defineCorCarro($cor="vermelha"){
    switch ($cor){
        case 'vermelha':
            $color='red';
            break;
        case "preta":
            $color='black';
            break;
        case "azul":
            $color='blue';
            break;
        default:
            $color='red';
    }
    return "<h4>
        <div>O carro é da cor <span style='background-color:$color; color:white;'>$cor</span>.</div>
    </h4>";
}

?>
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

echo defineCorCarro();
echo defineCorCarro("preta");
echo defineCorCarro("azul");
  
?>
</body>
</html>