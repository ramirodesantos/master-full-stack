<?php
    // ini_set('display_errors', '1');
    // error_reporting(E_ALL);
    // print_r($_GET);


    // if((isset($_GET["numero1"])&& (!empty($_GET["numero1"])) || $_GET["numero1"] == 0 ) && (isset($_GET["numero2"])&& (!empty($_GET["numero2"])) || $_GET["numero2"] == 0 ) && (isset($_GET["operacion"])&& !empty($_GET["operacion"]))){
    //     $num1 = $_GET["numero1"];
    //     $num2 = $_GET["numero2"];
    //     $operacion = $_GET["operacion"];
    //     trim($num1);
    //     trim($num2);
    //     if(is_numeric($num1) && is_numeric($num2)){
    //         switch($operacion){
    //             case "suma":
    //                 $resultado = $num1 + $num2;
    //                 break;
    //             case "resta":
    //                 $resultado = $num1 - $num2;
    //                 break;
    //             case "multiplicacion":
    //                 $resultado = $num1 * $num2;
    //                 break;
    //             case "division":
    //                 if($num2 != 0){
    //                 $resultado = $num1 / $num2;
    //                 }else{
    //                     $mensaje_error = "no se puede dividir entre 0";
    //                 }
    //                 break;
    //             case "resto":
    //                 $resultado = $num1 % $num2;
    //                 break;
    //         }  
    //     }else{
    //         $mensaje_error = "Por favor, asegurese de que los caracteres ingresados son numeros";
    //     }
    // }else{
    //     $mensaje_error = "Por favor, ingrese dos números y un operando";
    // }

    

    function calculadora(){
        $res = ["mensaje error"  => "", "resultado" => []];
        if(validar_existencia()){
            if(validar_campo_relleno()){
                if(validar_numeros()){
                    $res["resultado"]=operaciones();
                    return $res;
                }else{
                    $res["mensaje error"] = "Por favor, asegurese de que los caracteres ingresados son numeros";
                    return $res;
                }
            }else{
                $res["mensaje error"] = "Por favor, ingrese dos números y un operando";
                return $res;
            }
        }
        return $res;
    }



    function validar_existencia(){
        if(isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["operacion"])){
             $num1 = $_GET["numero1"];
             $num2 = $_GET["numero2"];
            trim($num1);
            trim($num2);
            return true;
        }else{
            return false;
        }
    }

    function validar_campo_relleno(){
        if(!empty($_GET["numero1"]) || $_GET["numero1"] == 0){
            return true;
        }else{
            return false;
        }
    }

    function validar_numeros(){
        if(is_numeric($_GET["numero1"]) && is_numeric($_GET["numero2"])){
            return true;
        }
        return false;
    }

    function operaciones(){
        $res= ["resultado" => null, "error" => ""];
        $operacion = $_GET["operacion"];
        $num1 = $_GET["numero1"];
        $num2 = $_GET["numero2"];
        switch($operacion){
            case "suma":
                $res["resultado"] = $num1 + $num2;
                break;
            case "resta":
                $res["resultado"] = $num1 - $num2;
                break;
            case "multiplicacion":
                $res["resultado"] = $num1 * $num2;
                break;
            case "division":
                if($num2 != 0){
                $res["resultado"] = $num1 / $num2;
                }else{
                    $res["error"] = "no se puede dividir entre 0";
                }
                break;
            case "resto":
                $res["resultado"] = $num1 % $num2;
            break;
        }  
        return $res;
    }
   
    $calculadora = calculadora();
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="cal-container">
        <div class="res">resultado = <?= $calculadora["resultado"]["resultado"] ?></div>
        <form action="index.php" method="GET">
            <div class="numeros">
                <div class="numero1">
                    <input type="text" name="numero1" id="numero1" >
                    <label for="numero1">Primer número</label>
                </div>
                <div class="numero2">
                    <input type="text" name="numero2" id="numero2" >
                    <label for="numero1">Segundo número</label>
                </div>
            </div>
            <div class="operacion"> Seleccione Operacion:
                <select name="operacion" id="operacion">
                    <option value="suma">suma</option>
                    <option value="resta">resta</option>
                    <option value="multiplicacion">multiplicacion</option>
                    <option value="division">division</option>
                    <option value="resto">resto</option>
                </select>
            </div>
            <input type="submit" value="Enviar">
        </form>
        <div class="error"><?=  $calculadora["mensaje error"].$calculadora["resultado"]["error"] ?></div>
    </div>
    
</body>
</html>