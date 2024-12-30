                        <?php
                          if (isset($_POST['uEmail'])) {
                          
                              // EDIT THE 2 LINES BELOW AS REQUIRED
                              $email_to = "aftab.acmeinfolabs@gmail.com";
                              $email_subject = "New form submissions";

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
                                  !isset($_POST['uEmail']) ||
                                  !isset($_POST['uFName']) ||
                                  !isset($_POST['uLName']) ||
                                  !isset($_POST['uPhone']) ||
                                  !isset($_POST['uCompany']) ||
                                  !isset($_POST['uMessage']) ||
                                  !isset($_POST['uPackage'])
                              ) {
                                problem('We are sorry, but there appears to be a problem with the form you submitted.');
                              }

                              $fname = $_POST['uFName']; // required
                              $lname = $_POST['uLName'];
                              $phone = $_POST['uPhone'];
                              $country = $_POST['uCompany'];
                              $email = $_POST['uEmail']; // required
                              $message = $_POST['uMessage']; // required
                              $service = $_POST['uPackage'];

                              $error_message = "";
                              $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                              if (!preg_match($email_exp, $email)) {
                                  $error_message .= 'The Email address you entered does not appear to be valid.<br>';
                              }

                              $string_exp = "/^[A-Za-z .'-]+$/";

                              if (!preg_match($string_exp, $fname)) {
                                  $error_message .= 'The Name you entered does not appear to be valid.<br>';
                              }

                              if (strlen($message) < 2) {
                                  $error_message .= 'The Message you entered do not appear to be valid.<br>';
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

                              $email_message .= "First name: " . clean_string($fname) . "\n";
                              $email_message .= "Last name: " . clean_string($lname) . "\n";
                              $email_message .= "Email: " . clean_string($email) . "\n";
                              $email_message .= "Phone Number: " . clean_string($phone) . "\n";
                              $email_message .= "Country: " . clean_string($country) . "\n";
                              $email_message .= "Message: " . clean_string($message) . "\n";
                              $email_message .= "Service: " . clean_string($service) . "\n";

                              // create email headers
                              $headers = 'From: ' . $email . "\r\n" .
                                  'Reply-To: ' . $email . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion();
                              @mail($email_to, $email_subject, $email_message, $headers);
                          ?>

                          <!-- include your success message below -->

                          Thank you for contacting us. We will be in touch with you very soon.

                          <?php
                            }
                          ?>