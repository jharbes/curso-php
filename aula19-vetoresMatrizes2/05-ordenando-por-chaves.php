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
        // Observe que no vetor abaixo o ordenamento de seus índices está fora do padrão convencional.
        $v=array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
        print_r($v);
        ksort($v);
        echo "<br><br>Observe abaixo que a função ksort() ordenou os índices e com isso também os valores foram junto deles.<br><br>";
        print_r($v);
        krsort($v);
        echo "<br><br>Agora a função krsort() faz o mesmo efeito que a ksort() só que invertido, índices em ordem decrescente, valores rearranjados acompanhando seus respectivos índices.<br><br>";
        print_r($v);
    ?>
</div>
</body>
</html>