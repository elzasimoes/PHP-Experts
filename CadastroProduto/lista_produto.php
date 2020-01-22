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
            <td><?php echo $linha("id_produto") ?></td>
            <td><?php echo $linha("categoria") ?></td>
            <td><?php echo $linha("produto") ?></td>
            <td><?php echo $linha("preco") ?></td>
            <td><?php echo $linha("ativo_produto") ?></td>
            <td><a href="editar_produto.php?id=<?php echo $linha("id_produto") ?>">Editar</td>
            <td><a href="excluir_produto.php?id=<?php echo $linha("id_produto") ?>">Excluir</td>

            <td><?php echo $linha("") ?></td>
        </tr>

        <?php

        $sql = "select * produto";
        $qry = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($qry)) {

        ?>

            <tr>
                <td>ID</td>
                <td>Categoria</td>
                <td>Produto</td>
                <td>Preço</td>
                <td>Ativo</td>
                <td coslpan="2">Opção</td>
            </tr>

        <?php } ?>

    </table>

</html>