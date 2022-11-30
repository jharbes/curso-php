<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP - Include</h1>
<h2><mark>A principal diferença entre include e require é que o include gera erro mas nao impede que o restante do script e/ou pagina seja disponibilizado, o require por sua vez gera erro fatal no arquivo caso seja inexistente impedindo que o arquivo continue sua renderização</mark></h2>
<?php
  
include 'teste.php';
  
?>
<p>Após o include</p>
<hr>
<p>Imprimindo a variavel c do arquivo teste.php: <?php echo $c; ?></p>
</body>
</html>