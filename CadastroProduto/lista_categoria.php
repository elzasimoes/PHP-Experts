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
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="nova_categoria.php">Novo Cadastro</a></li>
  </ol>
</nav>

    <table border="5">
        <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ativo</th>
        <th scope="col">Opções</th>
        </tr>


        <?php

        $sql = "select * from categoria";
        $qry = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($qry)) {

        ?>

            <tr>
                <td><?php echo $linha["id_categoria"] ?></td>
                <td><?php echo $linha["categoria"] ?></td>
                <td><?php echo $linha["ativo_categoria"] ?></td>
                <td><a href="editar_categoria.php?id=<?php echo $linha["id_categoria"] ?>">Editar</td>
                <td><a href="excluir_categoria.php?id=<?php echo $linha["id_categoria"] ?>">Excluir</td>

               

            </tr>


        <?php } ?>

    </table>

</html>