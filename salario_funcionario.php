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

<form name = "frm" method = "post">

Nome: <input type = "text" name = "nome">
Idade: <input type = "text" name = "idade">
Cargo: <input type = "text" name = "cargo">
Salario: <input type = "text" name = "salario">

<input type = "hidden" name= "enviado" value="S">
<input type = "submit" value = "calcular">

</form>

<hr>

<?php

echo "<p> Nome: $nome </p>
     <p> Idade: $idade </p>
     <p> Cargo: $cargo </p>
     <p> Salario Bruto: $salarioTotal </p>
     <p> Salário Liquido: $salarioLiquido </p>";



?>