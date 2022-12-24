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
  
$arr = [
'porta' => 100,
'maçaneta' => 5,
'motor' => 2000,
'retrovisor' => 8
];

function itensCaros($arr) {

    $arrItensCaros = [];

    foreach($arr as $item => $preco) {

        if($preco > 10) {

        array_push($arrItensCaros, $item);

        }

    }

    return $arrItensCaros;

}

$novoArr = itensCaros($arr);

print_r($novoArr);
  
?>
</body>
</html>