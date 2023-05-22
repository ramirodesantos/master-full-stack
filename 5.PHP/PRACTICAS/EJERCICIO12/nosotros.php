<?php
    session_start();
    require_once("models/user.php");

    
    if(isset($_POST["logOut"])){

        User::logOut();
        header('Location: http://localhost:8888/EJERCICIOS/EJERCICIO12/login.php');
        
     }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet"  >
</head>
    <body>
        <?php
            $nosotros="active";
            require_once("modules/nav.php")
        ?>
        <main>
        <?php
                if($_SESSION["correo"] == ""){
            ?>
                <h2>Por favor, inicie sesión para ver el contenido de la página.</h2>
                <a class="btn btn-outline-dark" href="login.php" >Login</a>
            <?php
                }else{
            ?>
                <h2>bienvenido <?= $_SESSION["correo"]?> usted está en la página de nosotros</h2>
            <?php
            }
            ?>



        </main>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>