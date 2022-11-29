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
  
function velocidadeMaxima($vel) {

    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, passe um número inteiro <br>";
    }

}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

// Não pode
// velocidadeMaxima();

echo "Teste continuando <br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

// PHP ignora parâmetro desnecessário
velocidadeMaxima(250, "teste");

velocidadeMaxima("teste");

// Mais parâmetros
function descreverAnimal($nome, $raca) {

    echo "O $nome é da raça $raca <br>";

}

descreverAnimal("Bob", "vira lata");
descreverAnimal("Shark", "Pastor Alemão");
descreverAnimal("Poodle", "Tita");

// Poucos parâmetros
// descreverAnimal("Poodle");

?>
</body>
</html>