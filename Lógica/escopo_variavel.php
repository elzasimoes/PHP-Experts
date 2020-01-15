<?php

    $a = 1; //variável global
    $b = 2;

    function soma()

    (
        $a = 3;
        $b = 5;
      

        echo $GLOBALS['a']+ $GLOBALS['b'];
    )
        
        echo "resultado: ";
        soma();
        echo "<br/>depois da função:$a";




?>