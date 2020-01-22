
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

$dados = @mysqli_fetch_array($resultado);

//MySQLi_Result

echo "MySqli_Result";
echo "<pre>";
print_r($resultado);
echo "<pre>";

echo "<hr>";

echo "<br>";
echo "<br>";
echo "<br>";

echo "MySQL_fetch_array";
echo "<pre>";
print_r($dados);
echo "<pre>";


//Resultado:
// MySqli_Result
// mysqli_result Object
// (
//     [current_field] => 0
//     [field_count] => 5
//     [lengths] => Array
//         (
//             [0] => 1
//             [1] => 11
//             [2] => 21
//             [3] => 9
//             [4] => 9
//         )

//     [num_rows] => 2
//     [type] => 0
// )



// MySQL_fetch_array
// Array
// (
//     [0] => 1
//     [id_cliente] => 1
//     [1] => Elza Simoes
//     [cliente] => Elza Simoes
//     [2] => elzaesimoes@gmail.com
//     [email] => elzaesimoes@gmail.com
//     [3] => rua 49,50
//     [fone] => rua 49,50
//     [4] => 9999-9999
//     [endereco] => 9999-9999
// )
