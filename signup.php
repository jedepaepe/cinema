<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

$DBname = "cinema";
$DBusername ="root";
$DBpassword= "";
$DBservername="localhost";
$dsn = "mysql:host=$DBservername;dbname=$DBname";
try {
    
$DBconn = new PDO($dsn, $DBusername, $DBpassword);
if(isset($_REQUEST['username']) && !empty($_REQUEST['username']) && isset($_REQUEST['password']) && !empty($_REQUEST['password']) && isset($_REQUEST['email']) && !empty($_REQUEST['email']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email  = $_REQUEST['email'];
    
    
    $sql = 'INSERT INTO loginfo (id,nickname,password,email) VALUES (NULL,\"'.$username.'\",\"'.$password.'\",\"'.$email.'\")' ;
    $DBconn->query();
}
        

} catch (Exception $ex) {
    echo $ex;
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main SIGN UP</h1>
        <table class="form" method="post">
            <tr>
                <td>
                    Username: 
                </td>
                <td>
                    <input type="text" name="username" value="testusername1" placeholder="enter your username">
                </td>
            </tr>
            <tr>
                <td>
                    Password: 
                </td>
                <td>
                    <input type="password" name="password" value="passwordtest1" placeholder="enter your password">
                </td>
            </tr>
            <tr>
                <td>
                    Email: 
                </td>
                <td>
                    <input type="email" name="email" value="emailtest1@gmail.com" placeholder="enter your email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Sign Up">
                </td>
            </tr>
<!--            <tr>
                <td>
                    <input type="" name="password" value="" placeholder="enter your password">
                </td>
            </tr>-->
        </table>
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
