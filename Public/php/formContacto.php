<?php


$nombre = $_POST["nombreINP"] ?? '';
$correo = $_POST["emailINP"] ?? '';
$telefono = $_POST["telefonoINP"] ?? '';
$mensaje = $_POST["msn"] ?? '';

$respuesta = [];
$bandera = true;

//VALIDACION DE CAMPOS
if($nombre == ""){
    $respuesta += ['nombreINP' => 'Ingresa un nombre'];
    $bandera = false;
}
if($correo == ""){
    $respuesta += ['emailINP' => 'Ingresa un correo'];
    $bandera = false;
}
if($telefono == ""){
    $respuesta += ['telefonoINP' => 'Ingresa un telefono'];
    $bandera = false;
}
if($mensaje == ""){
    $respuesta += ['msnq' => 'Ingresa un mensaje'];
    $bandera = false;
}

echo json_encode($respuesta);

if($bandera){




    $nombre = $_POST["nombreINP"];
    $correo = $_POST["emailINP"];
    $telefono = $_POST["telefonoINP"];
    $asunto = 'New messaje GNT Consulting - English'; 
    $mensaje = $_POST["msn"];

    $cabecera = '
    <html>
    <head>
      <title>GNT Consulting - Seguros y fianzas</title>
    </head>
    <body>
      <img src="https://gntconsulting.mx/Public/images/gnt-consulting-head-encabezado.jpg" width="100%" height="auto">
    </body>
    </html>
    ';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $headers = "From: $correo";
    $headers = "From: " . $correo . "\r\n";
    $headers .= "Reply-To: ". $correo . "\r\n";
    $headers .= "Bcc: ricardo@tiposlibres.com, richtipolibre@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    //$cabeceras .= 'From: <'.$email_from.'>' . "\r\n";

    $email_from = $correo;

    // Varios destinatarios
    $email_to = 'contacto@gntconsulting.mx';
    // $email_to = 'contacto@sophie.travel, alan@tiposlibres.com';
    /*$para  = 'graphicrichart@gmail.com' . ', '; // atención a la coma
    $para .= 'garcia_richgraphic@hotmail.com';*/
    

    //ENVIAMOS EL FORMULARIO
    echo('DATOS ENVIADOS CON EXITO: ' . $nombre . $correo . $telefono . $mensaje);
    $body = $cabecera . "\n\n" . 'Nombre: ' . $nombre . "\n\n" . '<br>Email: ' . $correo . "\n\n" . '<br>Teléfono: ' . $telefono . "\n\n" . '<br>Asunto: ' . $asunto . "\n\n" . '<br>Mensaje: ' . $mensaje . "\n\n";

    $success = @mail($email_to, $asunto, $body, $headers);
    echo "Msn enviado";
    echo json_encode($status);
}



    /* APARTADO VIEJO */

    // $nombre = $_POST["nombreINP"] ?? '';
    // $correo = $_POST["emailINP"] ?? '';
    // $telefono = $_POST["telefonoINP"] ?? '';
    // $mensaje = $_POST["msn"] ?? '';
    // $mensaje = $_POST["msn"] ?? '';

    // $respuesta = [];
    // $bandera = true;

    //VALIDACION DE CAMPOS
    // if($nombre == ""){
    //     $respuesta += ['nombreINP' => 'Ingresa un nombre'];
    //     $bandera = false;
    // }
    // if($correo == ""){
    //     $respuesta += ['emailINP' => 'Ingresa un correo'];
    //     $bandera = false;
    // }
    // if($telefono == ""){
    //     $respuesta += ['telefonoINP' => 'Ingresa un telefono'];
    //     $bandera = false;
    // }
    // if($mensaje == ""){
    //     $respuesta += ['msnq' => 'Ingresa un mensaje'];
    //     $bandera = false;
    // }

    // echo json_encode($respuesta);

    // if($bandera){

        //ENVIAMOS EL FORMULARIO
        


        // $nombre = $_POST["nombreINP"];
        // $correo = $_POST["emailINP"];
        // $telefono = $_POST["telefonoINP"];
        // $asunto = 'Nuevo mensaje de: GNT Consulting'; 
        // $mensaje = $_POST["mensaje"];

        // $cabecera = '
        // <html>
        // <head>
        //   <title>GNT Consulting - Seguros y fianzas</title>
        // </head>
        // <body>
        //   <img src="https://gntconsulting.mx/Public/images/gnt-consulting-head-encabezado.jpg" width="100%" height="auto">
        // </body>
        // </html>
        // ';

        // // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        // $headers = "From: $correo";
        // $headers = "From: " . $correo . "\r\n";
        // $headers .= "Reply-To: ". $correo . "\r\n";
        // $headers .= "Bcc: graphicrichart@gmail.com \r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        // //$cabeceras .= 'From: <'.$email_from.'>' . "\r\n";

        // $email_from = $correo;

        // // Varios destinatarios
        // // $email_to = 'contacto@sophie.travel, alan@tiposlibres.com';
        // $email_to = 'ricardo@tiposlibres.com, richtipolibre@gmail.com';
        // /*$para  = 'graphicrichart@gmail.com' . ', '; // atención a la coma
        // $para .= 'garcia_richgraphic@hotmail.com';*/
        


        // $body = $cabecera . "\n\n" . 'Nombre: ' . $nombre . "\n\n" . '<br>Email: ' . $correo . "\n\n" . '<br>Teléfono: ' . $telefono . "\n\n" . '<br>Asunto: ' . $asunto . "\n\n" . '<br>Mensaje: ' . $mensaje . "\n\n";

        // $success = @mail($email_to, $asunto, $body, $headers);
        // echo "Correo enviado";
        // echo json_encode($status);
        //die;
        //FIN DEL FORMULARIO


        /* APARTADO VIEJO - BLOQUE 01 */
        // if(!empty($_POST)){


        //     $nombre = $_POST["nombreINP"] ?? '';
        //     $correo = $_POST["emailINP"] ?? '';
        //     $telefono = $_POST["telefonoINP"] ?? '';
        //     $mensaje = $_POST["msn"] ?? '';

        //     $respuesta = [];
        //     echo json_encode($respuesta);


        //     $nombre = $_POST["nombreINP"];
        //     $correo = $_POST["emailINP"];
        //     $telefono = $_POST["telefonoINP"];
        //     $asunto = 'Nuevo mensaje de: GNT Consulting'; 
        //     $mensaje = $_POST["msn"];

        //     $recaptcha = $_POST['g-recaptcha-response'];
        //     $secret = "6LeVMPIlAAAAAInWU-igPLUSXPMqSn_WvHoyYwug";

        //     if(!$recaptcha){
        //         echo "Por favor verifica el captcha";
        //     } else{
        //         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
        //         var_dump($response);
        //         $array = json_decode($response, true);
        //         if($array["success"]){

        //             $cabecera = '
        //             <html>
        //             <head>
        //               <title>GNT Consulting - Seguros y fianzas</title>
        //             </head>
        //             <body>
        //               <img src="https://gntconsulting.mx/Public/images/gnt-consulting-head-encabezado.jpg" width="100%" height="auto">
        //             </body>
        //             </html>
        //             ';

        //             echo "<h2>Gracias</h2>";

        //             //ENVIAR AL FORMULARIO
        //             // $nombre = @trim(stripslashes($_POST['name'])); 
        //             // $email = @trim(stripslashes($_POST['email'])); 
        //             // $tel = @trim(stripslashes($_POST['tel'])); 
        //             // $asunto = 'Tienes un nuevo registro de: Doux Amour Reposteria'; 
        //             // $mensaje = @trim(stripslashes($_POST['message'])); 

        //             // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        //             $headers = "From: $correo";
        //             $headers = "From: " . $correo . "\r\n";
        //             $headers .= "Reply-To: ". $correo . "\r\n";
        //             $headers .= "Bcc: garcia_richgraphic@hotmail.com, ricardo@tiposlibres.com \r\n";
        //             $headers .= "MIME-Version: 1.0\r\n";
        //             $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        //             //$cabeceras .= 'From: <'.$email_from.'>' . "\r\n";

        //             $email_from = $correo;

        //             // Varios destinatarios
        //             $email_to = 'graphicrichart@gmail.com';
        //             /*$para  = 'graphicrichart@gmail.com' . ', '; // atención a la coma
        //             $para .= 'garcia_richgraphic@hotmail.com';*/
                    


        //             echo('DATOS ENVIADOS CON EXITO: ' . $nombre . $correo . $telefono . $mensaje);
        //             $body = $cabecera . "\n\n" . 'Nombre: ' . $nombre . "\n\n" . '<br>Email: ' . $correo . "\n\n" . '<br>Teléfono: ' . $telefono . "\n\n" . '<br>Asunto: ' . $asunto . "\n\n" . '<br>Mensaje: ' . $mensaje . "\n\n";

        //             $success = @mail($email_to, $asunto, $body, $headers);
        //             echo json_encode($status);
        //             // die;
        //             //FIN DEL FORMULARIO

        //         } else{
        //             echo "<h3>Error al comprobar Captcha</h3>";
        //         }
        //     }


        // }

    // }

    /* APARTADO VIEJO - BLOQUE 01 */

?>