<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'eggomez@coto.com.ar';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['nombre']['apellido'];
  $contact->from_name = $_POST['legajo'];
  $contact->from_name = $_POST['sector'];
  $contact->from_name = $_POST['sucursal'];
  $contact->from_email = $_POST['email'];
  $contact->from_email = $_POST['telefono'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['nombre']['apellido'], 'De:');
  $contact->add_message( $_POST['legajo'], 'Legajo:');
  $contact->add_message( $_POST['sector'], 'Sector:');
  $contact->add_message( $_POST['sucursal'], 'Sucursal N°:');
  $contact->add_message( $_POST['email'], 'Email:');
  $contact->add_message( $_POST['telefono'], 'Teléfono:');
  $contact->add_attachment('archivo', 20, array('xls', 'xlsx', 'ods', 'pdf'));

  echo $contact->send();
?>
