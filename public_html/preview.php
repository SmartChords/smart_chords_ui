<?php
  require_once("../resources/config.php");

  if (!session_id()) session_start();

  include('../resources/templates/header.html');
  include('../resources/templates/navbar.html');
?>
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <h2 class="text-center">Preview</h2>
    <div class="row button-row">
      <span class="preview-text">Would you like to transcribe this music?</span>
      <!-- add form here with hidden input fields with image data and submit to send data to ML model.  -->
      <span class="buttons-list">
        <a href="load.php" type="button" class="btn btn-sm btn-secondary">Submit</a>
        <a href="index.php" type="button" class="btn btn-sm btn-light">Cancel</a>
      </span>
    </div>

    <div class="row image-row">
      <!-- Get the currently stored filename to display to the user for preview. -->
      <img src="<?php echo './img/uploads/' . $_SESSION['uploadFileName']; ?>"
    </div>
  </div>
<?php include('../resources/templates/footer.html'); ?>
