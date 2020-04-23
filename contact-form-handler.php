<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $message = $_Post['message'];



  $email_from = 'portfolio@bellamendoza.edu'
  $email_subject = "New Message From Portfolio"

  $email_body = "Message from $name \n".
                  "$visitor_email.\n".
                    "Message: $message.\n";

  $to = "bellamendoza@berkeley.edu";
  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: contactForm.html");

?>
