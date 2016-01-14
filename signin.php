
<!----New Signin--> 

<?php

session_start();
$isOk = 0;
$username = "no username";
if (isset($_REQUEST['forename']) AND isset($_REQUEST['password'])) {
    $forename = $_REQUEST['forename'];
    $password = $_REQUEST['password'];
    $pdo = new PDO('mysql:host=localhost;dbname=film;charset=utf8', 'root', '');
    $reponse = $pdo->query("Select forename from user where forename = '$forename' and password = '$password'");
    $all = $reponse->fetchAll();
    if(count($all)>0)
    {
        $isOk =1;
    }
    else
    {
        echo "isOk false";   
        $isOk = 2;
    }
}
if($isOk == 1)
{
//    $_SESSION["username"] = $forename;
    $_SESSION["username"] = $forename;
}
elseif(isset($_SESSION["username"]))
{
//    $_SESSION["username"] = $forename;
}
elseif($isOk == 0)
{
    
}
elseif($isOk == 2)
{
//    $_SESSION["username"] = $forename;
//    $_SESSION["username"] = "qsdfsqdf";
    $_SESSION["username"] = "isOk == 2";
}
else
{
    $_SESSION["username"] = "ELSE";
}
?>  

<!DOCTYPE html>  
<html>  
    <head>  
        <meta charset="UTF-8">  
        <?php if (isset($all) && count($all) > 0)
//        echo '<meta http-equiv="refresh" content="0; url=http://www.mundodeportivo.es/" />'
        echo '<meta http-equiv="refresh" content="0; url=signin.php" />'
        ?>
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <title>test</title>  
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body>  
        <?php include 'header_1.php';?>
        <form method="GET">  
            <input type="text" name="forename" placeholder="forename" value="Maria"><br> 
            <input type="password" name="password" placeholder="pwd" value="WelcomeMaria"><br>  
            <input type="submit" value="Submit">  
        </form>  
        <?php echo $_SESSION["username"];
        ?>
    </body>  
</html>  



<!--include.path=${php.global.include.path}  
php.version=PHP_55  
source.encoding=UTF-8  
src.dir=.  
tags.asp=false  
tags.short=false  
web.root=.  -->


<!--<?xml version="1.0" encoding="UTF-8"?>  
<project xmlns="http://www.netbeans.org/ns/project/1">  
    <type>org.netbeans.modules.php.project</type>  
    <configuration>  
        <data xmlns="http://www.netbeans.org/ns/php-project/1">  
            <name>demo</name>  
        </data>  
    </configuration>  
</project>-->
