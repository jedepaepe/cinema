
    



<ul>
    <li><a class="active" href="#home">Accueil</a></li>
    <li><a href="#news">Nouveautés</a></li>
    <li><a href="#contact">Films en salle</a></li>
    <li><a href="#about">Archives</a></li>
    <?php if(!isset($_SESSION["username"])){?>
    <li><a href="signin.php">Sign in</a></li>
    <li><a href="insert.php">Sign up</a></li>
    <?php } 
    else {?>
    <li><a href=""><?php echo $_SESSION["username"]; ?></a></li>
    <li><a href="?disc=1"> Disconnect </a></li>
    <?php } ?>
</ul>


