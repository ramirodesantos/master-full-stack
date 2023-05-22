<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand link" href="index.php">HOME</a>
        <ul class="nav justify-content-end">
            <a class="link <?= $servicios?>" href="servicios.php" >Servicios</a>
            <a class="link <?= $nosotros?>" href="nosotros.php" >Sobre nosotros</a>
            <img src="<?= $_SESSION["imgPath"] ?>" alt="">
            <li class="nav-item">
                <?php 
                    if($_SESSION["correo"] == ""){
                ?>
                <a class="btn btn-outline-light" href="login.php" >Login</a>
                <?php 
                }else{
                ?>
                    <form action="" method="POST">
                            <button type="submit" name="logOut" class="btn btn-outline-danger">Log Out</button>
                    </form>
                <?php  
                }
                ?>
            </li>
        </ul>
    </nav>