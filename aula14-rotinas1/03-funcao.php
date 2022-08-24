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
        function soma(){
            $p=func_get_args();
            $tot=func_num_args();
            $s=0;
            /*
            for ($i=0;$i<$tot;$i++)
                $s+=$p[$i];

                Exemplo acima utilizamos as variáveis, no exemplo abaixo utilizamos diretamente as funções, ambos darão o mesmo resultado.
            */
            for ($i=0;$i<func_num_args();$i++)
                $s+=func_get_args()[$i];
            return $s;
        }
        echo "A soma dos valores é ".soma(2,3,4,5,88);
    ?> 
</div>
</body>
</html>