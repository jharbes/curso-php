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
        $d=isset($_GET["ds"])?$_GET["ds"]:"Dia inválido";
        switch ($d){
            case 2: case 3: case 4: case 5: case 6:
                echo "Dia de ir pra escola!";
                break;
            case 1: case 7:
                echo "Dia de ficar em casa!";
                break;
            default:
                echo "Dia inválido!";
        }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)"><< VOLTAR</a>
</div>
</body>
</html>