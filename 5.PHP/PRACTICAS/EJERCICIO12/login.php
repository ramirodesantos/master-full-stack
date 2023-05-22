<?php
    
    require_once("models/user.php");

    session_start();

    $GLOBALS['imgPath'] = 'assets/uploads/';
    $imgSaved="";
    $ValidationsErrorMesagge = "";
    $ValidationsErrorMesaggePhoto = "";
    $user;

    function saveImage(){
        if (!file_exists($GLOBALS['imgPath'])){
            mkdir(($GLOBALS['imgPath']));
        }
        
        
        $from = $_FILES["photo"]["tmp_name"];
        $to = $GLOBALS['imgPath'].$_FILES["photo"]["name"];

        move_uploaded_file($from , $to);
        return $to;
    }


    function login(){

        global $ValidationsErrorMesagge;

        if (isset($_POST["email"])){
            try{
                
                User::validateLogin();
        
            } catch (\throwable $ex){
        
                $ValidationsErrorMesagge = $ex->getMessage();
        
            }

            if ($ValidationsErrorMesagge == ""){
    
                $_SESSION["correo"]=$_POST["email"];
                $_SESSION["contrasena"]=$_POST["password"];

            }
        }
    }



    if($_SESSION["correo"] == ""){

     login();
     $user = new User($_POST["email"], $_POST["password"]);
        
    }


    if(isset($_FILES["photo"])){
        
        global $ValidationsErrorMesaggePhoto;
        global $imgSaved;

        try{

            User::validatePhoto();
            

        }catch (\throwable $ex){
        
            $ValidationsErrorMesaggePhoto = $ex->getMessage();

        }
        
        if($ValidationsErrorMesaggePhoto == ""){
           
            $imgSaved = saveImage();
            $_SESSION["imgPath"] = $imgSaved;

        }

    }



    if(isset($_POST["logOut"])){

       User::logOut();

    }





    
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet"  >

</head>
<body>
    <?php
    require_once("modules/nav.php");
    ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <?php
                    if($_SESSION["correo"] == ""){
                    ?>
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>
                        </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <div class="errorValidations">
                            <p> <?= $ValidationsErrorMesagge ?> </p>
                        </div>
                    <?php
                    }else{
                    ?>
                        <div>
                            <h2>Bienvenido <?= $_SESSION["correo"] ?>, ya puede navegar por nuestra web usando el navegador. Disfrute!</h2>
                        </div>
                        <div>
                            <?php
                            if(isset($_FILES["photo"]) && $ValidationsErrorMesaggePhoto !== ""){
                            ?>
                            <p>¿No puedes ver la imagen subida como avatar en el menú de navegación?: Es porque <?= $ValidationsErrorMesaggePhoto?></p>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <?php
    require_once("modules/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    
</body>
</html>