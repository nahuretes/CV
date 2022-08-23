<?php

  $receiving_email_address = 'nahueretes@gmail.com';

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  mail($receiving_email_address, $subject, $message, $mailheader) or die("Error!");

echo'

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact form</title>
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="container">
          <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
          <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
          
      </div>
  </body>
  </html>  ';


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
