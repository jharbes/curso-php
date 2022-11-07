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
  
// Utilizados para forçar uma variavel a mudar de tipo, nem sempre sao úteis
// as opções são int, bool, float, string, array, object e unset

$a = (int) "12";

echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

if($a === 12) {
  echo "A é idêntico a 12 <br>";
}

$b = (float) "3.14843824";

if($b === 3.14843824) {
  echo "B é idêntico a 3.14 <br>";
}


$c = (string) 34;

echo $c;
echo "<br>";

if($c === "34") {
  echo "C é idêntico a 34 <br>";
}
  
?>
</body>
</html>