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
        print_r($v);
    ?>
    <!-- Abaixo vamos utilizar a tag <pre> para exibir em uma formatação melhor (pré formatada) -->
    <pre>
        <?php
            print_r($v);
        ?>
    </pre>
    <?php
        var_dump($v); // Outra maneira de exibir o vetor, mostra tambem o tipo da variável bem como seu tamanho.
        var_export($v); // Mais uma maneira de exibir o vetor.
        // Ambas acima podem também usar a tag <pre> pra alterar sua exibição.

        // Importantissima função abaixo para exibir o numero de elementos do vetor.
        echo "<br>O vetor tem ".count($v)." elementos.";
    ?>
</div>
</body>
</html>