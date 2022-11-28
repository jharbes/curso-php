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
  
$arr = [];

for($i = 10; $i <= 20; $i++) {
    array_push($arr, $i);
}

print_r($arr);
echo "<br>";

for($i = 0; $i < count($arr); $i++) {

    if($arr[$i] % 2 != 0) {
        echo "Número ímpar: $arr[$i] <br>";
    }

}
  
?>
</body>
</html>