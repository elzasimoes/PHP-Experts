<!doctype HTML>
<?php require("conexao.php"); ?>;
<html>
    <head>
        <meta charset="utf-8">
        <title> Sistema de Produto</title>
    </head>

<body>

    <a href="index.php"> Home </a> | <a href="nova_categoria.php">Novo Cadastro</a>
        <table border="1">
            <tr>
                <td><?php echo $linha("categoria")?></td>
                <td><?php echo $linha("ativo_categoria")?></td>
                <td><a href="editar_categoria.php?id=<?php echo $linha("id_categoria")?>">Editar</td>
                <td><a href="excluir_categoria.php?id=<?php echo $linha("id_categoria")?>">Excluir</td>

                <td><?php echo $linha("")?></td>
            </tr>

            <?php
            
            $sql = "select * from categoria";
            $qry = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($qry)) {
            
            ?>

            <tr>
                <td>ID</td>
                <td>Categoria</td>
                <td>Ativo:</td>
                <td coslpan="2">Opção</td>
            </tr>

            <?php } ?>

        </table>

</html>