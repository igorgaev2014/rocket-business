<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language/');
  $mail->isHTML(true);

  $mail->setFrom('test-site', 'test-site');
  $mail->addAddress('igorgaev2014@gmail.com');
  $mail->Subject = 'Hello World';

  $body = '<h1>Hello, this is a letter</h1>';

  if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$POST['name'].'</p>';
  }

  if(trim(!empty($_POST['email']))){
    $body.='<p><strong>E-mail:</strong> '.$POST['email'].'</p>';
  }

  if(trim(!empty($_POST['message']))){
    $body.='<p><strong>Сообщение:</strong> '.$POST['message'].'</p>';
  }

  $mail->Body = $body;

  if (!$mail->send()) {
    $message = 'Error';
  } else {
    $message = 'Data was sent';
  }

  $response = ['message' => $message];

  header('Content-type: application/json');
  echo json_encode($response);
?>