<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Audit Form</title>
    <style>
        label {
            display:none;
        }
        input[type=text], input[type=email], input[type=url], input[type=tel], input[type=file], input[type=textarea], select, textarea {
            background: #ffffff;
            width:450px;
            padding: 12px;
            border: 1px solid #56abed;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 14px;
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
        .danger {
            color: red;
        }
        .con{
            display:flex;
        }
        #country-code{
            flex: 0 1;
            margin-right:5px;
        }
        
    </style>
    <style>
        @media screen and (max-width: 768px) {
             input[type=text], input[type=email], input[type=url], input[type=tel], input[type=file], input[type=textarea], select, textarea {
                width:355px; 
             }
            #phone{
            width:205px;
        }
        }
    </style>
</head>
<body>

<?php
$statusMsg = '';

if(isset($_POST['submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['countrycode'] . $_POST['telephone'];
    $url = $_POST['url'];

    // Email parameters
    $from_email = 'info@acmeinfolabs.com'; // Sender's email address
    $to_email = 'info@acmeinfolabs.com'; // Recipient's email address

    // Email subject
    $subject = 'New Enquiry from SEO Audit Form';

    // Email message
    $message = "Name: $name \n";
    $message .= "Email: $email \n";
    $message .= "Phone: $phone \n";
    $message .= "Website URL: $url \n";

    // Send email
    if(mail($to_email, $subject, $message, "From: $from_email")){
      echo '<script>';
   echo 'window.location.href = "https://www.acmeinfolabs.com/Thank-you";';
   echo '</script>';
   
   
   exit;
    } else {
        $statusMsg = '<p style="color: red;">Sorry, the form submission failed. Please try again later.</p>';
    }
}
?>

<div class="ft_career_frm-1">
    <?php echo $statusMsg; ?>
    <form method="POST" action="#" id="career-form" enctype="multipart/form-data">
        <input type="text" name="name" id="name" placeholder="Your Name" required="required">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email*" required="required">
        <div class="con">
            <input type="text" name="countrycode" id="code" placeholder="Country*" required="required" style="margin-right: 10px;width: 140px;">
            <input type="text" name="telephone" id="telephone" placeholder="Phone Number*" maxlength="10" required="required">
        </div>
        <label>Website URL <span class="danger">Please submit without https:/http</span></label>
        <input id="form_url" type="text" id="url" name="url" placeholder="Please Enter Your Website" pattern="www.+" required="required" data-error="Client Name is required." />
        <div class="g-recaptcha" data-sitekey="6Lc7fcApAAAAALrkeNgA0tgPfDJVkWsWfKmeb-M-"></div>
        <input type="submit" name="submit" id="submit" style="background: linear-gradient(45deg,#404b9a,#90356b);margin:10px 0 20px 0">
    </form>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
document.getElementById('telephone').addEventListener('input', function(event) {
  // Get the input value
  var inputValue = event.target.value;
  
  // Remove any characters that are not digits or the plus sign
  var cleanedValue = inputValue.replace(/[^\d+]/g, '');
  
  // Update the input value
  event.target.value = cleanedValue;
});
</script>
<!--<script>
document.getElementById('code').addEventListener('input', function(event) {
  // Get the input value
  var inputValue = event.target.value;
  
  // Remove any characters that are not digits or the plus sign
  var cleanedValue = inputValue.replace(/[^\d+]/g, '');
  
  // Update the input value
  event.target.value = cleanedValue;
});
</script>-->
</body>
</html>
