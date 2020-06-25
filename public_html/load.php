<?php
  require_once("../resources/config.php");

  include('../resources/templates/header.html');
  include('../resources/templates/navbar.html');
?>
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <div class="loader"></div>
    <div class="h-25 d-inline-block"></div>
    <h2 class="text-center">Loading...</h2>
  </div>
  <div class="col-sm-2"></div>
  <script>setTimeout(function(){ window.location.href = "http://localhost/smart_chords_ui/public_html/annotated.php" }, 3000);</script>
<?php include('../resources/templates/footer.html'); ?>
