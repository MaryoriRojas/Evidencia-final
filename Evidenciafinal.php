<?php

echo "ingrese el total de empleados\n";
$total_empleados = intval(readline());
$empleados = [];

for ($i = 1; $i <= $total_empleados; $i++) {
    echo "empelado $i\n";
    echo "ingrese su nombre\n";
    $nombre = readline();
    echo "ingrese su identidad \n";
    $DNI =intval(readline());
    echo "ingrese su genero \n";
    $genero = readline();
    echo "ingrese su edad \n";
    $edad = readline();
    echo "ingrese su estatura \n";
    $estatura = readline();
    echo "ingrese su peso \n";
    $peso = readline();
    echo "¿fuma o no fuma? \n";
    $fuma = readline();

    $empleados[] = [
        'nombre' => $nombre,
        'DNI' => $DNI,
        'genero' => $genero,
        'edad' => $edad,
        'estatura' => $estatura,
        'peso' => $peso,
        'fuma' => $fuma,
    ];
    echo "\n";    
}
echo "Nombre de empleado a buscar \n";
$buscar_nombre = readline();
echo "Identidad del empleado a buscar \n";
$buscar_DNI =readline();

$encontrado = false;

foreach ($empleados as $empleado) {
    if ($empleado['nombre']== $buscar_nombre && $empleado ['DNI'] == $buscar_DNI) {
        echo "nombre" . $empleado ['nombre'] . "\n";
        echo "DNI" . $empleado['DNI'] . "\n";
        echo "genero" . $empleado['genero'] . "\n";
        echo "edad" . $empleado['edad'] . "\n";
        echo "estatura" . $empleado['estatura'] . "\n";
        echo "peso" . $empleado['peso'] . "\n";
        echo "fuma" . $empleado['fuma'] . "\n";
        $encontrado = true;
        break;
    }
}
if (!$encontrado) {
    echo "el empleado no existe \n";
}