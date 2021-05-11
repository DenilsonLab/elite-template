<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'form_setting.php';

sleep(1);

$mail_reg = '/^(?i)(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\  [[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

$return = array();
$mesaj = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (empty($_POST['name']) || is_numeric($_POST['name'])) {

      $return['msg'] = 'error';
      $return['type'] = 'Invalid Name';
      echo json_encode($return);
      exit();

    } elseif (empty($_POST['email']) || !preg_match($mail_reg,   $_POST['email'])) {

      $return['status'] = 'error';
      $return['type'] = 'Invalid Email';
      echo json_encode($return);
      exit();

    } elseif (empty($_POST['subject'])) {
        $return['status'] = 'error';
        $return['type'] = 'Invalid Message';
        echo json_encode($return);
        exit();
  
    } elseif (empty($_POST['message'])) {
      $return['status'] = 'error';
      $return['type'] = 'Invalid Message';
      echo json_encode($return);
      exit();

    }
    else {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      
      	
      $messages  = "<h3>New message from " .$fromName. "</h3> \r\n";
      $messages .= "<ul>";
      $messages .= "<li><strong>Name: </strong>" .$name."</li>";
      $messages .= "<li><strong>Email: </strong>" .$email."</li>";
      $messages .= "<li><strong>Subject: </strong>" .$subject."</li>";
      $messages .= "<li><strong>Message: </strong>" .$message."</li>";
      $messages .= "</ul> \r\n";

      $mail = new PHPMailer;

      $mail->From = $from;
      $mail->FromName = $fromName;
      $mail->addAddress($to, 'Admin');
  
      $mail->isHTML(true); 
      $mail->CharSet = $charset;
  
      $mail->Subject = $subj;
      $mail->Body    = $messages;
      if(!$mail->send()) {
	    print json_encode(array('status'=>'error'));
        } else {
            print json_encode(array('status'=>'success'));
        }
      exit();
     }
    }



  ?>