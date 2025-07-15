<?php

$receiving_email_address = 'contact.lexclaws@gmail.com';

if (file_exists($php_email_form = 'vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = "New Contact Form Submission";

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['phone'], 'Phone');
$contact->add_message($_POST['message'], 'Message', 10);

if ($contact->send()) {
  echo 'OK';
} else {
  echo 'Message could not be sent.';
}
?>
