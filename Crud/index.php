<!DOCTYPE html>
<html>

<head>
    <title>Crud Genérico</title>
</head>

<body>
    <?php
    require("crud.php");
    $conexao = abrirConexao();

    $dados = consultar("produto");
    
    
    print_r($dados);
   
    ?>

</body>

</html>