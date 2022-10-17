<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Curso de PHP</h1>
<?php

// Alguns valores são lidos como false pelo PHP para booleanos, como por exemplo: 0, 0.0, "0", [], NULL null, perceba abaixo:

if (!0 && !0.0 && !"0" && ![] && !NULL && !null)
    echo "Todos são falsos!!<br><hr>";

echo is_bool(0)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(true)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(false)?"É booleano<br>":"Não é booleano<br>";

echo is_bool("João malucao")?"É booleano<br>":"Não é booleano<br>";
echo is_bool(5>4)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(5<4)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(null)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(NULL)?"É booleano<br>":"Não é booleano<br>";
echo is_bool([])?"É booleano<br>":"Não é booleano<br>";
echo is_bool("0")?"É booleano<br>":"Não é booleano<br>";
echo is_bool(0.0)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(2==2)?"É booleano<br>":"Não é booleano<br>";
echo is_bool(2!=2)?"É booleano<br>":"Não é booleano<br>";


?>
</body>
</html>