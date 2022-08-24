<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Document</title>
    <style>
        .foco{
            color:darkred;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <?php
        $n=isset($_GET["num"])?$_GET["num"]:0;
        $o=isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o){
            case 1:
                $r=$n*2;
                break;
            case 2:
                $r=pow($n,3);
                break;
            case 3:
                if ($n<0){
                    $r="Impossível calcular";
                }
                else{
                    $r=sqrt($n);
                }
                break;
            default:
                $r="Cálculo inválido";
        }
        echo "O resultado é <span class='foco'>$r</span>.";
    ?>
    <br><br>
    <a href="exercicio01.html"><- VOLTAR</a>
</div>
</body>
</html>