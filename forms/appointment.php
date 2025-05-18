<?php
 

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'silverlinehealthcare22@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = 'Appointment request';

 

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);
//   $contact->add_message( $_POST['phone'], 'Contact');
//   $contact->add_message( $_POST['date'], 'Requested Date');
  
  
  $fullname = $_POST['name'];
  $appdate = $_POST['date'];
  $nurse = $_POST['nurse'];
  $service = $_POST['service'];
  $message = $_POST['message'];
  
  
  
  $contact->add_message('<html> 
  <head>
  <tittle></tittle>
  
  </head>
  
  <body> <p> <b> '.$fullname.' </b> has requested for '.$service.' on '.$appdate.' with <strong> '.$nurse.' </strong> . <br> Please reply if the appoinment is accepted or reschedule as soon as possible.</p>
 
  </body>
  </html>');
 
 

  echo $contact->send();
?>
