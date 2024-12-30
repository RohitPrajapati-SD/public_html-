<style>
   label {
   display:none;
   }
   input[type=text],input[type=email],input[type=file], input[type=textarea],select, textarea {
   background: #dbdbdb38;
   width: 100%;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
   margin-top: 6px;
   margin-bottom: 16px;
   resize: vertical;
   }
   input[type=submit] {
   background-color: #04AA6D;
   color: white;
   padding: 12px 20px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   }
   input[type=submit]:hover {
   background-color: #45a049;
   }
   .danger{
    color: red;}
</style>
<?php
   if(isset($_POST['submit'])){
   // Get the submitted form data
   $postData = $_POST;
   
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $url = $_POST['url'];
   $requirement = $_POST['requirement'];
   
   
   
       //$from_email         = 'info@acmeinfolabs.com,dd@acmeinfolabs.com'; //from mail, sender email address
   $from_email         = 'info@acmeinfolabs.com';
   $recipient_email    = 'info@acmeinfolabs.com'; //recipient email address
   // $recipient_email    = 'kumar.amit.100894@gmail.com';
   //Load POST data from HTML form
   $sender_name    = $_POST["name"]; //sender name
   $reply_to_email = $email; //sender email, it will be used in "reply-to" header
   $subject        = 'New Enquiry from Contact Us Form' ; //subject for the email
   $message = "";
   $message .= "Name : $name \r\n";
   $message .= "Phone Number : $phone \r\n";
   $message .= "Website URL : $url \r\n";
   $message .= "Email : $email \r\n";
   $message .= "Requirement : $requirement \r\n";
   
   
   
   
   /*Always remember to validate the form fields like this
   if(strlen($sender_name)<1)
   {
   die('Name is too short or empty!');
   }
   */
   
   //Get uploaded file data using $_FILES array
   $tmp_name    = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
   $name        = $_FILES['attachment']['name'];  // get the name of the file
   $size        = $_FILES['attachment']['size'];  // get size of the file for size validation
   $type        = $_FILES['attachment']['type'];  // get type of the file
   $error       = $_FILES['attachment']['error']; // get the error (if any)
   
   //validate form field for attaching the file
   if($file_error > 0)
   {
   die('Upload error or No files uploaded');
   }
   
   //read from the uploaded file & base64_encode content
   $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file
   $content = fread($handle, $size); // reading the file
   fclose($handle);                  // close upon completion
   
   $encoded_content = chunk_split(base64_encode($content));
   
   $boundary = md5("random"); // define boundary with a md5 hashed value
   
   //header
   $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
   $headers .= "From:".$from_email."\r\n"; // Sender Email
   $headers .= "Reply-To: ".$reply_to_email."\r\n";// Email address to reach back
   $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
   $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
   $headers.="X-Mailer: smail-PHP ".phpversion()."";    
   //plain text
   $body = "--$boundary\r\n";
   $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
   $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
   $body .= chunk_split(base64_encode($message));
   
   //attachment
   $body .= "--$boundary\r\n";
   $body .="Content-Type: text/html; name=".$name."\r\n";
   $body .="Content-Disposition: attachment; filename=".$name."\r\n";
   $body .="Content-Transfer-Encoding: base64\r\n";
   $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
   $body .= $encoded_content; // Attaching the encoded file with email
   
   $sentMailResult = mail($recipient_email,  $subject, $body, $headers);
   
   if($sentMailResult )
   {
   echo '<script>';
   echo 'window.location.href = "https://www.acmeinfolabs.com/thank-you";';
   echo '</script>';
   
   
   exit;
   // $statusMsg = "Request Sent Successfully.";
   //  unlink($name); // delete the file after attachment sent.
   }
   else
   {
   echo "Sorry but the email could not be sent. Please go back and try again!/>";
   //  $statusMsg = "Sorry but the email could not be sent.
   //               Please go back and try again!";
   }
   
   }
   ?>
   
<div class="ft_career_frm-1">
   <p class="color:green; background-color:yellow;padding: 5px;"><?php echo $statusMsg?></p>
   <form method="POST" action="#" id="career-form" enctype="multipart/form-data">
      <div style="">
         <h3 style="margin: auto;"><b>Share your Requirement with Us</b></h3>
         <p style="line-height: 1.3;">Thanks for your interest! Please fill the information below to Connect with us</p>
      </div>
      <input type="text" name="name" id="name" placeholder="Your Name" required="required">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email*" required="required">
      <label for="mobile">Mobile Number</label>
      <input type="text" name="phone" id="phone" placeholder="Phone Number*" required="required">

      <label>Website URL <span class="danger">Please submit without https:/http</span></label>
      <input id="form_url" type="text" id="url "name="url" placeholder="Please Enter Your Website"  pattern="www.+" required="required" data-error="Client Name is required." />
        
      <label for="fname">Requirement</label>
      <input type="textarea"  name="requirement" id="requirement" placeholder="Requirement" required="required" style="height: 200px;">
      <label for="fname">Upload Your File</label>
      <!-- <input type="file" name="attachment" id="attachment" accept=".pdf, .doc," >-->
      <input type="submit" name="submit" id="submit" style="background: linear-gradient(45deg,#404b9a,#90356b);">
   </form>
</div>
 
<script type="text/javascript">                       
   /*
   
   function geterromsg(msg)
   {
    var _errorHtml = '<p class="error_text">'+ msg +'</p>';
    
    return _errorHtml;
   }
   
   function getsuccessmsg(msg)
   {
    var _errorHtml = '<p class="success_text">'+ msg +'</p>';
    
    return _errorHtml;
   }*/
</script>