<?php

    require '../vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;


    function codeGenerator(){

        $num = rand(7,754863);
        $hash = hash('sha256',$num);
        return $hash;
    }

    function enviaMailActivacio($correo, $hash){
        $asunto = 'Confirma el teu correu en EduHacks';
        #$mensaje = 'Activa el teu compte a EduHakcs <a href="">AQUI!</a>';
        $mensaje = 'Activa el teu compte a EduHakcs <a href="http:/localhost/html/mailConfirmat.php?code='.$hash.'&mail='.$correo.'">AQUI!</a>';
        

        $mail = new PHPMailer();
        $mail->IsSMTP();

        //Configuració del servidor de Correu
        //Modificar a 0 per eliminar msg error
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        
        //Credencials del compte GMAIL
        $mail->Username = '';
        $mail->Password = '';

        //DAVIIIDD!!! POSA LES CREDENCIAAALS!! 

        //Dades del correu electrònic
        $mail->SetFrom("EduHacksDymaAxel@gmail.com"."Edu Hacks");
        $mail->Subject = ($asunto);
        $mail->MsgHTML($mensaje);
        $mail->addAttachment("fitxer.pdf");
        
        //Destinatari
        $address = $correo;
        $mail->AddAddress($address, 'Test');

        //Enviament
        $result = $mail->Send();
        $msg = "Correu enviat";
        if(!$result){
            $msg =  'Error: ' . $mail->ErrorInfo;
        }
        echo $msg;
    }




    function enviaMailPassword($correo, $hash){
        $asunto = 'Confirma el teu correu en EduHacks';
        #$mensaje = 'Activa el teu compte a EduHakcs <a href="">AQUI!</a>';
        $mensaje = 'Per restablir la teva contrasenya, segueix aquest <a href="http:/localhost/html/resetPassword.php?resetPassCode='.$hash.'&mail='.$correo.'">link!</a>';
        

        $mail = new PHPMailer();
        $mail->IsSMTP();

        //Configuració del servidor de Correu
        //Modificar a 0 per eliminar msg error
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        
        //Credencials del compte GMAIL
        $mail->Username = 'axel.arizas@educem.net';
        $mail->Password = '6006N@2122';

        //Dades del correu electrònic
        $mail->SetFrom("EduHacksDymaAxel@gmail.com"."Edu Hacks");
        $mail->Subject = ($asunto);
        $mail->MsgHTML($mensaje);
        $mail->addAttachment("fitxer.pdf");
        
        //Destinatari
        $address = $correo;
        $mail->AddAddress($address, 'Test');

        //Enviament
        $result = $mail->Send();
        $msg = "Correu enviat";
        if(!$result){
            $msg =  'Error: ' . $mail->ErrorInfo;
        }
        echo $msg;
    }
    
?>