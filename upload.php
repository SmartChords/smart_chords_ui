<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// var_dump($target_file);
// var_dump($imageFileType);
$imageInfo = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$allowed = array('image/jpeg', 'image/png', 'image/jpg');
if(isset($_POST["submit"])) {
  if (!in_array($imageInfo["mime"], $allowed)) {
      echo 'error - NOT CORRECT FILE TYPE';
  } else {
    $height = $imageInfo[0];
    $width = $imageInfo[1];
  // Check if image file is a actual image or fake image
    var_dump($imageInfo);
    if($width > 400 && $height > 500) {
      header('Location: preview.php');
      exit();
      echo "Image is large enough!!";
      $uploadOk = 1;
    } else {
      header('Location: index.php');
      exit();
      echo "image too small";
      $uploadOk = 0;
    }
  }
} else {
  echo "SOMETHING FOR REALZ IS WRONG";
}
?>
