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
            $c=range(5,20,2);
            foreach($c as $v){
                echo $v." ";
            }
        ?>
        <table border="1">
        <tr>
            <?php
                $c=range(5,20,2);
                foreach($c as $v){
                    echo "<td>$v ";
                }
            ?>
        </tr>
        </table>
</div>
</body>
</html>