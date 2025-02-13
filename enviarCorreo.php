<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (!isset($_POST['email']) || !isset($_FILES['archivo'])) {
        http_response_code(400);
        echo 'Faltan datos necesarios.';
        exit;
    }

    $email = $_POST['email'];
    $archivo = $_FILES['archivo'];

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo 'Correo electrónico inválido.';
        exit;
    }

    try {
      
        $mail = new PHPMailer(true);

       
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'danialecamacho92@gmail.com'; 
        $mail->Password = 'ciru epzx rpqp gudc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom('danialecamacho92@gmail.com', 'SGD Tiendas'); 
        $mail->addAddress($email); 

        $mail->isHTML(true);
        $mail->Subject = 'Presupuesto de Productos';
        $mail->Body = '<p>Estimado cliente,</p><p>Adjunto encontrará el presupuesto solicitado.</p><p>Saludos cordiales.</p>';

        // Adjuntar el archivo PDF
        $mail->addAttachment($archivo['tmp_name'], $archivo['name']);

        // Enviar el correo
        $mail->send();
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        echo 'El presupuesto se envió correctamente al correo ' . $email;
    } catch (Exception $e) {
        http_response_code(500);
        echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
    }
} else {
    http_response_code(405);
    echo 'Método no permitido.';
}
?>
