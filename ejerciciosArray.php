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
    */

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

    ?>
</body>

</html>