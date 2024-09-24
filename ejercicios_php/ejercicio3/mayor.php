<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$mayor = 0;
if ($num1 > $num2 && $num1>$num3) {
    $mayor = $num1;
}
elseif ($num2 > $num1 && $num2 > $num3){
    $mayor = $num2;
}
elseif ($num3 > $num1 && $num3 > $num2){
    $mayor = $num3;
}
echo "El mayor de los números $num1, $num2, $num3 es: $mayor";
?>