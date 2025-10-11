<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Ejercicio 9
    /*
    $palos = ["Oros", "Copas", "Espadas", "Bastos"];

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

    $puntos = [
        1 => 11,
        2 => 0,
        3 => 10,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 0,
        9 => 0,
        10 => 2,
        11 => 3,
        12 => 4,
    ];

    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $paloRandom = $palos[mt_rand(0, 3)];
        $numRandom = $numeros[mt_rand(0, 11)];
        foreach ($puntos as $num => $punto) {
            if ($numRandom == $num) {
                $sum += $punto;
                echo "<p>$numRandom de $paloRandom que equivale a $punto puntos</p>";
            }
        }
    }
    echo "Su puntaje es de $sum";


    //Ejercicio 10

    $palos = ["Oros", "Copas", "Espadas", "Bastos"];

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

    $puntos = [
        1 => 11,
        2 => 0,
        3 => 10,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 0,
        9 => 0,
        10 => 2,
        11 => 3,
        12 => 4,
    ];

    $baraja = [];
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $paloRandom = $palos[mt_rand(0, 3)];
        $numRandom = $numeros[mt_rand(0, 11)];

        $baraja = [$numRandom => $paloRandom];
        $baraja = "$numRandom de $paloRandom";
        echo "<p>$baraja</p>";

    }

    foreach ($puntos as $num => $punto) {
        if ($numRandom == $num) {
            $sum += $punto;
            for ($i = 0; $i < count($baraja); $i++) {
                echo "<p>$baraja que equivale a $punto puntos</p>";
            }
        }
    }


    echo "Su puntaje es de $sum";
    */

    ?>

    <h1>Ejercicio 14</h1>
    <h3>4.</h3>

    <?php

    $hotel = [
        "habitaciones" => [
            101 => ["tipo" => "individual", "precio" => 50, "ocupada" => false, "dias_ocupada" => 0],
            102 => ["tipo" => "doble", "precio" => 80, "ocupada" => true, "dias_ocupada" => 3],
            103 => ["tipo" => "suite", "precio" => 150, "ocupada" => false, "dias_ocupada" => 0],
            201 => ["tipo" => "individual", "precio" => 50, "ocupada" => true, "dias_ocupada" => 5],
            202 => ["tipo" => "doble", "precio" => 80, "ocupada" => false, "dias_ocupada" => 0],
            203 => ["tipo" => "suite", "precio" => 150, "ocupada" => true, "dias_ocupada" => 2]
        ],
        "reservas" => [
            ["habitacion" => 102, "cliente" => "Juan Pérez", "dias" => 3],
            ["habitacion" => 201, "cliente" => "María López", "dias" => 5],
            ["habitacion" => 203, "cliente" => "Carlos Ruiz", "dias" => 2]
        ]
    ];

    $ocupada = false;
    $habitacion;
    foreach ($hotel['habitaciones'] as $numero => $info) {
        if ($hotel['habitaciones'][$numero]['ocupada'] == true) {
            while ($ocupada == false) {
                $habitacion = $numero;
                $ocupada = true;

            }

        }
    }

    $total = $hotel['habitaciones'][$habitacion]['precio'] * $hotel['habitaciones'][$habitacion]['dias_ocupada'];
    var_dump($total);
    echo '<br>';

    $hotel['habitaciones'][$habitacion]['ocupada'] = false;
    $hotel['habitaciones'][$habitacion]['dias_ocupada'] = 0;

    for ($i = 0; $i < count($hotel['reservas']); $i++) {
        if ($hotel['reservas'][$i]['habitacion'] == $habitacion) {
            unset($hotel['reservas'][$i]);
        }
    }
    $hotel['reservas'] = array_values($hotel['reservas']);

    var_dump($hotel['reservas']);
    echo '<br>';

    var_dump($hotel['habitaciones']);
    echo '<br>';

    ?>

    <h3>5.</h3>

    <?php

    $hotel = [
        "habitaciones" => [
            101 => ["tipo" => "individual", "precio" => 50, "ocupada" => false, "dias_ocupada" => 0],
            102 => ["tipo" => "doble", "precio" => 80, "ocupada" => true, "dias_ocupada" => 3],
            103 => ["tipo" => "suite", "precio" => 150, "ocupada" => false, "dias_ocupada" => 0],
            201 => ["tipo" => "individual", "precio" => 50, "ocupada" => true, "dias_ocupada" => 5],
            202 => ["tipo" => "doble", "precio" => 80, "ocupada" => false, "dias_ocupada" => 0],
            203 => ["tipo" => "suite", "precio" => 150, "ocupada" => true, "dias_ocupada" => 2]
        ],
        "reservas" => [
            ["habitacion" => 102, "cliente" => "Juan Pérez", "dias" => 3],
            ["habitacion" => 201, "cliente" => "María López", "dias" => 5],
            ["habitacion" => 203, "cliente" => "Carlos Ruiz", "dias" => 2]
        ]
    ];


    $max = 0;
    $total = 0;
    $habitacion = 0;
    foreach ($hotel['habitaciones'] as $numero => $info) {
        if ($hotel['habitaciones'][$numero]['ocupada'] == true) {
            $total = $hotel['habitaciones'][$numero]['precio'] * $hotel['habitaciones'][$numero]['dias_ocupada'];
            if ($total > $max) {
                $max = $total;
                $habitacion = $numero;
            }
        }
    }
    var_dump($max);
    var_dump($habitacion);

    ?>
</body>

</html>