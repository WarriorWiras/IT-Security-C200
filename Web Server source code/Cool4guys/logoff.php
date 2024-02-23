<?php
session_start();
if (isset($_SESSION['user_id'])) {
    session_destroy();
    $_SESSION = array();
}
$message = "You have logged out.";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cool4Guys logout</title>
    </head>
    <header>
	<?php include("include/navigation.php");?>
    </header>
    <body>
	</br></br>
        <h3>Cool4Guys - Logout</h3>
        <?php
        echo $message;
	header( "refresh:5;url=index.php" );
        ?>
    </body>
	<?php include("include/footer.php");?>
</html>
