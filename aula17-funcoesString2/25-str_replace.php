<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <?php
        $frase="Gosto de estudar Matemática";
        $novafrase=str_replace("Matemática","PHP",$frase);
        $novafrase1=str_ireplace("matemática","PHP",$frase);
        echo $novafrase."<br>";
        echo $novafrase1;
    ?>
</div>
</body>
</html>