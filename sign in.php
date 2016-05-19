<?php
if (isset($_REQUEST['name']) AND isset($_REQUEST['password'])) {
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $pdo = new PDO('mysql:host=localhost;dbname=film;charset=utf8', 'root', '');
    $reponse = $pdo->query("Select name from user where name = '$name 'and password = '$password'");
   $all = $reponse->fetchAll();
    echo count($all); 
}
?>  

<!DOCTYPE html>  
<html>  
    <head>  
        <?php include_once './head.php'; ?>
        <?php if (count($all) > 0)
        ?>
        <title>test</title>  
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body>  
        <?php include './header.php'; ?>
        <form method="GET">  
            <input type="text" name="name" placeholder="name"><br> 
            <input type="password" name="password" placeholder="pwd"><br> 
            <input type="email" name="email" placeholder="email"><br> 
            <input type="langue_id" name="langue_id" placeholder="langue_id"><br> 
            <input type="role_id" name="role_id" placeholder="role_id"><br> 
            <input type="submit" value="Submit">  
        </form>  
        <?php include './footer.php'; ?>        
    </body>  
</html>  

