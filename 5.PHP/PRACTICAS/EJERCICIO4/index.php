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
    echo "Autor: Ramiro de Santos";
    echo "<br>";
    echo "<br>";
    // EJERCICIO1
    echo "EJERCICIO 1 <br>";
    function EdadyNombre($nombre, $edad){
        if ($edad >= 18){
            return  "$nombre tiene $edad y es mayor de edad";
        }else{
            return  "$nombre tiene $edad y es menor de edad";
        }
    }

    $esMayorEdad = EdadyNombre("pepe" , 18);
    echo $esMayorEdad;
    echo "<br>";
    $esMenorEdad = EdadyNombre("pepe" , 17);
    echo $esMenorEdad;
    echo "<br>";
    echo EdadyNombre("pepe" , 18);
    echo "<br>";
    echo "<br>";

    // EJERCICIO2
    echo "EJERCICIO 2 <br>";
    function ParoImpar($numero){
        if($numero%2 == 0){
            echo "soy par";
        } else{
            echo "soy impar";
        }
    }

    ParoImpar(2);
    echo "<br>";
    ParoImpar(1);
    echo "<br>";
    echo "<br>";

    // EJERCICIO3
    echo "EJERCICIO 3 <br>";
    function SacarMaximo($num1, $num2, $num3){
        $maximo = $num1;
        
        if ($maximo < $num2){
            $maximo = $num2;
        }
        
        if($maximo < $num3){
            $maximo = $num3;
        }
        return $maximo;
    }

    echo SacarMaximo(-11 , 2, -4);
    echo "<br>";
    echo "<br>";

    // EJERCICIO4
    echo "EJERCICIO 4 <br>";
    function Factorial($numero){
        $factorial = $numero;
        if($numero == 0){
            return $factorial = 1;
        }else if($numero < 0){
            return "el factorial de un número negativo no existe, por favor, ingrese otro número";
        }else{
            for($numero; $numero>1; $numero--){
                $factorial=$factorial*($numero-1);
            }
            return $factorial;
        }
    }

    echo Factorial(4);
    echo "<br>";
    echo "<br>";

    // EJERCICIO5
    echo "EJERCICIO 5 <br>";
    function CalcularMaximo($vector){
        $maximo = $vector[0];
        for($i=1; $i<count($vector);$i++){
            if($maximo < $vector[$i]){
                $maximo = $vector[$i];
            }
        }
        return $maximo;
    }
    echo CalcularMaximo([1,3,4,12,7,34,22,45,2,4,99,35,-21,55,76,29,83,22,33])

    ?>
</body>
</html>