<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="shortcut icon" href="/icones/mario.ico" type="image/x-icon">
    <style>
        h2{
            text-align: center;
            margin-bottom: 20px;
        }
        div#corpo{
            font-size: 15pt;
        }
        table td{
            padding: 10px;
        }
        #entrar{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        #botao-entrar{
            width: 100px;
            height: 30px;
            margin: 10px;
            box-shadow: 2px 2px 5px grey;
        }
    </style>
</head>
<body>
<?php
require_once 'includes/banco.php';
require_once 'includes/funcoes.php';
require_once 'includes/login.php';
?>
<div id="corpo">
    <?php
        $u=$_POST['usuario']??null;
        $s=$_POST['senha']??null;

        if (is_null($u) || is_null($s))
            require 'user-login-form.php';
        else{
            $q="SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario = '$u' LIMIT 1";
            $busca=$banco->query($q);
            if (!$busca){
                echo msgErro('Falha ao acessar o banco!');
            }
            else{
                if ($busca->num_rows>0){
                    $reg=$busca->fetch_object();
                    if (testarHash($s,$reg->senha)){
                        echo msgSucesso("Logado com sucesso!");
                        $_SESSION['user']=$reg->usuario;
                        $_SESSION['nome']=$reg->nome;
                        $_SESSION['tipo']=$reg->tipo;
                    }
                    else
                        echo msgErro("Senha Inválida!");
                }else
                    echo msgErro("Usuário não encontrado!");
            }
        }
        echo voltar();
    ?>
</div>
<?php
include_once 'rodape.php';
?>
</body>
</html>