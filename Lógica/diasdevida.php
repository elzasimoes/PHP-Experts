<?php

if ($_POST["enviado"]=="S") {
     
    $ano = $_POST["ano"];
    $mes = $_POST["mes"];
    $dia = $_POST["dia"];
    
    $idadeDias = 365 * $ano + 30 * $mes + $dia;


    $solucao = "<hr><p> Ano: $ano </p>
                <hr><p> Mês: $mes </p>
                <hr><p> Dias: $dia </p>
                <hr><p> Total de Dias: $idadeDias </p>";
 }

?>



<form name = "form" method = "post">

Ano: <input type = text name ="ano">
Mes: <input type = text name ="mes">
Dias: <input type = text name ="dia">

<input type = "hidden" name = "enviado" value="S">
<input type = "submit" value = "calcular">


</form>


<?php

echo  $solucao;

?>