<?php



function abrirConexao()
{
    $conexao = @mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die(mysqli_connect_error());
    mysqli_set_charset($conexao, CHARSET) or die(mysqli_error($conexao));

    return $conexao;
}

function fecharConexao($conexao)
{
    @mysqli_close($conexao) or die (mysqli_error($conexao);)
}


function executar($sql) 
{
    $conexao = abrirConexao();
    $qry = @mysqli_query($conexao, $sql) or die (@mysqli_error($conexao));

    fecharConexao($conexao);
    return $qry;
}


function consultar($tabela, $condicao = null, $campos = "*")
{
    $sql = "SELECT {$campos} from {$tabela} {$condicao}";
    $qry = executar($sql);

    if (!mysqli_num_rows($qry))
        return false;
    else {
        while ($linha = @mysqli_fetch_array($qry)) {
            $dados[] = $linha;
        }

        return $dados;
    }
}
