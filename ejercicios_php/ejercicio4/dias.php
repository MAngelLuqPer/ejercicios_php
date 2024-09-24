<?php 
    $dianum = $_POST["num"];
    switch ($dianum){
        case 1:
            echo "El dia 1 es Lunes";
            break;
        case 2:
            echo "El dia 2 es Martes";
            break;
        case 3:
            echo "El dia 3 es Miércoles";
            break;
        case 4:
            echo "El dia 4 es Jueves";
            break;
        case 5:
            echo "El dia 5 es Viernes";
            break;
        case 6:
            echo "El dia 6 es Sábado";
            break;
        case 7:
            echo "El dia 7 es Domingo";
            break;
        default:
            echo "El valor $dianum no se encuentra en el rango del 1 al 7";
    }
?>