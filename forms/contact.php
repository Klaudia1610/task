<?php
  /**
  */

  $receiving_email_address = 'klaudiaflorczuk97@gmail.com';

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];

  // SMTP

  $contact->smtp = array(
    'host' => 'smtp.mailtrap.io',
    'username' => 'd882e29ab672a9',
    'password' => '947888c60ae876',
    'port' => '2525'
  );

//
  $contact->add_message( $_POST['name'], 'Nadawca');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Wiadomość', 10);

  echo $contact->send();
?>
