<?php 
    // Correo al que se le enviará el msj
    $destinatario = 'comprasmastrantomm@gmail.com';
    $nombre_apellido_pro = $_POST['nombre_apellido_pro'];
    $email_pro = $_POST['email_pro'];
    $telefono_pro = $_POST['telefono_pro'];
    $rif_proveedor = $_POST['rif_proveedor'];
    $estado_pro = $_POST['estado_pro'];
    $asunto = 'Solicitud de Registro de Proveedor';


    $header = "Enviado desde la página de El Mastranto M&M";
    $mensajeCompleto = "Nombre: " . $nombre_apellido_pro."\nCorreo: ".$email_pro. "\nNúmero de Teléfono: ".$telefono_pro. "\nRif: ".$rif_proveedor."\nEstado: ".$estado_pro;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script type='text/javascript'>alert('Correo enviado Exitosamente');
            window.location = '../'; </script>";
    
   // echo "<script>setTimeout(\"location.href='../index.html'\",1000)</script>";
?>