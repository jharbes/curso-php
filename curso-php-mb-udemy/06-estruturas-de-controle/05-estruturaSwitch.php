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
  
$x = 5;

switch($x) {

    case 0:
        echo "X é igual a 0 <br>";
        break;
    case 1:
        echo "X é igual 1 <br>";
        break;
    default:
        echo "X não é igual a nenhum dos valores mencionados <br>";

}

$y = "";

switch($y) {

    case "Matheus":
        echo "O nome é Matheus";
        break;
    case "João":
        echo "O nome é João";
        break;
    default:
        echo "O nome não foi encontrado";
    
}
  
?>
</body>
</html>