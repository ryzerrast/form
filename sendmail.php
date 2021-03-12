<?php

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'PHPMailer-6.3.0/src/Exception.php';
   require 'PHPMailer-6.3.0/src/PHPMailer.php';

   $mail = new PHPMailer(true);
   $mail->CharSet = 'UTF-8';
   $mail->setLanguage('ru', 'PHPMailer-6.3.0/language/');
   $mail->IsHTML(true);
   $name = $_POST['name'];
   $email = $_POST['email'];
   // $hand = $_POST['hand'];
   $message = $_POST['message'];
   $image = $_POST['image'];

   // От кого письмо
//    $to = 'ryzerrast@gmail.com'
//    // Кому отправить
//    $from = trim($_POST['email']);

   $mail->setFrom('ryzerrast@gmail.com', "Text");
   $mail->addAddress('ryzerrast@gmail.com');

   // if(!$mail->send()) {
   //    $message = 'Error';
   // } else {
   //    $message = 'Данные отправлены!'
   // }

   // $response = ['message' => $message];

   // header('Content-type: application/json');
   // echo json_encode($response);

   // Тема письма
   $mail->Subject = 'Test'
   $mail->Body = '' .$name . ' оставил заявку, его e-mail ' .$email;

   if(!$mail->send()) {
      $message = 'Ошибкt';
   } else {
      $message = 'Данные отправлены!';
   }

   $response = ['message' => $message];

   header('Content-type: application/json');
   echo json_encode($response);
?>
