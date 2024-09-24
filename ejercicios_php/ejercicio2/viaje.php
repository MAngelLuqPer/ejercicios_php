<?php
    $distancia = $_POST["distancia"];
    $vel = $_POST["vel"];
    $tiempo = $distancia / $vel;
    echo "Tardarás en recorrer $distancia kms a $vel km/h un total de $tiempo horas"
?>