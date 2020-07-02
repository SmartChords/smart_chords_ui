<?php
require("../../resources/FlashMessages.php");
if (!session_id()) session_start();
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

if (isset($_POST["submit"])) {
  if (!empty($_FILES["fileToUpload"]["name"])) {
    // Get the path to the file to be uploaded and the basename of that file.
    $upload_file = $_FILES["fileToUpload"]["tmp_name"];
    $target_file = basename($_FILES["fileToUpload"]["name"]);
	
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	
	// Store the filename to a SESSION variable for later retreival.
	// Get the data contents of that file to be written later.
	$_SESSION["uploadFileName"] = $target_file;	
	$fileContents = file_get_contents($upload_file);
	
    // var_dump($_FILES["fileToUpload"]);
    // var_dump($_POST);
    // var_dump($imageFileType);
    $imageInfo = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $allowed = array('image/jpeg', 'image/png', 'image/jpg');
    
    if (!in_array($imageInfo["mime"], $allowed)) {
        $msg->error("Please submit an image with a PNG or JPG file type");
        header('Location: ../index.php');
        exit();
    } else {
      $height = $imageInfo[0];
      $width = $imageInfo[1];
      // Check if image file is a actual image or fake image
      // var_dump($imageInfo);
      if($width > 400 && $height > 500) {	
        // Set the target pathname and filename to upload the input file.
        // Use put_contents to write the file to the uploads directory on the server.
		$previewFile = '../img/uploads/' . $target_file;
		file_put_contents($previewFile, $fileContents);
		        
        header('Location: ../preview.php');
        exit();
        echo "Image is large enough!!";
        $uploadOk = 1;
      } else {
        $msg->error('Please submit an image that is at least size 400x500');
        header('Location: ../index.php');
        exit();
        $uploadOk = 0;
      }
    }
  } else {
    $msg->error('Please upload a file to continue!');
    header('Location: ../index.php');
    exit();
  }
} else {
  $msg->error('System error. Please contact the development team for assistance');
  header('Location: ../index.php');
  exit();
}
?>
