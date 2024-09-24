<?php
    $edad = $_POST["edad"];
    if ($edad < 12) {
        echo "Usted es un <strong>infante</strong>";
    }
    else if ($edad >= 12 && $edad < 18) {
        echo "Usted es un <strong>adolescente</strong>";
    }
    else if ($edad >= 18 && $edad <= 60) {
        echo "Usted es un <strong>adulto</strong>";
    }
    else if ($edad > 60) {
        echo "Usted es un <strong>anciano</strong>";
    }
?>