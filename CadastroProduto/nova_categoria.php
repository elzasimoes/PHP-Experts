<!doctype HTML>

<?php

require("conexao.php");
if (isset($_POST["enviado"])) {
    $categoria = $_POST["categoria"];
    $ativo = $_POST["ativo_produto"];

    $sql = "INSERT INTO categoria (categoria, ativo_categoria) VALUES('$categoria','$ativo')";
    $qry = mysqli_query($conexao, $sql);

    if ($qry)
        header("location:lista_categoria.php");
    else
        echo "Não foi possível inserir os dados" . mysqli_error($conexao);
}


?>

<html>

<head>
    <meta charset="utf-8">
    <title> Sistema de Produto</title>
</head>

<body>
    <h2>Nova Categoria</h2>
    <form method="post">

        Categoria <input type="text" name="categoria">
        Ativo <input type="text" name="ativo">

        <input type="hidden" name="enviado" value="ok">
        <input type="submit" value="Cadastrar">

    </form>

    <body>

        <body>

</html>