<?php
  require_once("../resources/config.php");
  require("../resources/FlashMessages.php");
  include('../resources/templates/header.html');
  include('../resources/templates/navbar.html');
  if (!session_id()) session_start();
?>
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <h2 class="text-center">Contact Us</h2>
    <p class="text-center">Short explanation here on what to do</p>
    <?php
    $msg = new \Plasticbrain\FlashMessages\FlashMessages();
    if(isset($_POST['submit'])){
        // Get the submitted form data
        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Check whether submitted data is not empty
        if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg->error('Please enter your valid email.');
            } else {
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
                    $msg->success('Your contact request has been submitted successfully !');

                }else{
                    $msg->error('Your contact request submission failed, please try again.');
                }
            }
        }else{
          $msg->error('Please fill all the fields.');
        }
    }
    ?>
    <div class="contactFrm">
      <?php echo $msg->display(); ?>
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
<?php include('../resources/templates/footer.html'); ?>
