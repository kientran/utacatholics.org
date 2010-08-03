<?php
  require_once('./php/validEmail.php');

  $action = isset($_POST["action"]) ? $_POST["action"] : "";

  if (empty($action))
  {
    echo "Empty Action";
  }
  else if ($action == "send")
  {
    $email = $_POST['email'];

    $to = 'kientran@gmail.com';

    if (validEmail($email))
    {
      $subject = isset($_POST["subject"]) ? $_POST["subject"] : "Website Student Registration Form";
      $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
      $name = isset($_POST["name"]) ? $_POST["name"] : "";
      $studentid = isset($_POST["studentid"]) ? $_POST["studentid"] : "";

      $name=filter($name);
      $subject=filter($subject);
      $email=filter($email);
      
      $body = "Name: $name\n\n";
      $body .= "Student ID: $studentid\n\n";
      $body .= "Phone Number: $phone\n\n";
      $body .= "Email: $email\n\n";
      $body = wordwrap($body, 70);

      // Build header
      $headers = "From: $email\n";
      $headers .= "X-Mailer: PHP/SimpleModalContactForm";

      // UTF-8
      if (function_exists('mb_encode_mimeheader')) {
        $subject = mb_encode_mimeheader($subject, "UTF-8", "B", "\n");
      }
      else {
        // you need to enable mb_encode_mimeheader or risk 
        // getting emails that are not UTF-8 encoded
      }
      $headers .= "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/plain; charset=utf-8\n";
      $headers .= "Content-Transfer-Encoding: quoted-printable\n";

      // Send email
      @mail($to, $subject, $body, $headers) or
        die("Unfortunately, a server issue prevented delivery of your message.");

    echo "OK";
    }

  }
  else
  {
    echo "Unknown Action";
  }


?>
