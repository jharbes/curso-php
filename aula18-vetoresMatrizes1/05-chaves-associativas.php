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
        $v=array("nome"=>"Ana",
                "idade"=>23,
                "peso"=>65.5);
        print_r($v);
        $v["fuma"]=true;
        echo "<br>";
        foreach($v as $campo=>$valor){
            echo "O valor de $campo é $valor.<br>";
        }
    ?>
</div>
</body>
</html>