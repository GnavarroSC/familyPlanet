<?php
    header("Content-Type: text/html;charset=UTF-8");
    include('conexionBd.php');
    mysql_query("SET NAMES 'utf8'");
    $Palabras = array("INSERT", "insert", "SELECT", "select", "FROM", "from", "UPDATE", "update", "DELETE", "Delete", "TRUNCATE", "Truncate", "DROP", "Drop", "WHERE", "Where", "ALTER", "alter", "CREATE", "create", "OR", "or", "LIKE", "like", "TABLE", "Table");
    $NombreCE = str_replace($Palabras, "", $_POST["nombreCE"]);
    $NitCE = str_replace($Palabras, "", $_POST["nitCE"]);
    $DireccionCE = str_replace($Palabras, "", $_POST["direccionCE"]);
    $TelefonoCE = str_replace($Palabras, "", $_POST["telefonoCE"]);
    $ContactoCE = str_replace($Palabras, "", $_POST["contactoCE"]);
    $CargoCE = str_replace($Palabras, "", $_POST["cargoCE"]);
    $CorreoCE = str_replace($Palabras, "", $_POST["correoCE"]);
    $strSQL = "INSERT INTO solicitudesCE (nombreCE,nitCE,direccionCE,telefonoCE,contactoCE,cargoCE,correoCE) VALUES ('".$NombreCE."','".$NitCE."','".$DireccionCE."','".$TelefonoCE."','".$ContactoCE."','".$CargoCE."-".$CorreoCE."')";
    $objQuery = mysql_query($strSQL);
    if($objQuery){
        $Mensaje  =  " <html>  " . "\r\n";
        $Mensaje  .=  " <head> " . "\r\n";
        $Mensaje  .=  " <meta charset='UTF-8'>" . "\r\n";
        $Mensaje  .=  " <title>Documento sin título</title> " . "\r\n";
        $Mensaje  .=  " </head> " . "\r\n";
        $Mensaje  .=  " <body> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <img src='http://merkavia.co/img/email-headerSolicitud.png' alt=''> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>Nombre</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$NombreCE."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>N.I.T</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$NitCE."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>Direcci&oacute;n</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$DireccionCE."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>Teléfono</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$TelefonoCE."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>Contacto</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$ContactoCE."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>Cargo</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$CargoCE."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <h2>Correo</h2> " . "\r\n";
        $Mensaje  .=  " <p>".$CorreoVP."</p> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <img src='http://merkavia.co/img/email-piepagina.png' alt=''> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <img src='http://merkavia.co/img/email-soldadoscreativos-01.png' alt=''> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje  .=  " <a href='https://www.facebook.com/familyplanetbarranquilla/' target='_blank'><img src='http://merkavia.co/img/email-btfacebook.png' alt=''></a> " . "\r\n";
        $Mensaje  .=  " <a href='https://www.instagram.com/familyplanetbq/' target='_blank'><img src='http://merkavia.co/img/email-btinstagram-01.png' alt=''></a> " . "\r\n";
        $Mensaje  .=  " <a href='https://twitter.com/familyplanetbq' target='_blank'><img src='http://merkavia.co/img/email-bttwitter.png' alt=''></a> " . "\r\n";
        $Mensaje  .=  " </div> " . "\r\n";
        $Mensaje  .=  " </body> " . "\r\n";
        $Mensaje  .=  " </html> " . "\r\n";
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.familyplanet.co";
        $mail->Username = "ventas@familyplanet.co";
        $mail->Password = "V5nt1sFp,";
        $mail->From = "ventas@familyplanet.co";
        $mail->FromName = "ventas@familyplanet.co";
        $mail->AddAddress($CorreoCE,$NombreCE);
        $mail->Subject = "Solicitud de convenio empresarial";
        $mail->Body = $Mensaje;
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        if(!$mail->Send()) {
            echo "Mailer Error: ".$mail->ErrorInfo;
            echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
            echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
        }else {
        }
        $Mensaje1  =  " <html>  " . "\r\n";
        $Mensaje1  .=  " <head> " . "\r\n";
        $Mensaje1  .=  " <meta charset='UTF-8'>" . "\r\n";
        $Mensaje1  .=  " <title>Documento sin título</title> " . "\r\n";
        $Mensaje1  .=  " </head> " . "\r\n";
        $Mensaje1  .=  " <body> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <img src='http://merkavia.co/img/email-headerSolicitud.png' alt=''> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <h2>Nombre</h2> " . "\r\n";
        $Mensaje1  .=  " <p>".$NombreCE."</p> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <h2>N.I.T</h2> " . "\r\n";
        $Mensaje1  .=  " <p>".$NitCE."</p> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <h2>Dirección</h2> " . "\r\n";
        $Mensaje1  .=  " <p>".$DireccionCE."</p> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <h2>Teléfono</h2> " . "\r\n";
        $Mensaje1  .=  " <p>".$TelefonoCE."</p> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <h2>Contacto</h2> " . "\r\n";
        $Mensaje1  .=  " <p>".$ContactoCE."</p> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <h2>Cargo</h2> " . "\r\n";
        $Mensaje1  .=  " <p>".$CargoCE."</p> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <img src='http://merkavia.co/img/email-piepagina.png' alt=''> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <img src='http://merkavia.co/img/email-soldadoscreativos-01.png' alt=''> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " <div style='text-align: center;'> " . "\r\n";
        $Mensaje1  .=  " <a href='https://www.facebook.com/familyplanetbarranquilla/' target='_blank'><img src='http://merkavia.co/img/email-btfacebook.png' alt=''></a> " . "\r\n";
        $Mensaje1  .=  " <a href='https://www.instagram.com/familyplanetbq/' target='_blank'><img src='http://merkavia.co/img/email-btinstagram-01.png' alt=''></a> " . "\r\n";
        $Mensaje1 .=  " <a href='https://twitter.com/familyplanetbq' target='_blank'><img src='http://merkavia.co/img/email-bttwitter.png' alt=''></a> " . "\r\n";
        $Mensaje1  .=  " </div> " . "\r\n";
        $Mensaje1  .=  " </body> " . "\r\n";
        $Mensaje1  .=  " </html> " . "\r\n";
        $mail1 = new PHPMailer();
        $mail1->IsSMTP();
        $mail1->SMTPAuth = true;
        $mail1->Host = "mail.familyplanet.co";
        $mail1->Username = "ventas@familyplanet.co";
        $mail1->Password = "V5nt1sFp,";
        $mail1->From = "ventas@familyplanet.co";
        $mail1->FromName = "ventas@familyplanet.co";
        $mail1->AddAddress("ventas@familyplanet.co","Ventas");
        $mail1->Subject = "Solicitud de convenio";
        $mail1->Body = $Mensaje1;
        $mail1->WordWrap = 50;
        $mail1->IsHTML(true);
        if(!$mail1->Send()) {
            echo "Mailer Error: ".$mail1->ErrorInfo;
            echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
            echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
        }else {
        }
        echo 1;
    }
    mysql_close($objConnect);
?>