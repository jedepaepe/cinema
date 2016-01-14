<?php
if (isset($_REQUEST['forename']) AND isset($_REQUEST['password'])) {
    $forename = $_REQUEST['forename'];
    $password = $_REQUEST['password'];
    $pdo = new PDO('mysql:host=localhost;dbname=film;charset=utf8', 'root', '');
    $reponse = $pdo->query("INSERT INTO user (forename, password) "
            . "VALUES (\"$forename\", \"$password\")");
}
?>  

<!DOCTYPE html>  
<html>  
    <head>  
        <meta charset="UTF-8">  
        <title>test</title>  
    </head>  
    <body>  
        <form method="GET">  
            <input type="text" name="forename" placeholder="forename"><br> 
            <input type="password" name="password" placeholder="pwd"><br>  
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