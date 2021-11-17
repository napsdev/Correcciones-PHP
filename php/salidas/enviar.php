<?php
    //Capturar datos del formulario en variables
    $Nombre = 'Sr.Córdoba';
    $Email = $_POST['Email'];
    $archivo = $_FILES['adjunto'];

    require("archivosmail/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre;

    //*****Dirección a la que llegaran los mensajes*****
    $mail->AddAddress($Email);
   
    // Aquí van los datos que apareceran en el correo que se envia
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Factura";
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    
    //*****Datos del servidor SMTP para hacer posible el envio del correo*****
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "cordobainvt@gmail.com"; //Correo Electrónico
    $mail->Password = "r3vszx891998"; //Contraseña
    
    if ($mail->Send())
        echo "<script>alert('Formulario enviado exitosamente.');</script>";
    else
        echo "<script>alert('Error al enviar el formulario');</script>";
?>