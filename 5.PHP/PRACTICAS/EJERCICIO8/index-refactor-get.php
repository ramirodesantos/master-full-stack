<?php

    $GLOBALS['imgPath'] = 'assets/uploads/';

    function validateRequiredInputsNotEmpty(){
        return !empty($_POST['email']) && !empty($_POST['password']);
    }

    function validatePass(){
        if( $_POST["password"] == ("password") ||
            $_POST["password"] == ("123456") ||
            strlen($_POST["password"]) < 6 
        ){
            return false;
        }
        return true;
    }


    function validateImgFormat(){
        if( $_FILES["photo"]["type"] == "image/jpeg" ||
            $_FILES["photo"]["type"] == "image/png"  ||
            $_FILES["photo"]["type"] == "image/jpg"   
        ){
            return true;
        }
        return false;
    }


    function validateImgError(){
        if($_FILES["photo"]["error"] !== 0){
            return false;
        }
        return true;
    }


    function saveImage(){
        if (!file_exists($GLOBALS['imgPath'])){
            mkdir(($GLOBALS['imgPath']));
        }

        $from = $_FILES["photo"]["tmp_name"];
        $to = $GLOBALS['imgPath'].$_FILES["photo"]["name"];

        move_uploaded_file($from , $to);

        return $to;
    }

    function validateLogin(){
        $result = [
            'validate' => true,
            'message' => ''
        ];

        if (!validateRequiredInputsNotEmpty()){
            return ['validate' => false, 'message'=> 'por favor, rellene los campos del formulario'];
        }

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            return ['validate' => false, 'message'=> 'formato de e-mail introducido erroneo'];
        }

        if (!validatePass()){
            return ['validate' => false, 'message'=> 'la contraseña debe tener al menos 6 caracteres y no ser la palabra "password"'];
        }

        if (!validateImgError()){
            return ['validate' => false, 'message'=> 'ha habido algún error con la imagen o el campo está vacío'];
        }

        if (!validateImgFormat()){
            return ['validate' => false, 'message'=> 'el formato de la imagen no es correcto'];
        }
        
        
        return $result;
    }

    function deleteAllImagesUploaded(){
        $imgFolder = scandir($GLOBALS['imgPath']);       
        if(count($imgFolder) > 2){
            foreach( $imgFolder as $contentName){
                if(!is_dir($contentName)){
                    unlink( $GLOBALS['imgPath'].$contentName );
                }
            }
        }
    }

    //ACCIONES
    if(isset($_POST['login'])){
        $validationResult = validateLogin();

        if($validationResult['validate'] === true){
            $imgSaved = saveImage();
        }
    }else if(isset($_GET["logout"])){        
        if($_GET['imgSaved']){
            unlink($_GET['imgSaved'] );
        }else if(isset($_GET['deleteAllImages'])){
            deleteAllImagesUploaded();
        }
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
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">LOGO</a>
        <ul class="nav justify-content-end">
            <a class="link" href="#" >Servicios</a>
            <a class="link" href="#" >Sobre nosotros</a>
            <a class="link" href="#" >Contacto</a>
            <img src="<?= $imgSaved?>" alt="">
            <li class="nav-item">

                <?php
                if($validationResult['validate'] === true){
                ?>
                    <a class="btn btn-outline-danger" href="?logout=1&imgSaved=<?= $imgSaved; ?>">Logout delete this image</a>
                    <a class="btn btn-outline-danger" href="?logout=1&deleteAllImages=1">Logout delete all images</a>
                <?php
                } 
                ?>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <?php
                    if(!$_POST || $validationResult['validate'] === false){
                    ?>
                    <form action="?" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $_POST['password']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </div>
                        <button name="login" type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <?php
                    }

                    if(isset($validationResult))
                    {
                        if($validationResult['validate'] === true){
                        ?>
                            <div>
                                <h2>Bienvenido <?= $_POST["email"] ?></h2>
                            </div>
                        <?php
                        }else{
                        ?>
                            <div class="errorValidations">
                                <p> <?= $validationResult['message'] ?> </p>
                            </div>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4">Autor: Tú </div>
            </div>
        </div>
    
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    
</body>
</html>