<?php

if ($_POST["enviado"]=="S") {
     
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cargo = $_POST["cargo"];
    $salario = $_POST["salario"];
    
    $reajuste = 0.38 * $salario;
    $gratificacao = 0.20 * $salario;

    $salarioTotal = $salario + $reajuste + $gratificacao;

    $salarioLiquido = $salarioTotal - 0.15 * $salarioTotal;

 }


?>



<form name = "form" method = "post">

Ano: <input type = text name ="ano">
Mes: <input type = text name ="mes">
Dias: <input type = text name ="dias">

<input type = "hideen" name = "enviado" value="8">
<input type = "submit" value = "calcular">


</form>