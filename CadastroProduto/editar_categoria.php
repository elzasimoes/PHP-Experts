<!doctype HTML>

<?php

    require("conexao.php");
    if (isset($_POST["enviado"])){
        $id_categoria = $_POST["id"];
        $categoria = $_POST["categoria"];
        $ativo = $_POST["ativo_categoria"];

        $sql = "UPDATE categoria SET categoria = '$categoria', ativo_categoria = '$ativo' WHERE id_categoria = $id_categoria";
        $qry = mysqli_query($conexao, $sql);

    if ($qry)
        header("location:lista_categoria.php");
    else
        echo "Não foi possível editar os dados: "  . mysqli_error($conexao);
    } else if (isset($_GET["id"])) {

        $sql = "SELECT * FROM categoria WHERE id_categoria = ".$_GET["id"];
        $qry = mysqli_query($conexão, $sql);
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
    </head>

<body>

            <h2>Editar Categoria</h2>
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