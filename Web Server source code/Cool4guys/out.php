<!DOCTYPE html>
<?php
session_start();
$id = $_SESSION['user_id'];
include("dbFunctions.php");

header("X-XSS-Protection: 0");
$desc = $_POST['message'];
//$desc = trim($_POST['message']);


	// sanitize message input
//$desc = stripslashes($desc);
//$desc = htmlspectalchars($desc);
//$desc = mysql_real_escape_string($desc); 


$query = "INSERT INTO forum(description, user_id) VALUES('$desc','$id')";
 
$result = mysqli_query($link, $query) or die('Error querying database');

mysqli_close($link);


header("location: forum.php");
?>



<html>
    <head>
        <?php include("include/navigation.php"); ?>
        
        <title>XSS Attack Example</title>
    </head>
    <body>


    </body>


</html>
