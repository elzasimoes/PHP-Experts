
<?php

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "curso_mysqli";

$conexao = @mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Não foi possível fazer a conexão com o banco de dados");

$qryInsert = "INSERT INTO cliente(cliente, email, fone, endereco) VALUES('Rayane', 'fulano@gmail.com', 'rua 49,50','7777-7777')";
$qryUpdate = "UPDATE cliente set endereco = 'rua tal tal 58' where id_cliente = 2";
$qryDelete = "DELETE FROM `cliente` WHERE id_cliente = 3";

$qry = "select * from cliente";

$resultado = @mysqli_query($conexao, $qry);
$associativo = @mysqli_fetch_array($resultado, MYSQLI_ASSOC);
$numerico = @mysqli_fetch_array($resultado, MYSQLI_NUM);


echo "MySQL_fetch_array = Numérico";
echo "<pre>";
print_r($associativo);
echo "<pre>";

echo "<hr>";

echo "Numérico";
echo "<pre>";
print_r($numerico);
echo "<pre>";
