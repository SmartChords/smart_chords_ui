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
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Short explanation here on what to do</p>
            <?php
            $statusMsg = '';
            $msgClass = '';
            if(isset($_POST['submit'])){
                // Get the submitted form data
                $email = $_POST['email'];
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                // Check whether submitted data is not empty
                if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

                    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                        $statusMsg = 'Please enter your valid email.';
                        $msgClass = 'errordiv';
                    }else{
                        // Recipient email
                        $toEmail = 'angroover@gmail';
                        $emailSubject = 'Contact Request Submitted by '.$name;
                        $htmlContent = '<h2>Contact Request Submitted</h2>
                            <h4>Name</h4><p>'.$name.'</p>
                            <h4>Email</h4><p>'.$email.'</p>
                            <h4>Subject</h4><p>'.$subject.'</p>
                            <h4>Message</h4><p>'.$message.'</p>';

                        // Set content-type header for sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        // Additional headers
                        $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

                        // Send email
                        if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                            $statusMsg = 'Your contact request has been submitted successfully !';
                            $msgClass = 'succdiv';
                        }else{
                            $statusMsg = 'Your contact request submission failed, please try again.';
                            $msgClass = 'errordiv';
                        }
                    }
                }else{
                    $statusMsg = 'Please fill all the fields.';
                    $msgClass = 'errordiv';
                }
            }
            ?>
            <div class="contactFrm">
              <?php if(!empty($statusMsg)){ ?>
                  <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
              <?php } ?>
              <form action="" method="post">
                  <h4>Name</h4>
                  <input type="text" name="name" placeholder="Your Name" required="">
                  <h4>Email </h4>
                  <input type="email" name="email" placeholder="email@example.com" required="">
                  <h4>Subject</h4>
                  <input type="text" name="subject" placeholder="Write subject" required="">
                  <h4>Message</h4>
                  <textarea name="message" placeholder="Write your message here" required=""> </textarea>
                  <input type="submit" name="submit" value="Submit">
                  <div class="clear"> </div>
              </form>
            </div>
          </div>
          <!-- <div class="col-sm-2"></div> -->
        </div>
      </div>
    </div>
    <?php include('includes/footer.html'); ?>
  </body>
</html>
