<?php
    $letras = ["A", "B", "C", "D", "E", "F","G","H"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tablero">
        <?php
            for($i=0; $i<9; $i++){
                for($j=0; $j<9; $j++){
                    if($i==0 && $j==0){
                        ?>
                            <div></div>
                        <?php
                    }
                    if($i==0 && $j>0){
                        ?>
                        <div><?= $j ?></div>
                        <?php
                    }
                    if($j==0 && $i>0){
                        ?>
                        <div><?= $letras[$i-1]?></div>
                        <?php
                    }
                    if($i>0 && $j>0){
                        ?>
                        <div class="recuadro <?php if(($i+$j)%2 == 0){
                            echo "negro";
                        } else{
                            echo "blanco";
                        } ?>"></div>
                        <?php
                    }
                    


                }



            }
        
    
    
    
    ?>
    </div>
</body>
</html>