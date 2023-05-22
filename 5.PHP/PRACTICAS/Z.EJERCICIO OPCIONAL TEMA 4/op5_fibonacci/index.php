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
    // usar explode o implode para sacarlo transformar array en string
        $elementosFibonacci = 10;

        function fibonacci(){
            global $elementosFibonacci;
            $resultado=[1];
            for($i=1; $i<$elementosFibonacci; $i++){
                $resultado[$i]=$resultado[$i-1]+$resultado[$i-2];
            }
            return $resultado;
        }
    ?>
    <div><?php print_r(fibonacci()) ?></div>
</body>
</html>