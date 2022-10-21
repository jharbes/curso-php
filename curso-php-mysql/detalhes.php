<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Jogo</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="shortcut icon" href="/icones/mario.ico" type="image/x-icon">
</head>
<body>
<?php
require_once 'includes/banco.php';
require_once 'includes/funcoes.php';
require_once 'includes/login.php';
?>
<div id="corpo">
    <?php
        include_once 'topo.php';
        $c=$_GET["cod"]??0;
        $busca=$banco->query("select * from jogos where cod='$c'");
    ?>
    <h1>Detalhes do Jogo</h1>
    <table class="detalhes">
        <?php
        if (!$busca)
            echo "<tr><td>Busca falhou! $banco->error</tr></td>";
        else{
            if ($busca->num_rows==1){
                $reg=$busca->fetch_object();
                // Não colocar a função thumb() direto na tag img, nao vai funcionar.
                $t=thumb($reg->capa);
                echo "<tr><td rowspan='3'><img src='$t' class='full'/></td></tr>";
                echo "<td><h2>$reg->nome</h2>";
                echo "Nota: ".number_format($reg->nota,1)."/10.0";
                if (isAdmin()){
                    echo "  <span class='material-symbols-outlined'>add</span> ";
                    echo "<span class='material-symbols-outlined'>edit</span> ";
                    echo "<span class='material-symbols-outlined'>delete</span>";
                }
                else if (isEditor())
                    echo "  <span class='material-symbols-outlined'>edit</span>";
                echo "<tr><td style='text-align: justify;'>$reg->descricao</td></tr>";
                echo "<tr><td>Adm</td></tr>";
            }
            else{
                echo "<tr><td>Nenhum registro encontrado</tr></td>";
            }
        }
        ?>
    </table>
    <?php echo voltar(); ?>
</div>
<?php
include_once 'rodape.php';
?>
</body>
</html>