<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SmartChords</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
            <div class="row">
              <h3 class="text-center">Preview</h3>
            </div>
            <div class="row">
              <p class="text-center">Would you like to transcribe this music?</p>
            </div>
            <div class="row">
              <a href="" type="button" class="btn btn-sm btn-secondary">Submit</button>
              <a href="index.php" type="button" class="btn btn-sm btn-light">Cancel</button>
            </div>
            <img src="images/preview.png">
          </div>
        </div>
      </div>
    </div>
    <?php include('includes/footer.html'); ?>
  </body>
</html>
