<!DOCTYPE html>
<?php 
$activePage = "login";
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login Page</title>
        <style>
            fieldset{
                width: 500px;  
                margin:  0px auto;
            }
            
            h3{
                text-align: center;
            }
        </style>
    </head>
    <header>
	<?php include("include/navigation.php");?>
    </header>
    <body>
        <h3>Cool4Guys - Login</h3>
        <!-- Username and Password will be posted to doLogin.php -->
        <form method="post" action="doLogin.php">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input id="username" type="text" name="username"/></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input id="password" type="password" name="password"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" Value="Login"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
	<?php include("include/footer.php");?>
</html>

