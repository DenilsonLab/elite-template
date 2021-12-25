<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'form_setting.php';

sleep(1);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['name']) && $_POST['name'] != "") {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        if ($_POST['name'] == "") {
            $errors[] = 'Please enter a valid name.<br/><br/>'; //Empty or invalid name error

        }
    } else {
        $errors[]= 'Please enter your name.<br/>'; //Empty or invalid name error
    }

    if (isset($_POST['email']) && $_POST['email'] != "") {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "$email is <strong>NOT</strong> a valid email address.<br/><br/>"; //Invalid email error
        }
    } else {
        $errors[] = 'Please enter your email address.<br/>'; //Empty Email error
    }

    if (isset($_POST['subject']) && $_POST['subject'] != "") {
        $_POST['subject'] = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        if ($_POST['subject'] == "") {
            $errors[] = 'Please enter a subject to send.<br/>'; //Invalid subject error
        }
    } else {
        $errors[] = 'Please enter a subject to send.<br/>'; //Empty subject error
    }

    if (isset($_POST['message']) && $_POST['message'] != "") {
        $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        if ($_POST['message'] == "") {
            $errors[] = 'Please enter a message to send.<br/>'; //Invalid message error
        }
    } else {
        $errors[] = 'Please enter a message to send.<br/>'; //Empty message error
    }

    if (count($errors) == 0) {
        try {
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $messages = "<h3>New message from " . $fromName . "</h3> \r\n";
            $messages .= "<ul>";
            $messages .= "<li><strong>Name: </strong>" . $name . "</li>";
            $messages .= "<li><strong>Email: </strong>" . $email . "</li>";
            $messages .= "<li><strong>Subject: </strong>" . $subject . "</li>";
            $messages .= "<li><strong>Message: </strong>" . $message . "</li>";
            $messages .= "</ul> \r\n";

            $mail = new PHPMailer;      
            $mail->From = $from;
            $mail->FromName = $fromName;
            $mail->addAddress($to, 'Admin');

            $mail->isHTML(true);
            $mail->CharSet = $charset;

            $mail->Subject = $subject;
            $mail->Body = $messages;

            if ($mail->send()) {
                echo json_encode(['status' => 'success']);
                exit();
            } else {
                echo json_encode(['status' => 'error', 'messages' => ['An error occurred while sending the email']]);
                exit();
            }

        } catch (phpmailerException $e) {
            echo json_encode(['status' => 'error', 'messages' => [$e]]);
            exit();
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'messages' => [$e]]);
            exit();
        }
    } else {
        $errorMessage = [
            'status' => 'error',
            'messages' => $errors
        ];
        echo json_encode($errorMessage, true);
        exit();
    }

}
