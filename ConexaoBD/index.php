<?php

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "curso_mysqli";

$conexao = @mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Não foi possível fazer a conexão com o banco de dados");

$qry = "INSERT INTO cliente(cliente, email, fone, endereco) VALUES('Rayane', 'fulano@gmail.com', 'rua 49,50','7777-7777')";

$resultado = @mysqli_query($conexao, $qry);

if ($resultado)
    echo "Operação realizada com sucesso";
else
    echo "Não foi possível";


