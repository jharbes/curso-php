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
        $v=array("A","J","M","X","K");
        $v[]="O"; // incluindo na ultima posicao do vetor um elemento.
        print_r($v);
        echo "<br><br>";
        $s=array(1,2,3,4,5);
        array_push($s,7); // outra maneira de incluir um elemento na ultima posicao do vetor
        print_r($s);
        echo "<br><br>";
        array_pop($s); // Agora excluindo o ultimo elemento do vetor
        print_r($s);
    ?>
</div>
</body>
</html>