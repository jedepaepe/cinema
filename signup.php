<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main SIGN UP</h1>
        <table class="form">
            <tr>
                <td>
                    Username: 
                </td>
                <td>
                    <input type="text" name="username" value="" placeholder="enter your username">
                </td>
            </tr>
            <tr>
                <td>
                    Password: 
                </td>
                <td>
                    <input type="password" name="password" value="" placeholder="enter your password">
                </td>
            </tr>
            <tr>
                <td>
                    Email: 
                </td>
                <td>
                    <input type="email" name="email" value="" placeholder="enter your email">
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
