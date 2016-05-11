<?php
$img_file = $_FILES["img_file"];
$folderName = "images/";

// Generate a unique name for the image
// to prevent overwriting the existing image
$filePath = $folderName. rand(10000, 990000). '_'. time().'.';

if ( move_uploaded_file( $_FILES["img_file"]["tmp_name"], $filePath)) {
    $sql = "INSERT INTO demo VALUES (NULL, '".prepare_input($filePath) ."')";
    $msg = ( mysql_query($sql))  ? successMessage("Uploaded and saved to database.") : errorMessage( "Problem in saving to database");
  } else {
    $msg = errorMessage( "Problem in uploading file");
  }
?>
