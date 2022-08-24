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
    <form action="02-tabuada.php" method="get">
        <label for="inum">Número: </label>
        <select name="num" id="inum">
            <?php
                for ($i=1;$i<=10;$i++)
                    echo "<option value='$i'>$i</option>";
            ?>
        </select>
        <input type="submit" value="Tabuada">
        <input type="reset" value="Limpar">
    </form>
</div>
</body>
</html>