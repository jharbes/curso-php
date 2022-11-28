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
<h1>Curso de PHP</h1>
<?php
  
$nome="Jorge";
$sobrenome="Harbes";
  
?>

<form action="">
    <div>
        <input type="text" value="<?=$nome; ?>"> <!-- poderiamos ter usado também o <?php echo $nome; ?> 
                                                    não é inclusao de php , apenas de conteudo -->
    </div>
    <div>
        <input type="text" value="<?=$sobrenome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
</body>
</html>