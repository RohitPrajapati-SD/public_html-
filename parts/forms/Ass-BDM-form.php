        <?php


                if(isset($_POST['submit'])){
				 // Get the submitted form data
                $postData = $_POST;

                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $experience = $_POST['experience'];
                $currentctc = $_POST['currentctc'];
				$expectedctc = $_POST['expectedctc'];
				$notice_period = $_POST['notice_period'];
                $jobtitle = $_POST['jobtitle'];
				$comment = $_POST['message'];
				
                    //$from_email         = 'hr@acmeinfolabs.com,dd@acmeinfolabs.com'; //from mail, sender email address
					$from_email         = 'hr@acmeinfolabs.com';
                    $recipient_email    = 'hr@acmeinfolabs.com'; //recipient email address
     
					//Load POST data from HTML form
					$sender_name    = $_POST["name"]; //sender name
					$reply_to_email = $email; //sender email, it will be used in "reply-to" header
					$subject        = 'Career form'; //subject for the email
					$message = "";
					$message .= "Name : $name \r\n";
					$message .= "Phone Number : $phone \r\n";
					$message .= "Email : $email \r\n";
					$message .= "Experience : $experience \r\n";
					$message .= "Current CTC :  $currentctc \r\n";
					$message .= "Expected CTC : $expectedctc \r\n";
					$message .= "Notice Period : $notice_period \r\n";
                    $message .= "jobtitle : $jobtitle \r\n";
					$message .= "Message : $message \r\n";

 
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
    $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
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
     
    $sentMailResult = mail($recipient_email, $subject, $body, $headers);
 
    if($sentMailResult )
    {
       $statusMsg = "Request Sent Successfully.";
       unlink($name); // delete the file after attachment sent.
    }
    else
    {
       $statusMsg = "Sorry but the email could not be sent.
                    Please go back and try again!";
    }

	 }
         ?>
                          <div class="ft_career_frm">
                    
                        <p class="color:green; background-color:yellow;padding: 5px;"><?php echo $statusMsg?></p>

                         <form method="POST" action="#" id="career-form" enctype="multipart/form-data">
                         <div style="background: linear-gradient(45deg,#404b9a,#90356bdb);margin-top: -22px; margin-right: -15px;margin-left: -15px;">
                         <h5 style="text-align: center;color:white;">Send your Resume Now</h5>
                         <p style="text-align: center;margin-top:-20px;color:white;">Make a start to an incredible career</p> 
                         </div>
                        
                             <table>
                                 <tr>
                                     <td><label><input type="text" name="name" id="name" placeholder="Your Name" required="required"></label></td>
                                    <td style="width: 51%;"><label><input type="email" id="email" name="email" placeholder="Your Email*" required="required"></label></td>
                                 </tr>
                                 <tr>
                                     <td><label><input type="text" name="phone" id="phone" placeholder="Phone Number*" required="required"></label></td>
                                     <td><label><input type="text" name="experience" id="experience" placeholder="Experience" required="required"></label></td>
                                 </tr>

                                  <tr>
                                     <td><label><input type="text" name="currentctc" id="currentctc" placeholder="Current CTC" required="required"></label></td>
                                     <td><label><input type="text" name="expectedctc" id="expectedctc" placeholder="Expected CTC" required="required"></label></td>
                                 </tr>
                                 <tr>
                                     <td><label><select name="notice_period" id="notice_period" required="required">
                                        <option value="">Notice Period</option>
                                         <option value="Immediate joiner">Immediate joiner</option>
                                        <option value="15 days">15 Days</option>
                                        <option value="1 month">1 Month</option>
                                        <option value="2 month">2 Month</option>
                                        <option value="3 month">3 Month</option>
                                        <option value="4 month">4 Month</option>
                                        <option value="5 month">5 Month</option>
                                        <option value="6 month">6 Month</option>
                                        </select>
                                        </label></td>

                                     <td><label><select name="jobtitle" id="jobtitle" required="required">
                                        <option value="">Job Title</option>
                                        <option value="seo executive">Seo executive</option>
                                        <option value="php developer">Php Developer</option>
                                        <option value="tele marketing executive">Tele Marketing Executive</option>
                                        <option value="content writer">Content Writer</option>
                                        <option value="inside sales executive">Inside Sales Executive</option>
                                        <option value="web Designer">Web Designer</option>
                                        <option value="smo designer">Smo Designer</option>
                                        <option value="hr executive">Hr Executive</option>
                                        <option value="project cordinater">Project Coordinator</option>
                                        <option value="5 month">Email Marketing</option>
                                        <option value="business development manager">Business Development Manager</option>
                                         <option value="asst business development manager">Asst-Business Development Manager</option>
                                          
                                        </select>
                                        </label></td>
                                 </tr>
                                 <tr>
                                 <td><label><input type="file" name="attachment" id="attachment" accept=".pdf, .doc," required="required"></label></td>
                                 </tr>
                                 <tr>
                                 <td colspan="2"><textarea rows="4" cols="50" name="message" form="usrform" style="height:60px;" placeholder="Why should we hire you..."></textarea></td>
                                 </tr>
                                 <tr>
                                     <td colspan="2"><input type="submit" name="submit" id="submit" style="background: linear-gradient(45deg,#404b9a,#90356b);"></td>
                                 </tr>
                             </table>
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