<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>TABLAS DE MULTIPLICAR</h1>
    <section class="card-container">
        <?php
            for($i=1; $i<11;$i++){
                ?>
                    <section class="card">
                    <h2>TABLA DEL <?=$i?></h2>
                    <?php for($j=0;$j<11;$j++){
                        ?>
                        <p><?= "$i x $j = " . $i*$j; ?></p>
                        <?php
                    }
                    ?>
                    </section>  
                <?php
            }
        ?>
    </section>
</body>
</html>