<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $Website = $_POST['Website'];
  

  try{
    $mail->isSMTP();
    $mail->Host = 'smtppro.zoho.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'support@acmeinfolabs.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Sup@765@345@#'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('support@acmeinfolabs.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('udai@acmeinfolabs.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)


    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Query form BEST SEO SERVICES IN INDIA/LANDING PAGE)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Website : $Website</h3>";

    $mail->send();
    header("Location: https://www.acmeinfolabs.com/thank-you");
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>

<?php
// Email mask
if(preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0)
$errEmail = '<p class="errText">Email must comply with this mask: chars(.chars)@chars(.chars).chars(2-4)</p>';

// Phone mask             1-800-999-9999     
if(preg_match("/^d{1}-d{3}-d{3}-d{4}$/", $_POST["phone"]) === 0)
$errPhone = '<p class="errText">Phone must comply with this mask: 1-333-333-4444</p>';

// Full Name must contain letters, dashes and spaces only and must start with upper case letter.
if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0)
$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash</p>';
?>
      
