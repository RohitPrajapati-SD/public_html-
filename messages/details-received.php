<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You</title>
    <meta name="description" content="thank you page" />
    <!-- head source -->
    <?php include('../parts/header/head-source.php'); ?>

</head>

<!-- header -->
<?php include('../parts/header/header.php'); ?>

<body>
    <!--[iflt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="ht-60"></div>

    <section class="inr-pg-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="ht-60 d_none"></div>
                <div class="ht-60 d_none"></div>
                    <?php
    if (isset($_POST['uEmail'])) {
                 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@acmeinfolabs.com";
    $email_subject = "New SEO audit details from Acme Infolabs";

    function problem($error)
      {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
            }

        // validation expected data exists
        if (
            !isset($_POST['uName']) ||
            !isset($_POST['uEmail']) ||
            !isset($_POST['uPhone']) ||
            !isset($_POST['uWeb'])
            ) {
            problem('We are sorry, but there appears to be a problem with the form you submitted.');
                              }

            $uName = $_POST['uName']; // required
            $uEmail = $_POST['uEmail'];
            $uPhone = $_POST['uPhone'];
            $uWeb = $_POST['uWeb'];

            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if (!preg_match($email_exp, $uEmail)) {
                $error_message .= 'The Email address you entered does not appear to be valid.<br>';
                }

                $string_exp = "/^[A-Za-z .'-]+$/";

                if (!preg_match($string_exp, $uName)) {
                    $error_message .= 'The Name you entered does not appear to be valid.<br>';
                        }

                if (strlen($error_message) > 0) {
                    problem($error_message);
                        }

                $email_message = "Form details below.\n\n";

                function clean_string($string)
                        {
                            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                            return str_replace($bad, "", $string);
                        }

                              $email_message .= "Name: " . clean_string($uName) . "\n";
                              $email_message .= "Email: " . clean_string($uEmail) . "\n";
                              $email_message .= "Phone number: " . clean_string($uPhone) . "\n";
                              $email_message .= "Website URL: " . clean_string($uWeb) . "\n";

                              // create email headers
                              $headers = 'From: ' . $uEmail . "\r\n" .
                                  'Reply-To: ' . $uEmail . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion();
                              @mail($email_to, $email_subject, $email_message, $headers);
                          ?>

                          <!-- include your success message below -->
                        <h2>Thank you for submitting your website for Audit</h2>
                        <h3>One of our consultants would get in touch with you soon.</h3>

                          <?php
                            }
                          ?>
                </div>
            </div>
        </div>
    </section>

    <div class="ht-60"></div>

    <!-- footer -->
    <?php include('../parts/footer/footer.php'); ?>

</body>

</html>