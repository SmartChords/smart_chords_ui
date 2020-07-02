<?php
  require_once("../resources/config.php");

  include('../resources/templates/header.html');
  include('../resources/templates/navbar.html');
?>

  <div class="col-sm-8">
    <p><h2 class="text-center">Help/Frequently Asked Questions</h2></p>
	<p>&nbsp;</p>
    <ul>
	
      <li><b>Q:&nbsp;&nbsp;What types of input files are supported?</b>
	  <br/><br/><b>A:</b><i>&nbsp;&nbsp;At this time the only file types SmartChords supports are: JPEG, PNG and GIF.</i>
	  </li><br/>
	
      <li><b>Q:&nbsp;&nbsp;Is there a specific size the file needs to be?</b>
	  <br/><br/><b>A:</b><i>&nbsp;&nbsp;Yes.  Your file must meet the minimum size of 400 pixels in width and 500 pixels in heigth.</i>
	  </li><br/>
	
      <li><b>Q:&nbsp;&nbsp;Can I print or save the output image generated?</b>
	  <br/><br/><b>A:</b><i>&nbsp;&nbsp;Yes.  You can right click on the generated image and choose <u>save image as</u> 
	  and select where to save the file.  As well you can select the download option in the navigation menu.</i>
	  </li><br/>
	
      <li><b>Q:&nbsp;&nbsp;Can I email myself the output image generated?</b>
	  <br/><br/><b>A:</b><i>&nbsp;&nbsp;No.  That is not an option available today but will be in a future release.  Today 
	  you can save the file and email the saved file.</i>
	  </li><br/>
	  
    </ul>
  </div>
  <div class="col-sm-1"></div>
  
<?php include('../resources/templates/footer.html'); ?>