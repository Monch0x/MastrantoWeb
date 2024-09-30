<?php 
    // Correo al que se le enviará el msj
    $destinatario = 'soporte01@drogueriaelmastrantomm.com';
    $nombre_apellido_cli = $_POST['nombre_apellido'];
    $email_cli = $_POST['email'];
    $telefono_cli = $_POST['telefono'];
    $nombre_farmacia = $_POST['nombre_farmacia'];
    $rif_cli = $_POST['rif_cliente'];
    $estado_cli = $_POST['estado'];
    $asunto = 'Solicitud de Registro de Cliente';


    $header = "Enviado desde la página de El Mastranto M&M";
    $mensajeCompleto = "Nombre: " . $nombre_apellido_cli."\nCorreo: ".$email_cli. "\nNúmero de Teléfono: ".$telefono_cli. "\nNombre de la Farmacia: ".$nombre_farmacia. "\nRif: ".$rif_cli."\nEstado: ".$estado_cli;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script type='text/javascript'>alert('Correo enviado Exitosamente');
            window.location = '../'; </script>";
    
   // echo "<script>setTimeout(\"location.href='../index.html'\",1000)</script>";
?>