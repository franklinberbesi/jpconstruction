<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../lib/phpmailer/Exception.php';
require '../lib/phpmailer/PHPMailer.php';
require '../lib/phpmailer/SMTP.php';

  // Replace contact@example.com with your real receiving email address
  const BASE_URL = 'https://jpconstructsolutionusa.com/';
  const NOMBRE_EMPRESA = 'JPCONSTRUCTION,INC.';
  const CORREO_EMPRESA = 'info@jpconstructsolutionusa.com';
  const DOMINIO = 'www.jpconstructsolutionusa.com';


     //Creamos la instancia de la clase PHPMailer
     $mail = new PHPMailer(true);
     
            ob_start();
            require_once("email.php");
            $mensaje = ob_get_clean();
 
     try { 
         //Recipients
         $mail->setFrom(CORREO_EMPRESA, NOMBRE_EMPRESA);
         $mail->addAddress(CORREO_EMPRESA);     //Add a recipient
         $mail->CharSet = 'UTF-8';
         //Content
         $mail->isHTML(true);   //Set email format to HTML
         $mail->Subject = $_POST['subject'];
         $mail->Body    = $mensaje;
         $res = $mail->send();
         if($res){
             echo json_encode(array('status' => true));
         }else{
          echo json_encode(array('status' => false));
         }
     } catch (Exception $e) {
      echo json_encode(array('status' => false));
     } 
     exit;

?>
