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
    <form action="02-parte2.php" method="get">
        <?php
            $c=1;
            while ($c<=5){
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                $c++;
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>