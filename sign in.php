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
        <meta charset="UTF-8">  
        <?php if (count($all) > 0)
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/cinema.php" />'
        ?>
        <title>test</title>  
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body>  
        <form method="GET">  
            <input type="text" name="name" placeholder="name"><br> 
            <input type="password" name="password" placeholder="pwd"><br> 
            <input type="email" name="email" placeholder="email"><br> 
            <input type="langue_id" name="langue_id" placeholder="langue_id"><br> 
            <input type="role_id" name="role_id" placeholder="role_id"><br> 
            <input type="submit" value="Submit">  
        </form>  
    </body>  
</html>  



include.path=${php.global.include.path}  
php.version=PHP_55  
source.encoding=UTF-8  
src.dir=.  
tags.asp=false  
tags.short=false  
web.root=.  


<?xml version="1.0" encoding="UTF-8"?>  
<project xmlns="http://www.netbeans.org/ns/project/1">  
    <type>org.netbeans.modules.php.project</type>  
    <configuration>  
        <data xmlns="http://www.netbeans.org/ns/php-project/1">  
            <name>demo</name>  
        </data>  
    </configuration>  
</project>

