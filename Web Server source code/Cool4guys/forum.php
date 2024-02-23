<!DOCTYPE html>
<?php
session_start();

include ("dbFunctions.php");

$query1 = "SELECT username, description FROM forum f INNER JOIN users u ON u.user_id = f.user_id ORDER BY forum_id DESC";

$result1 = mysqli_query($link, $query1) or die(mysqli_error($link));



while($row= mysqli_fetch_array($result1)){
    $arrCategory[] = $row;
}

mysqli_close($link);


$activePage = "forum";
?>
<html>
    <head>
        <style>
            p {
                text-align: center;
            }
        </style>
        <title>XSS Attack Example</title>
    </head>
    <header>
	<?php include("include/navigation.php");?>
    </header>
    <body>
        <br><br/>
        <form method="post" action="out.php">

            <p>Message: <br/>
                <label for="message"></label>
                <textarea name="message" id="message" cols="63" rows="10" required></textarea>
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Post message" />
            </p>
        </form>

    </body>
<body>
        <h2>Comments</h2>
<?php for ($i = 0; $i < count($arrCategory); $i++){
    echo "Username:"; echo $arrCategory[$i]['username']; echo "<br>";
    echo "Description:"; echo $arrCategory[$i]['description']; echo "<br><br/>";
    echo "<hr>";
}

?>
    </body>
	<?php include("include/footer.php");?>
</html>


