<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SmartChords</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="main">
      <?php include('includes/header.html'); ?>

      <div class="container" style="margin-top:30px">
        <div class="row" style="padding-left: 0px;">
          <?php include('includes/navbar.html'); ?>
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <h2 class="text-center">Welcome to SmartChords!</h2>
            <p class="text-center">Short explanation here on what to do </p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <label for="fileToUpload">Select image to upload:</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="fileToUpload">
                  <label class="custom-file-label" for="fileToUpload">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
              <!-- <div class="form-group">
                <div class="form-control-file">
                  <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-sm btn-secondary">Submit</button>
              </div> -->
            </form>
          </div>
          <!-- <div class="col-sm-2"></div> -->
        </div>
      </div>
    </div>
    <?php include('includes/footer.html'); ?>
  </body>
</html>
