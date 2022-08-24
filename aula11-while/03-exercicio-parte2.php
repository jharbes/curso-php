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
        $n1=$_GET["inicio"];
        $n2=$_GET["final"];
        $soma=$_GET["incremento"];
        if ($n1>$n2){
            while ($n1>=$n2){
                echo $n1."  ";
                $n1-=$soma;
            }
        } else{
            while ($n1<=$n2){
                echo $n1."  ";
                $n1+=$soma;
            }
        }
    ?>
</div>
</body>
</html>