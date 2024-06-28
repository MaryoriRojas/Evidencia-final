<?php

echo "ingrese el total de empleados\n";
$total_empleados = intval(readline());
$empelados = [];

for ($i = 1; $i = $total_empleados; $i++) {
    echo "empelado $i\n";
    echo "ingrese su nombre\n";
    $nombre = readline();
    echo "ingrese su identidad \n";
    $DNI =intval(readline());
    echo "ingrese su genero \n";
    $genero = readline();
    echo "ingrese su edad \n";
    $edad = (readline());
    echo "ingrese su estatura \n";
    $estatura = floatval(readline());
    echo "ingrese su peso \n";
    $peso = floatval(readline());

    $empleados[] = [
        'nombre' => $nombre,
        'DNI' => $DNI,
        'genero' => $genero,
        'edad' => $edad,
        'estatura' => $estatura,
        'peso' => $peso,
    ];
    echo "\n";    
}
echo "Nnombre de empleado \n";
$buscar_nombre = readline();
echo "Identidad del empleado";
$buscar_DNI =readline();

$encontrado = false;