<?php
// Declaración de variables
$nombre = "William";
$edad = 22;
$altura = 1.61;
$soltero = true;
$color_favorito = "rojo";

// Tipos de datos
$texto = "Hola mundo!";
$numero = 42;
$decimal = 3.14;
$boolean = true;
$arrayFrutas = array("platano", "manarina", "naranja");

// Operadores aritméticos
$suma = 5 + 3; //8
$resta = 5 - 3; //2
$multplicacion = 5 * 3; //15
$division = 5 / 3; //1.6667
$modulo = 5 % 3; //2

// Operadores de comparación
$es_igual = (5 == 2);//0 -> false
$es_igual2 = (5 == "5");//1 -> true
$es_identico = (5 === 5); // 1 -> true
print("Es igual: ".$es_igual);
print("\nEs igual_2: ".$es_igual2);
print("\nEs idéntico: ".$es_identico);

// Operadores lógicos -> AND (&&), OR (||), NOT (!).
$resultado = (5 > 3 && 3 < 5);
print("\nEl resultado es: ".$resultado);

// Condicionales -> IF
if($edad >= 18){
    print("\nSoy Mayor de Edad\n");
}else{
    print("\nSoy Menor de Edad\n");
}

// Condicionales -> SWITCH
switch ($color_favorito) {
    case "verde":
        print "El color es verde";
        break;
    case "rojo":
        print "El color es rojo";
        break;
    case "azul":
        print "El color es azul";
        break;
    default:
        print "Color desconocido";
        break;
}

// Blucles
print ("\nBlucles -> for :\n");
for ($i = 0; $i < 5; $i++) {
    print($i."\n");
}

print ("\nBlucles -> while :\n");
$index = 0;
while ($index < 5) {
    print $index."\n";
    $index++;
}

print ("\nBlucles -> do while :\n");
$j = 0;
do {
    print($j."\n");
    $j++;
}while ($j < 4);

print ("\nBlucles -> foreach :");
$nombres = array("Luiz", "Marcela", "Lorenzo", "Wendy");
foreach($nombres as $nombre) {
    print "\n".$nombre;
}

print "\nIngresa la cantidad de compra en a $. ";
$compra = trim(fgets(STDIN));

?>
