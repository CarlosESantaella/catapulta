<?php 
     $fullName = $_POST['name'].' '.$_POST['lastname'];
     $tel = $_POST['tel'];
     $city = $_POST['city'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     $destinatario = "info@estudiocatapulta.com"; 
     //info@estudiocatapulta.com
     $asunto = "Mensaje de ".$fullName; 
     $cuerpo = ' 
     <html> 
     <head> 
     <title>Mensaje de '.$fullName.'</title> 
     </head> 
     <body> 
     <p>Remitente: '.$fullName.'</p>
     <p>Teléfono: '.$tel.'</p>
     <p>Ciudad: '.$city.'</p>
     <p>Email: '.$email.'</p>
     <p>mensaje: '.$message.'</p>
     </body> 
     </html> 
     '; 
     
     //para el envío en formato HTML 
     $headers = "MIME-Version: 1.0\r\n"; 
     $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
     
     //dirección del remitente 
     $headers .= "From: ".$fullName." <".$email.">\r\n"; 
     
     
     mail($destinatario,$asunto,$cuerpo,$headers);
     setcookie('emailSended', 'true', time() + 852345, "/"); 
    header('location:'.$_SERVER['HTTP_REFERER']);
?>