<?php
$activePage = "UploadFile";
session_start();
?>
<?php include("include/navigation.php");?>

<html>
    <body>
<div class="maincontent">
        <form action="doUploadFile.php" method="post" enctype="multipart/form-data">
            Select a Newest File to upload:
            <input type="file" name="FileToUpload" id="FileToUpload">
            <input type="submit" value="Upload" name="Upload">
        </form>
    </body>
</div>
</html>

<?php include("include/footer.php");?>
