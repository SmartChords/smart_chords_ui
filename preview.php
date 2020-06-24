<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SmartChords</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="main">
      <?php include('includes/header.html'); ?>

      <div class="container" style="margin-top:30px">
        <div class="row" style="padding-left: 0px;">
          <?php include('includes/navbar.html'); ?>
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
            <div class="row">
              <img src="images/preview.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('includes/footer.html'); ?>
  </body>
</html>
