<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SmartChords</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div id="main">

      <div class="jumbotron jumbotron-fluid" style="background-image: url('images/music_notes.jpeg')">
        <div class="container">
          <h1 style="color: white;" class="display-4">SmartChords</h1>
        </div>
      </div>
      <div class="container" style="margin-top:30px">

        <div class="row" style="padding-left: 0px;">
          <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
              <li>
                Nav1
              </li>
              <li>
                Nav2
              </li>
              <li>
                Nav3
              </li>
              <!-- <?php include('nav.php'); ?> -->
            </ul>
          </nav>
          <div class="col-sm-8">
            <h2 class="text-center">This is the Home Page</h2>
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
        </div>
      </div>
    </div>
    <div id="footer" class="text-center">
    </div>
  </body>
</html>
