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
        $uf=isset($_GET["lista"])?$_GET["lista"]:0;
        switch ($uf){
            case "rj": case "sp":
                echo "Região Sudeste.";
                break;
            case "to":
                echo "Região Centro-Oeste.";
                break;
            default:
                echo "Estado não localizado.";
        }
    ?>
</div>
</body>
</html>