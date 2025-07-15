<?php
/**
 * PHP Email Form library
 * @author BootstrapMade
 * @version 3.10
 */

class PHP_Email_Form {

  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $smtp = false;
  public $ajax = false;
  private $messages = array();

  public function add_message($content, $label = '', $length = 0) {
    $entry = '';
    if ($label && !empty($label)) {
      $entry = "$label: ";
    }
    $entry .= $content;
    if ($length > 0) {
      $entry = substr($entry, 0, $length);
    }
    $this->messages[] = $entry;
  }

  public function send() {
    $header = '';
    $body = implode("\n", $this->messages);
    $subject = $this->subject;

    if ($this->ajax) {
      header('Content-Type: text/plain');
    }

    if ($this->smtp) {
      return $this->smtp_send($subject, $body);
    } else {
      $header .= "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
      return mail($this->to, $subject, $body, $header);
    }
  }

  private function smtp_send($subject, $body) {
    $host = $this->smtp['host'];
    $username = $this->smtp['username'];
    $password = $this->smtp['password'];
    $port = $this->smtp['port'];

    $to = $this->to;
    $from = $this->from_email;
    $name = $this->from_name;

    $headers = array(
      'From' => "$name <$from>",
      'To' => $to,
      'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
      'host' => $host,
      'port' => $port,
      'auth' => true,
      'username' => $username,
      'password' => $password
    ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
      return false;
    } else {
      return true;
    }
  }

}
?>
