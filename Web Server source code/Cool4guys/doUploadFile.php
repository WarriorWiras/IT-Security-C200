<?php

if(isset($_POST["Upload"])){
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["FileToUpload"]["name"]);
    $file_name = $_FILES["FileToUpload"]["name"];
    $file_ext = substr($file_name, strrpos($file_name, '.') + 1);
    $file_size = $_FILES["FIleToUpload"]["size"];

    //if (($file_ext == "jpg" || $file_ext == "JPG" || $file_ext == "JPEG" || $file_ext == "jpeg" || $file_ext == "png" || $file_ext == "PNG") && ($file_size < 100000)){

	    if(!move_uploaded_file($_FILES['FileToUpload']['tmp_name'], $target_file)){
		echo "FIle Unable to upload";
	    }
	    else{
		echo $target_file . "FIle Upload successful";
	    }
//}
//else{
	 //echo "File Unable to Upload, please upload an image file";
//}
}

