<?php
    $num = $_POST["numMulti"];
    print("<table border='1'>");
    print("<h1>La tabla de multiplicar del $num</h1>");
    if ($num > 0 && $num <= 10){
        $loop = 0;
        while ($loop <= 10){
            print("<tr>");
            print("<td> $num x $loop = ". $num * $loop ."</td>");
            print("</tr>");
            $loop++;
        }
    }
    else {
        echo "Inserta un nº del 1 al 10";
    }
    print("</table>");
?>