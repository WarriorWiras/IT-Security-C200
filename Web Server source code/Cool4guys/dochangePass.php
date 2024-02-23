<!DOCTYPE html>
<?php
session_start();
include("dbFunctions.php");

$str1 = "AdminIsFalse";
$str1 = base64_encode($str1);
$str2 = "AdminIsRight";
$str2 = base64_encode($str2);
$new = " ";
$new2 = " ";


//GET THE USER THAT WANTS TO CHANGE PASSWORD
	if(isset($_POST['Submit']))
	{
 		$id = $_SESSION['user_id'];
 		$pass = $_SESSION['password'];
 		$newpassword=($_POST['newpass']);
		$query = "SELECT password FROM users where user_id='$id'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$num=mysqli_num_rows($result);



		if ($username == "admin" ) {
    			session_id($str2);
    			base64_encode(session_id());
    			$new = session_id();
		} else {
    			session_id($str1);
    			base64_encode(session_id());
    			$new2 = session_id();
		}


//CHECK IF THERE IS SUCH A USER IN THE DATABASE with num
	if($num == 1)
	{
    		if ($pass == $newpassword){
	//CHECK IF THE PASSWORD IS THE SAME OR NOT
        		$msg1 = "New password cannot be the same as the old password.</br>Update Password failed.";
    		}
    		else{ 
    			$link=mysqli_query($link,"update users set password='$newpassword' where user_id='$id'");
    			$msg1="Password Changed Successfully !";
			
    		}
	//END OF CHECK PASSWORD
	}
	else
	{
    		$msg1="No record in database.</br>Update Password Failed.";
	}
	}
//END OF USER AND PRESENT THE RESULT 
	?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <header>
	<?php include("include/navigation.php");?>
    </header>
    <body>
	<div class="maincontent">
	</br></br>
	<?php
        echo $msg1;
        var_dump(isset($str));
	header( "refresh:5;url=index.php" );
        ?>
	</div>
    </body>
</html>

