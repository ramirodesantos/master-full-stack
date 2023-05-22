<?php
    class User{
        private $email;
        private $password;

        public function __construct($email, $contraseña){

            $this->email = $email;
            $this->password = $contraseña;

        } 



        public static function validateRequiredInputsNotEmpty(){

            return !empty($_POST['email']) && !empty($_POST['password']);

        }


        public static function validatePass(){

            if( $_POST["password"] == ("password") ||
                $_POST["password"] == ("123456") ||
                strlen($_POST["password"]) < 6 

            ){

                return false;

            }

            return true;

        }



        public static function validateImgFormat(){
            if( $_FILES["photo"]["type"] == "image/jpeg" ||
                $_FILES["photo"]["type"] == "image/png"  ||
                $_FILES["photo"]["type"] == "image/jpg"   
            ){
                return true;
            }
            return false;
        }



        public static function validateImgError(){
            if($_FILES["photo"]["error"] !== 0){
                return false;
            }
            return true;
        }


        public static function deleteAllImagesUploaded(){
            
            unlink($_SESSION['imgPath']);
            rmdir("assets/uploads");

        }


        

        public static function validateLogin(){

            if (self::validateRequiredInputsNotEmpty() == false){

                throw new Exception("Por favor, rellene todos los campos del formulario");

            }

            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

                throw new exception('formato de e-mail introducido erroneo');

            }

            if (self::validatePass() == false){

                throw new exception('la contraseña debe tener al menos 6 caracteres y no ser la palabra "password"');

            }
        }


        public static function validatePhoto(){



            if(self::validateImgError() == false){

                throw new Exception("ha habido algún error con la imagen o el campo está vacío");

            }

            if(self::validateImgFormat() == false){

                throw new Exception("Formato de imagen no valido");

            }

        
        }


        
        

        public static function logOut(){

            self::deleteAllImagesUploaded();
            unset($_SESSION);
            session_destroy(); 
        
        }
    }

?>