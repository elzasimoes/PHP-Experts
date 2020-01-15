<?php

$servidor = "localhost";
$usuario = "root";
$senha = "mj123";
$banco = "curso_mysqli1";

$conexao = @mysqli_connect ($servidor, $usuario, $servidor, $banco) or die ("Não foi possível fazer a conexão com o banco de dados")

$qry =