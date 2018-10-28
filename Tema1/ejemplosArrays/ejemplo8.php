<!--Ejemplo de array bidimensional asociativo .-->


<?php
$array = [
    'Luis' => [
        'piso' => 5,
        'escalera' => 'A',
        'puerta' => 15
    ],
    'Ana' => [
        'piso' => 2,
        'escalera' => 'A',
        'puerta' => 5
    ],
    ' Juan' => [
        'piso' => 3,
        'escalera' => 'B',
        'puerta' => 10
    ]
];
// Mostramos contenido del a rray mul tidimensional con la clave asociada a cada dimensión y los valores de sus elementos
foreach ($array as $inquilino => $datos) {
    echo "<p>Inquilino: $inquilino<br>";
    foreach ($datos as $dato => $valor) {
        echo "$dato: $valor<br>";
    }
    echo "</p>";
}
?>