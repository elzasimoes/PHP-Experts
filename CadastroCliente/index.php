<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sistema Cadastro</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="conteudo">
        <div class="topo">
            <a href="" class="logo"></a>
            <h1>Sistema de Cadastro</h1>
            <form class="pesquisa" action="">
                <input type="text" placeholder="Buscar.." name="buscar">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

            </form>
        </div>
        <div class="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="#" class="glyphicon glyphicon-home"> Home</a></li>
                <li><a href="#" class="glyphicon glyphicon-new-window"> Novo</a></li>
                <li><a href="#" class="glyphicon glyphicon-pencil"> Alterar</a></li>
                <li><a href="#" class="glyphicon glyphicon-trash"> Excluir</a></li>
                <li><a href="#" class="glyphicon glyphicon-th-list"> Lista</a></li>
            </ul>
        </div>


        <div class="meio">
            <?php
            $link = $_GET["link"];

            $pag[1] = "home.php";
            $pag[2] = "cadastro.php";
            $pag[3] = "lista.php";

            if (!empty($link)) {

                if (file_exists($pag[$link])) {
                    include $pag[$link];
                } else {
                    include "home.php";
                }
            } else {
                include "home.php";
            } ?>

        </div>
        <div class="limpar"></div>
        <div class="rodape">
            <p>Copyright @ElzaSimões</p>
        </div>
</body>

</html>