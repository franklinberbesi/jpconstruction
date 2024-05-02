<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './lib/phpmailer/Exception.php';
require './lib/phpmailer/PHPMailer.php';
require './lib/phpmailer/SMTP.php';

const BASE_URL = 'https://jpconstructsolutionusa.com';
const NOMBRE_EMPRESA = 'JPCONSTRUCTION';
const CORREO_EMPRESA = 'postulacion@jpconstructsolutionusa.com';
const DOMINIO = 'www.jpconstructsolutionusa.com';

if($_POST){
    $nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $edad = isset($_POST['edad']) ? $_POST['edad'] : '';
    $pais = isset($_POST['pais']) ? $_POST['pais'] : '';
    $ciudad_estado = isset($_POST['ciudad_estado']) ? $_POST['ciudad_estado'] : '';
    $lugar = isset($_POST['lugar']) ? $_POST['lugar'] : '';
    $experiencia_laboral = isset($_POST['experiencia_laboral']) ? $_POST['experiencia_laboral'] : '';
    $porque_trabajar_jpconstruction = isset($_POST['porque_trabajar_jpconstruction']) ? $_POST['porque_trabajar_jpconstruction'] : '';
    $personas_dependen = isset($_POST['personas_dependen']) ? $_POST['personas_dependen'] : '';
    $hijos = isset($_POST['hijos']) ? $_POST['hijos'] : '';
    $garantia_calidad_reembolso = isset($_POST['garantia_calidad_reembolso']) ? 'Si' : 'No';

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
           $mail->Subject = 'Nueva Postulación de: '.$correo;
           $mail->Body    = $mensaje;
           $res = $mail->send();
           if($res === true){
              $respuesta = array('status' => true, 'mensaje' => 'Gracias por postularte en JPCONSTRUCTION, en menos de 24 horas responderemos a su solicitud.');
           }else{
              $respuesta = array('status' => true, 'mensaje' => 'Lo sentimos, intente más tarde...');
           }
           echo json_encode($respuesta);
       } catch (Exception $e) {
          $respuesta = array('status' => true, 'mensaje' => 'Lo sentimos, intente más tarde...');
          echo json_encode($respuesta);
       } 
      exit;
}
?>