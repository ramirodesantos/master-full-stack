

<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);
$menu = ["Servicios","Sobre nosotros", "Contacto"];
$products = [
    [
        "id" => 1,
        "title" => "Lenovo IdeaPad 3",
        "description" => "Lenovo IdeaPad 3 15IAU7 Intel Core i5-1235U/16GB/512GB SSD/15.6''",
        "img" => "https://thumb.pccomponentes.com/w-300-300/articles/1063/10639213/1359-lenovo-ideapad-3-15iau7-intel-core-i5-1235u-16gb-512gb-ssd-156.jpg",
        "price" => 357
    ],
    [
        "id" => 2,
        "title" => "Logitech G502",
        "description" => "Logitech G502 Hero Ratón Gaming 25600DPI",
        "img" => "https://thumb.pccomponentes.com/w-300-300/articles/17/179806/244-logitech-g502-hero-raton-gaming-16000dpi-caracteristicas.jpg",
        "price" => 38.68
    ],
    [
        "id" => 3,
        "title" => "Google Nest Mini",
        "description" => "Google Nest Mini Altavoz Inteligente con Asistente Tiza",
        "img" => "https://thumb.pccomponentes.com/w-300-300/articles/24/243521/image-mini2-19-0403-0294-10-white-ttq-r04-simp.jpg",
        "price" => 22.89
    ],
    [
        "id" => 4,
        "title" => "HyperX Cloud Flight",
        "description" => "HyperX Cloud Flight Auriculares Gaming Inalámbricos",
        "img" => "https://thumb.pccomponentes.com/w-300-300/articles/1004/10042294/1601-hyperx-cloud-flight-auriculares-gaming-inalambricos.jpg",
        "price" => 69.99
    ],
    [
        "id" => 5,
        "title" => "AOC 24G2SAE",
        "description" => "AOC 24G2SAE/BK 23.8'' LED FullHD 165Hz FreeSync Premium",
        "img" => "https://thumb.pccomponentes.com/w-300-300/articles/1002/10026204/1597-aoc-27g2sae-bk-27-wled-fullhd-165hz-freesync-premium.jpg",
        "price" => 149.52
    ],
    [
        "id" => 6,
        "title" => "Silla Gaming",
        "description" => "AOC 24G2SAE/BK 23.8'' LED FullHD 165Hz FreeSync Premium",
        "img" => "Nacon CH-550 Silla Gaming",
        "price" =>  118.99
    ]
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($products[0] as $clave => $valor){
        // echo $valor;
        // print_r ($valor);
        // echo "</br>";
        // echo $clave;
        // echo "</br>";
        var_dump($valor);
        // echo "<pre>";
        // print_r ($valor);
        // echo "</pre>";

    }

    // for ($i = 0; $i<count($menu); $i++){
    //     echo $menu[$i];
    // }
    ?>
</body>
</html>