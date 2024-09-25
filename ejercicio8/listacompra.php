<?php
    $elementos = $_POST["productos"];
    $arraylista = explode(",", $elementos);
    for ($i = 0; $i < count($arraylista); $i++) {
        echo "Elemento de la lista nº $i: ";
        echo $arraylista[$i];
        print("<br/>");
    }
?>