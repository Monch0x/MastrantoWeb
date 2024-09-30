<?php 
    
$nombre_apellido_pro= $_REQUEST['nombre_apellido_pro'];
$email_pro= $_REQUEST['email_pro'];
$telefono_pro= $_REQUEST['telefono_pro'];
$rif_proveedor= $_REQUEST['rif_proveedor'];
$estado_pro=$_REQUEST['estado_pro'];

$nombre_file_proveedor=$_FILES['file_proveedor']['name'];
$guardado_file_proveedor=$_FILES['file_proveedor']['tmp_name']; 
    
require_once './plugins/PHPMailer/src/PHPMailer.php';
require_once './plugins/PHPMailer/src/SMTP.php';
require_once './plugins/PHPMailer/src/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;


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
    $mail->addAddress('comprasmastrantomm@gmail.com', 'El Mastranto M&M');     //Add a recipient
    //$mail->addAddress('comprasmastrantomm@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('soporte01@drogueriaelmastranto.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments Archivos adjuntos


    $mail->addAttachment($guardado_file_proveedor,$nombre_file_proveedor);
    //$mail->addAttachment($guardado_file_proveedor2,$nombre_file_proveedor2);
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Correo de solicitud de Cliente:";
    $mail->Body    = "Correo de solicitud de Cliente:"."<br>".
    "Nombre: ".$nombre_apellido_pro."<br>".
    "Correo: ".$email_pro."<br>".
    "Telefono: ".$telefono_pro."<br>".
    "Rif: ".$rif_proveedor."<br>".
    "Estado: ".$estado_pro;
    
    $mail->AltBody = 'Correo enviado';

   /* $mail->send();

    echo '<script type="text/javascript">
          window.location="../../vista/pedido.php?pedido='.$id_pedido.'";
      </script>';*/

    $pdf_enviado=$mail->send();

    if($pdf_enviado){
      echo '<script type="text/javascript">
        alert("Correo enviado");
        window.location="../index.html";
      </script>';
    }else{
      echo '<script type="text/javascript">
          alert("Error al enviar el correo.");
          window.location="../index.html";
      </script>';
    }

    
?>