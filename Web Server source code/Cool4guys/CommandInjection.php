<?php 
$activePage = "DisplayFile";
session_start();
?>
    <header>
	<?php include("include/navigation.php");?>
    </header>
<div class="maincontent">
		<h2>Display log file</h2>
		<form name="cat" action="shellExecTest.php" method="post">
			<p>
				Specify path and log file:
				<input type="text" name="file" size="30">
				<input type="submit" name="Submit" value="Submit">
			</p>
</form>
</div>

	<?php include("include/footer.php");?>
