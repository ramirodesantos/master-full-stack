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
        function esPrimo($num){
            if($num == 1 || $num == 2 || $num == 3){
                return "soy primo";
            }
            for($i=2; $i<$num-1; $i++){
                if($num%$i == 0 ){
                    return "no soy primo";
                }
                else{
                    return "soy primo";
                }
            }
        }
    ?>

    <div><?php echo esPrimo(13)?></div>
</body>
</html>