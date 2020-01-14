<?php

    $a = 1; //variável global
    $b = 2;

    function soma()

    (
        $a = 3;
        $b = 5;
        global $a, $b;
        echo $a+$b;
    )
        
        echo "resultado: ";
        soma();
        echo "<br/>depois da função:$a";




?>