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
        $n=isset($_GET["num"])?$_GET["num"]:1;
        echo "<h1>Analisando o número $n ...</h1>";
        $soma=0;
        echo "Valores Múltiplos: ";
        for ($i=1;$i<=$n;$i++){
            if ($n%$i==0){
                echo "$i  ";
                $soma++;
            }
        }
        echo "<br><br>Total de múltiplos: $soma<br><br>";
        echo "Resultado: $n ";
        if ($soma==2)
            echo "É PRIMO!";
        else
            echo "NÃO É PRIMO!";
    ?>
</div>
</body>
</html>