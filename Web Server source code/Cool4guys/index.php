<!DOCTYPE html>
<?php 
$activePage = "index";
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cool4Guys Game Development Company</title>
    </head>
    <header>
	<?php include("include/navigation.php");?>
    </header>
    <body>
        <div class="maincontent">
	<h1>Newest Releases</h1>
	<h2>E4G</h2>

	<p>
		The newest addition to our gaming console line the E4G, made with our own secret cutting edge technology GPA (Games Perfect Augment),is here to make a 			statement in 2021. 
	</p>
	<p>
		Coming out in 2021 May 25</br>
		Price Tag: $888</br>
		Preorder now!
	</p>
	</br></br>
        
<?php//WEB EXPLOIT FOR LOCAL FILE INTRUSION ?>
        <form method="get">
           <h1>Older Releases</h1>
                <select name="consoles" id="patches">
                  <option value="D4G_console">D4G</option>
                  <option value="C4G_console">C4G</option>
                  <option value="B4G_console">B4G</option>
                  <option value="A4G_console">A4G</option>
                </select> 
                <input type="submit">
        </form>
        </div>
        
        
        
        
<?php
// GET THE CONSOLE DETAILS FROM THE WEB SERVER (LOCAL FILE INTRUSTION VULNERABLE CODE)
	$ext = isset($_GET['ext']) ? $_GET['ext'] : ".php";
	if (isset($_GET['consoles'])) {
		if (strpos($_GET['consoles'], 'console') !== false){
			$page = str_replace("../", "", $_GET['consoles']);
			//$page = $_GET['patches'];
			include ($page . $ext);
		} else {
			echo "ERROR, only console files allowed.";
		}	
    	} 
?>


<?php if (isset($_SESSION['user_id'])) { ?>
<?php
include("dbFunctions.php");

            $query2 = "SELECT * FROM products";
            // To secure, use mysqli_escape_string or prepared statements

            $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));

            while ($row2 = mysqli_fetch_assoc($result2)) {
                $arrProducts[] = $row2;
            }


mysqli_close($link);
?>
            <table border='1' class='productTable'>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Discount</th>
                </tr>
                <?php 
                    for ($i = 0; $i < count($arrProducts); $i++) {
                    ?>
                <tr>
                    <td><?php echo $arrProducts[$i]['product_name']; ?> </td>
                    <td><?php echo $arrProducts[$i]['product_price']; ?> </td>
                    <td><?php echo $arrProducts[$i]['product_desc']; ?> </td>
                    <td><?php echo $arrProducts[$i]['discount']; ?> </td>
                </tr>
                <?php } ?>
            </table>
        <?php } ?>

    </body>
	<?php include("include/footer.php");?>
</html>
