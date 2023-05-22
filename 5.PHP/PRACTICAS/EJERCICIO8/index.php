<?php
    // Recogida de datos 
    // print_r( $_POST );
    // $ValidationsSuccess = 
    // validaciones de Login
    $ValidationsErrorMesagge = "";
    $validationsOk = "";
    $imgPath = "";

    function validations(){
        global $ValidationsErrorMesagge;
        global $validationsOk;
        // if (!validateRequiredInputsExists()){
        //     return false;
        // }

        if (!validateRequiredInputsNotEmpty()){
            $ValidationsErrorMesagge = "por favor, rellene los campos del formulario";
            return false;
        }

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $ValidationsErrorMesagge = "formato de e-mail introducido erroneo";
            return false;
        }

        if (!validatePass()){
            $ValidationsErrorMesagge = 'la contraseña debe tener al menos 6 caracteres y no ser la palabra "password"';
            return false;
        }

        if (!validatePhotoFormat()){
            $ValidationsErrorMesagge = 'el formato de la imagen no es correcto';
            return false;
        }

        if (!validatePhotoError()){
            $ValidationsErrorMesagge = 'ha habido algún error con la imagen o el campo está vacío';
            return false;
        }

        $validationsOk = "unDisplayForm";
        return true;
    }


    if (validations()){
       $imgPath = saveImage();
    }


    function validateRequiredInputsExists(){
        if( !isset($_POST["email"]) ||
            !isset($_POST["password"]) 
          ){
            return false;
        }
        return true;
    }


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


    function validatePhotoFormat(){
        if( $_FILES["photo"]["type"] == "image/jpeg" ||
            $_FILES["photo"]["type"] == "image/png"  ||
            $_FILES["photo"]["type"] == "image/jpg"   
        ){
            return true;
        }
        return false;
    }


    function validatePhotoError(){
        if($_FILES["photo"]["error"] !== 0){
            return false;
        }
        return true;
    }


    function saveImage(){
        if (!file_exists("assets/uploads")){
            mkdir(("assets/uploads"));
        }

        $from = $_FILES["photo"]["tmp_name"];
        $to = "assets/uploads/".$_FILES["photo"]["name"];

        move_uploaded_file($from , $to);

        return $to;
    }


    function deleteImg(){
        echo "hola";
    }

    //$validationsOk = 1;
    //$nombreVar = 'validationsOk'.$i;
    //echo $$nombreVar //$'validationsOk';

    if(isset($_POST["logOut"]) && $$validationsOk !== ""){
        $imgFolder = scandir("assets/uploads");
        echo "<pre>";
        print_r( $imgFolder );
        echo "</pre>";
       if(count($imgFolder)>2){
            foreach( $imgFolder as $photos){
                echo $photos;
                echo "hola";
                echo is_dir($photos);
                if(!is_dir($photos)){
                    echo "tuvieja";
                    echo $imgPath;
                    // unlink( $imgPath );
                }
            }
       }
    }

    // echo "<pre>";
    // print_r(scandir("assets/uploads"));
    // echo "</pre>";

    validations();
    echo $validationsOk;
    // $validateStatus = validations();
    // echo $validateStatus;
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
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
            <img src="<?= $imgPath?>" alt="">
            <li class="nav-item">
                <!-- <a class="btn btn-outline-light" href="#" >Login</a> -->
                <!-- <a class="btn btn-outline-danger" href="">Logout</a> -->
                <form action="" method="POST">
                    <button class="btn btn-outline-danger" type="Submit" name="logOut" id="logOut">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="" method="POST" enctype="multipart/form-data" class="<?= $validationsOk?>">
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
                    <?php
                    if(!validations()){
                    ?>
                        <div class="errorValidations">
                            <p> <?= $ValidationsErrorMesagge ?> </p>
                        </div>
                    <?php
                    }else{
                        ?>
                            <div>
                                <h2>Bienvenido <?= $_POST["email"] ?></h2>
                            </div>
                        <?php
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