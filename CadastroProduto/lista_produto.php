<!doctype HTML>
<?php require("conexao.php"); ?>;
<html>

<head>
    <meta charset="utf-8">
    <title> Sistema de Produto</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <a href="index.php"> Home </a> | <a href="novo_produto.php">Novo Cadastro</a>
    <table border="1">

        <tr>
            <td>ID</td>
            <td>Categoria</td>
            <td>Produto</td>
            <td>Preço</td>
            <td>Ativo</td>
            <td coslpan="2">Opção</td>
        </tr>

        <?php

        $sql = "select * from produto p, categoria c where p.id_categoria = c.id_categoria";
        $qry = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($qry)) {

        ?>

            <tr>
                <td><?php echo $linha["id_produto"] ?></td>
                <td><?php echo $linha["categoria"] ?></td>
                <td><?php echo $linha["produto"] ?></td>
                <td><?php echo $linha["preco"] ?></td>
                <td><?php echo $linha["ativo_produto"] ?></td>
                <td><a href="editar_produto.php?id=<?php echo $linha["id_produto"] ?>">Editar</td>
                <td><a href="excluir_produto.php?id=<?php echo $linha["id_produto"] ?>">Excluir</td>
            </tr>





        <?php } ?>

    </table>

</html>