<!doctype HTML>

<?php

require("conexao.php");
if (isset($_POST["enviado"])) {
    $categoria = $_POST["categoria"];
    $ativo = $_POST["ativo_categoria"];

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
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h2>Nova Categoria</h2>
    <form method="post">

        Categoria <input type="text" name="categoria">
        Ativo <input type="text" name="ativo">

        <input type="hidden" name="enviado" value="ok">
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

    <body>

        <body>

</html>