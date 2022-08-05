<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aula04/_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        input{
            width: 100px;
        }
    </style>
</head>
<body>
<div>
    <h1>Curso de PHP</h1>
    <form action="03-exercicio-parte2.php" method="get">
        <label for="iinicio">Inicio: </label><input type="number" name="inicio" id="iinicio" required> <br> <br>
        <label for="ifinal">Final: </label><input type="number" name="final" id="ifinal" required> 
        <br><br>
        <label for="iincremento">Incremento: <select name="incremento" id="iincremento">
            <?php
            $c=1;
            while ($c<=5){
            echo "<option value='$c'>$c</option>";
            $c++;
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</div>
</body>
</html>