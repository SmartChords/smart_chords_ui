<?php
  require_once("../resources/config.php");

  include('../resources/templates/header.html');
  include('../resources/templates/navbar.html');
?>
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <h2 class="text-center">Welcome to SmartChords!</h2>
    <p class="text-center">Short explanation here on what to do </p>
    <form action="php/upload.php" method="post" enctype="multipart/form-data">
      <label for="fileToUpload">Select image to upload:</label>
      <div class="input-group mb-3">
        <div class="custom-file" id="file-js">
          <input type="file" name="fileToUpload" class="custom-file-input" id="fileToUpload">
          <label class="text-nowrap custom-file-label" for="inputGroupFile02" id="fileName" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>
        <div class="input-group-append">
          <input type="submit" class="input-group-text" name="submit" value="Upload" id="uploadButton">
        </div>
      </div>
      <script src="../public_html/js/script.js"></script>
    </form>
  </div>

<?php include('../resources/templates/footer.html'); ?>
