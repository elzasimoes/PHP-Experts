<?php
 if ($_POST["enviado"]=="S") {
     
    $ano = $_POST["ano"];
    $mes = $_POST["mes"];
    $dia = $_POST["dia"];
    

   $idadeDias = 365* $ano + 30 * $mes + $dia;

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