<?php

    define('SERVIDOR', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('BANCO', 'sisproduto');
    define('CHARSET', 'utf8');


    //padrão de nome para conexão "link"
    $conexao = @mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die(mysqli_connect_error());
    mysqli_set_charset($conexao, CHARSET) or die(mysqli_error($conexao));