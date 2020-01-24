<!doctype HTML>

<?php

    require("conexao.php");
    if (isset($_POST["enviado"])){
        $id_categoria = $_POST["id"];
        

        $sql = "DELETE FROM categoria WHERE id_categoria = $id_categoria";
        $qry = mysqli_query($conexao, $sql);

    if ($qry)
        header("location:lista_categoria.php");
    else
        echo "Não foi possível excluir os dados: "  . mysqli_error($conexao);
    } else if (isset($_GET["id"])) {

        $sql = "SELECT * FROM categoria WHERE id_categoria = ".$_GET["id"];
        $qry = mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_array($qry);

        $id_categoria = $linha["id_categoria"];
        $categoria = $linha["categoria"];
        $ativo = $linha["ativo_categoria"];
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

            <h2>Excluir Categoria</h2>
           <form method="post">

           Categoria <input type="text" name="categoria" value="<?php echo $categoria?>">
           Ativo <input type="text" name="ativo" value="<?php echo $ativo?>">
                
                <input type="hidden" name="enviado" value="ok">
                <input type="hidden" name="id" value="<?php echo $id_categoria?>">

                <input type="submit" value="Excluir">

           </form>
<body>
<body>

</html>