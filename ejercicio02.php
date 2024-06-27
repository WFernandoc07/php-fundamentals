<?php
/*Desarrolla un programa que convierta diferentes unidades de medida (longitud, masa, temperatura)
basándose en la entrada del usuario. El programa debe solicitar al usuario el tipo de conversión que
desea realizar y luego realizar la conversión correcta usando estructuras condicionales.*/

print "Ingrese una opción:\n1.Logitud\n2.Masa\n3.Temperatura\n";
$opcion = trim(fgets(STDIN));

switch ($opcion){
    case 1:
        print "Ingrese una Longitud en metros: ";
        $longitud = trim(fgets(STDIN));
        print "\nLa longitud $longitud equivale ".$longitud * 3.281 ." pies";
        print "\nLa longitud $longitud equivale ".$longitud * 100 ." centímetros";
        print "\nLa longitud $longitud equivale ".$longitud * 0.001 ."  kilómetros";
        break;
    case 2:
        print "Ingrese una masa en Kilogramos: ";
        $masa = trim(fgets(STDIN));
        print "\nLa masa $masa equivale ".$masa * 1000 ." gramos";
        print "\nLa masa $masa equivale ".$masa * 2.205 ." libras";
        print "\nLa masa $masa equivale ".$masa * 0.001 ." toneladas";
        break;
    case 3:
        print "Ingrese una temperatura en °C: ";
        $temperatura = trim(fgets(STDIN));
        print "\nLa temperatura $temperatura °C equivale a " .($temperatura*(9/5))+32 ."°F";
        print "\nLa temperatura $temperatura °C equivale a " .($temperatura + 273.15) ."°K";
        print "\nLa temperatura $temperatura °C equivale a " .($temperatura*(9/5))+461.67 ."°R";
        break;
    default:
        print "\nElija una opción correcta";
        break;
}
?>
