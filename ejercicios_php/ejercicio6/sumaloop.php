<?php
    $numsuma = $_POST["num"];
    $resultado = 0;
    $loopcounter = 0;
    print("<h1>Suma acumulativa de $numsuma:</h1>");
    while ($loopcounter <= $numsuma) {
        echo "$resultado + $loopcounter = ". $resultado + $loopcounter;
        $resultado = $loopcounter + $resultado;
        print("<br/>");
        $loopcounter++;
    }
?>