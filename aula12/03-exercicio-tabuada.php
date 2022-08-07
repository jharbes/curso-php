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
    <form action="03-exercicio-tabuada-resposta.php" method="get">
        <label for="inum">Número: </label>
        <select name="num" id="inum">
            <?php
            $i=1;
            do {
                echo "<option value='$i'>$i</option>";
                $i++;
            } while ($i<=10);
            ?>
        </select>
        <input type="submit" value="Tabuada">
        <input type="reset" value="Limpar">
    </form>
</div>
</body>
</html>