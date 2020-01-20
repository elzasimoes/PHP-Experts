<?php

$servidor = "localhost";
$usuario = "root";
$senha = "mj123";
$banco = "curso_myqsli";

$conexao = @mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Não foi possível fazer a conexão com o banco de dados");

$qry = "insert into cliente(cliente, email, fone, endereco) values('Elza Simoes', 'elzaesimoes@gmail.com', 'rua 30' )";

$resultado = $mysqli_query($conexao, $qry);

if ($resultado)
    echo "Operação realizada com sucesso";
else
    echo "Não foi possível";