<?php
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
    // CONSTANTES
    const ESCUELA = 'EIP';

    // VBLES
    $nombre = 'Juan';
    $apellidos = "Rodriguéz Fernández";
    $edad = 55;
    $intereses = "Deportes, música y naturaleza";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <!-- <ul>
        <p>Alumnos de <span>EIP</span></p>
        <li><b>Nombre:</b> Juan</li>
        <li><b>Apellidos:</b> Rodríguez Fernández</li>
        <li><b>Edad:</b> 55</li>
        <li><b>Intereses:</b> Deportes, música y naturaleza</li>
    </ul> -->
    <ul>
        <p>Alumnos de <?=  ESCUELA ?></p>
        <li><b>Nombre:</b> <?=  $nombre ?></li>
        <li><b>Apellidos:</b> <?php echo $apellidos ?></li>
        <li><b>Edad:</b> <?= $edad ?></li>
        <li><b>Intereses:</b> <?= $intereses ?></li>
    </ul>
</body>
</html>