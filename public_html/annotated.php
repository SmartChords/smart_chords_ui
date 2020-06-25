<?php
  require_once("../resources/config.php");

  include('../resources/templates/header.html');
  include('../resources/templates/annotated_navbar.html');
?>
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <h2 class="text-center">Your transcription is complete!</h2>
    <p class="text-center">You can view the image below or download the file for later.</p>
    <div class="row image-row">
      <img width="600" height="900" src="./img/downloads/annotated.png">
    </div>
  </div>
<?php include('../resources/templates/footer.html'); ?>
