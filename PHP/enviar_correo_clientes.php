<?php 

$nombre_apellido_cli = $_POST['nombre_apellido'];
$email_cli = $_POST['email'];
$telefono_cli = $_POST['telefono'];
$nombre_farmacia = $_POST['nombre_farmacia'];
$rif_cli = $_POST['rif_cliente'];
$estado_cli = $_POST['estado'];


require_once './plugins/PHPMailer/src/PHPMailer.php';
require_once './plugins/PHPMailer/src/SMTP.php';
require_once './plugins/PHPMailer/src/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

    
if(!empty($_POST)){
    
    if (empty($_POST['nombre_apellido']) || empty($_POST['email'])) {
            echo '<script type="text/javascript">
                      alert("Faltan campos por llenar");
                      window.location="../";
                  </script>';
        } else {

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'drogueriaelmastrantomm.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'soporte01@drogueriaelmastrantomm.com';                     //SMTP username
    $mail->Password   = 'DMMM$aludS0P01';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('soporte01@drogueriaelmastrantomm.com', 'El Mastranto M&M');
    $mail->addAddress('clientesmastranto@gmail.com', 'El Mastranto M&M');
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('atencionalcliente@drogueriaelmastrantomm.com', 'El Mastranto M&M');
    //$mail->addBCC('bcc@example.com');

    //Attachments Archivos adjuntos


    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Correo de solicitud de Cliente:";
    $mail->Body    = "Correo de solicitud de Cliente:"."<br>".
    "Nombre: ".$nombre_apellido_cli."<br>".
    "Correo: ".$email_cli."<br>".
    "Telefono: ".$telefono_cli."<br>".
    "Nombre de la Farmacia: ".$nombre_farmacia."<br>".
    "Rif: ".$rif_cli."<br>".
    "Estado: ".$estado_cli;
    
    $mail->AltBody = 'Correo enviado';

   /* $mail->send();

    echo '<script type="text/javascript">
          window.location="../../vista/pedido.php?pedido='.$id_pedido.'";
      </script>';*/

    $pdf_enviado=$mail->send();

    if($pdf_enviado){
      echo '<script type="text/javascript">
        alert("Correo enviado");
        window.location="../";
      </script>';
    }else{
      echo '<script type="text/javascript">
          alert("Error al enviar el correo.");
          window.location="../";
      </script>';
    }
}
}

    
?>