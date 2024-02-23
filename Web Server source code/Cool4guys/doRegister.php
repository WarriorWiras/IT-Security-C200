<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "dbFunctions.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users
          (username, password)
          VALUES
          ('$username', '$password')";

$status = mysqli_query($link, $query);

if ($status) {
    $message = "<p>Your new account has been successfully created. 
                You can return to <a href='index.php'>homepage</a>.</p>";
}
else {
    $message = "Account creation failed";
}

mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <h2>Account Registration</h2>
    </head>
    <body>
        <h3>Cool4Guys - Register</h3>
        <?php
        echo $message;
        ?>
    </body>
</html>

