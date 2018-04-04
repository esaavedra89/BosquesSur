                                
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">


<title>Formulario</title> 
</head>

<body>
<?php

   

$nombre = utf8_decode ($_POST['nombre']);
$email = utf8_decode ($_POST['email']);
$asunto = utf8_decode ($_POST['asunto']);
$mensaje = utf8_decode ($_POST['mensaje']);

if ($nombre=='' || $email=='' || $asunto=='' || $mensaje==''){

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require("archivosformulario/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $email;
    $mail->FromName = "Solicitud Servicios via WEB"; 
    $mail->AddAddress("j.gavilan@serfonac.cl"); 
    $mail->AddAddress("contacto@bosquessur.cl"); // Dirección a la que llegaran los mensajes.
    
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo

            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  " Solicitud servicios (PAGINA_WEB)";
       
    $body = "<html><head><style>
                     table, tr, td, th {
                        border: solid 1px;
                        text-align: center;
                     }
                     th {
                        background-color: white;
                        font-size:15px;
                     }
                     .blue { color: #178195; font-weight: bold;}
                     .blue2 { color: red; font-weight: bold;}
                     .bold { font-weight: bold; }
                     .grey { color: #585858; }
                     .gvn { color: #272f30; font-size: 12px; font-weight:bold;}
                     .padding32 { padding: 12px; }

                     body { 
                          height: 100%; width: 100%; max-width: 100%;
                          font-family: 'Tahoma', arial;
                          font-size:15px;  
                          background-color: #ffffff;
                          overflow: hidden;
                      }   

                      .wit {
                          display: block; position:relative;                                                     
                          background-color: #FFF;         
                          text-align:justify;
                      }
                     </style>
                     </head>
                     <body>

                      <div class=wit>
                        <div>
                            <img src='./logomail.jpg' style='width:60px;' />
                            <h2 class='inline m-L'><b>CONTACTO PAGINA WEB</b></h2>
                         
                            <span class='bold'></span>Estimados se acaba de ingresar un requerimiento a traves de nuestro sitio web con el siguiente detalle </span>:<br />
                            <br />        
                           
                        </div>
                        </div> <br />

                     <table>
                      <tr class=padding32>                        
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                                                                      
                      </tr>


                      <tr>
                          <th>$nombre</th>
                          <th>$email</th>
                          <th>$asunto</th>
                          <th>$mensaje</th>
                      </tr>

                      ";
    
    $mail->msgHTML($body);

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "mail.bosquessur.cl";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "web@bosquessur.cl";  // Correo Electrónico
    $mail->Password = "web12345"; // Contraseña
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, El Jefe de Operaciones Le respondera lo mas pronto posible. Gracias por contactarnos.'); window.location='index.html';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>
                            
                                          
                            