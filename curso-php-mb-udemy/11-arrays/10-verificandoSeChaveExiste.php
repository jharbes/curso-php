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

Verificando se valor existe

● Com a função array_key_exists podemos verificar se há um valor em
uma respectiva key de um array;
● Podemos fazer essa checagem em um if;
● Ex: array_key_exists(“nome”, $arr)
● Outra função que podemos utilizar para este fim é a isset; Nesse caso funciona também para ver se variáveis existem ou o valor de algum índice especifico de vetor

*/

$arr = [
    'nome' => 'Matheus',
    'idade' => 29
];

$vetor=[5,10,15,20];

if(array_key_exists("nome", $arr)) {

    echo "A chave existe! <br>";

} else {

    echo "A chave não existe! <br>";

}

if(array_key_exists("profissao", $arr)) {

    echo "A chave existe! <br>";

} else {

    echo "A chave não existe! <br>";

}

if(array_key_exists(4, $vetor)) { // chave nao existe, nao existe valor para o indice 4 do vetor

    echo "A chave existe! <br>";

} else {

    echo "A chave não existe! <br>";

}

if(array_key_exists(3, $vetor)) { // chave existe, existe valor para o indice 3 do vetor

    echo "A chave existe! <br>";

} else {

    echo "A chave não existe! <br>";

}

if(isset($vetor[4])) { // chave nao existe, nao existe valor para o indice 4 do vetor

    echo "A chave existe! ISSET<br>";

} else {

    echo "A chave não existe! ISSET<br>";

}

if (isset($vetor[3])) { // chave existe, existe valor para o indice 3 do vetor

    echo "A chave existe! ISSET<br>";

} else {

    echo "A chave não existe! ISSET<br>";

}

if(isset($arr['nome'])) {

    echo "A chave existe! ISSET <br>";

} else {

    echo "A chave não existe! ISSET <br>";

}

if(isset($arr['teste'])) {

    echo "A chave existe! ISSET <br>";

} else {

    echo "A chave não existe! ISSET <br>";

}

$x = 10;

if(isset($x)) {

    echo "A var existe! ISSET <br>";

} else {

    echo "A var não existe! ISSET <br>";

}

if(isset($y)) {

    echo "A var existe! ISSET <br>";

} else {

    echo "A var não existe! ISSET <br>";

}
  
?>
</body>
</html>