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
        function soma($a,$b){
            $s=$a+$b;
            return $s;
        }
        $x=3;
        $y=4;
        $r=soma($x,$y);
        echo "A soma entre $x e $y é igual a $r.";
    ?> 
</div>
</body>
</html>