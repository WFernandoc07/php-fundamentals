<?php
/*Crea un programa que calcule el precio final de un producto después de aplicar diferentes niveles de
descuentos basados en el monto de la compra. Por ejemplo, si la compra es mayor a $1000, aplica un 20% de
descuento, si es mayor a $500, aplica un 10% de descuento, y si es menor o igual a $500, aplica un 5% de
descuento. Considera también un descuento adicional del 2% si la compra se realiza en un día
específico de la semana.*/

print "Ingresa la cantidad de compra en a $. ";
$compra = trim(fgets(STDIN));

print "Ingresa el día de la compra: ";
$dia_compra = trim(fgets(STDIN));


switch ($dia_compra){
    case "lunes":
        if ($compra > 1000) {
            $precio_final = 0.98 * (0.8 * $compra);
        }elseif ($compra > 500) {
            $precio_final = 0.98 * (0.9 * $compra);
        }else {
            $precio_final = 0.98 * (0.95 * $compra);
        }
        break;
    default:
        if ($compra > 1000) {
            $precio_final = 0.8 * $compra;
        }else if ($compra > 500) {
            $precio_final = 0.9 * $compra;
        }else {
            $precio_final = 0.95 * $compra;
        }
        break;
}

print "El precio final es: ".$precio_final." dólares, siendo el día: ".$dia_compra; ;

?>
