<?php
require_once("../../app/models/cliente.class.php");
require_once("../../web/PHPMailer/class.phpmailer.php");
require_once("../../web/PHPMailer/class.smtp.php");

function ClaveNueva($length = 10) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length); 
} 

try{
    $nueva= ClaveNueva();
	$object = new Cliente;
		if(isset($_POST['recuperar1'])){
            $_POST = $object->validateForm($_POST);
            if($object->setUsuario($_POST['usuario'])){
				// Se verifica la existencia del usuario y que tenga un estado "Activo"
				if($object->checkCliente()){
                    $usuario= $_POST['usuario'];
                    $correo = $object->getCorreo();
                    $object->Recuperar($nueva);
                
                    $mail = new PHPMailer;

                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'luhos120@gmail.com';
                    $mail->Password = 'Estefany1';
                    $mail->SMTPSecure = 'ssl'; 
                    $mail->Port = 465;
                    $mail->setFrom('luhos120@gmail.com', 'LUHO');
                    $mail->addAddress($correo, 'Estimado Usuario');
                    $mail->isHTML(true);
                    $mail->Subject = 'Recuperacion de clave';
                    $mail->Body = '
                    <html  lang="es">
                    <head>
                    <meta charset="utf-8">
                    <style type ="txt/css">
                    h1{
                        color: #607d8b;
                    }
                    .l{
                        font-size: 13px;
                        color: #607d8b;
                    }        
                    </style>
                    </head>
                    <body>
                    <h1> Recuperación de contraseña </h1> <p>Hola Estimado Usuario nos has solicitado restablecer tu clave. 
                    </p> <p> Para ingresar utiliza la nueva clave: <strong>'.$nueva.'</strong> <p>Recuerda cambiar de contraseña al acceder a tu cuenta.</p>  <br> <p> <strong> Gracias por confiar en nosotros, </strong> </p> <p> Anike SV. </p>
                    <p> ------------------- </p>
                    <p class="l" ><strong> A N I K E </strong></p>
                    <p class="l"> <strong> "Just Do It" </strong></p>
                    ';
                     

                    if(!$mail->send()){
                        throw new Exception("No se pudo". $mail->ErrorInfo);
                    }
                    else{
                        Page::showMessage(1, "Correo enviado", "../account/login.php");
                    }
						
						}else{
							throw new Exception("Correo inexistente");
						}
					
                }
                else{
                    throw new Exception("Correo no válido");
                }
			
                }
            
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}

//Controlador para llamar la vista de recuperar contra
 require_once("../../app/views/public/account/recuperarview.php");

?>