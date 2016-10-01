<?php
    header("Content-Type: text/html;charset=UTF-8");
    include('conexionBd.php');
    //include("class.phpmailer.php");
    mysql_query("SET NAMES 'utf8'");
    $FechaReserva = $_POST["fechaReserva"];
    $HoraInicio = $_POST["horaInicio"];
    $HoraFinalizar = $_POST["horaFinalizar"];
    $SelectSalon = $_POST["selectSalon"];
    $NumeroPersonas = $_POST["numeroPersonas"];
    $Nombre = ucfirst(strtolower($_POST["nombre"]));
    $Apellido = ucfirst(strtolower($_POST["apellido"]));
    $Cedula = $_POST["cedula"];
    $Telefono = $_POST["telefono"];
    $Correo = strtolower($_POST["correo"]);
    $Disponibilidad = "Si";
    $strSQL = "SELECT * FROM reservasalon WHERE fechaReserva='".$FechaReserva."' AND salon='".$SelectSalon."' " ;
    $objQuery = mysql_query($strSQL);
    while ($table = mysql_fetch_array($objQuery)) {
        $HoraInicioBD = str_replace(':','',$table["horaInicio"]);
        $HoraFinalizarBD = str_replace(':','',$table["horaFinalizar"]);
        if (((int)$HoraInicio < (int)$HoraInicioBD && (int)$HoraFinalizar <= (int)$HoraInicioBD) || ((int)$HoraInicio >= (int)$HoraFinalizarBD && (int)$HoraFinalizar >= (int)$HoraFinalizarBD)) {

        }else {
            $Disponibilidad = "No";
            break;
        }
    };
    if ($Disponibilidad == "No") {
        echo 0;
    }else {
        $strSQL1 = "INSERT INTO reservasalon (fechaReserva,horaInicio,horaFinalizar,salon,numeroPersonas,selectTEvento,selectMenu,selectPlatos,selectEntrada,selectEnsalada,selectCoctel,selectPostre,selectPago,valor,estado,estadoPedido,observaciones,nombre,apellido,cedula,telefono,correo) VALUES ('".$FechaReserva."','".$HoraInicio."','".$HoraFinalizar."','".$SelectSalon."','".$NumeroPersonas."','".$SelectTEvento."','".$SelectMenu."','".$SelectPlatos."','".$SelectEntrada."','".$SelectEnsalada."','".$SelectCoctel."','".$SelectPostre."','".$SelectPago."','".$PrecioTotal."','Pendiente','','','".$Nombre."','".$Apellido."','".$Cedula."','".$Telefono."','".$Correo."')";
        $objQuery1 = mysql_query($strSQL1);
        if($objQuery1){
            echo 1;
        }else {
            echo 2;
        }
    }
    // $Mensaje  =  " <html>  " . "\r\n";
    // $Mensaje  .=  " <head> " . "\r\n";
    // $Mensaje  .=  " <meta charset='UTF-8'>" . "\r\n";
    // $Mensaje  .=  " <title>Documento sin título</title> " . "\r\n";
    // $Mensaje  .=  " </head> " . "\r\n";
    // $Mensaje  .=  " <body> " . "\r\n";
    // $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
    // $Mensaje  .=  " <img src='http://merkavia.co/img/email-headerSolicitud.png' alt=''> " . "\r\n";
    // $Mensaje  .=  " </div> " . "\r\n";
    // $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
    // if ($EstadoReserva == "Aprobada") {
    //     $Mensaje  .=  " <h1>Su reserva ha sido APROBADA</h1> " . "\r\n";
    // }else{
    //     $Mensaje  .=  " <h1>Su reserva ha sido CANCELADA</h1> " . "\r\n";
    // }
    // $Mensaje  .=  " </div> " . "\r\n";
    // $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
    // $Mensaje  .=  " <h2>Observaciones</h2> " . "\r\n";
    // $Mensaje  .=  " <p>".$Observaciones."</p> " . "\r\n";
    // $Mensaje  .=  " </div> " . "\r\n";
    // $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
    // $Mensaje  .=  " <img src='http://merkavia.co/img/email-headerGenerico-05.png' alt=''> " . "\r\n";
    // $Mensaje  .=  " </div> " . "\r\n";
    // $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
    // $Mensaje  .=  " <img src='http://merkavia.co/img/email-soldadoscreativos-01.png' alt=''> " . "\r\n";
    // $Mensaje  .=  " </div> " . "\r\n";
    // $Mensaje  .=  " <div style='text-align: center;'> " . "\r\n";
    // $Mensaje  .=  " <a href='https://www.facebook.com/Merkavia-1671525506505639/' target='_blank'><img src='http://merkavia.co/img/email-btfacebook.png' alt=''></a> " . "\r\n";
    // $Mensaje  .=  " <a href='https://www.instagram.com/merkavia/' target='_blank'><img src='http://merkavia.co/img/email-btinstagram-01.png' alt=''></a> " . "\r\n";
    // $Mensaje  .=  " <a href='https://twitter.com/merkaviainfo' target='_blank'><img src='http://merkavia.co/img/email-bttwitter.png' alt=''></a> " . "\r\n";
    // $Mensaje  .=  " </div> " . "\r\n";
    // $Mensaje  .=  " </body> " . "\r\n";
    // $Mensaje  .=  " </html> " . "\r\n";
    // $mail = new PHPMailer();
    // $mail->IsSMTP();
    // $mail->SMTPAuth = true;
    // $mail->Host = "mail.familyplanet.co";
    // $mail->Username = "reservas@familyplanet.co";
    // $mail->Password = "123456789";
    // $mail->From = "reservas@familyplanet.co";
    // $mail->FromName = "reservas@familyplanet.co";
    // $mail->AddAddress($CorreoDestino,"Reserva");
    // $mail->Subject = "Mensaje";
    // $mail->Body = $Mensaje;
    // $mail->WordWrap = 50;
    // $mail->IsHTML(true);
    // $mail->Port = 25;
    // if(!$mail->Send()) {
    //     echo "Mailer Error: " . $mail->ErrorInfo;
    //     echo "<br><BR>* Please double check the user name and password to confirm that both of them are correct. <br>";
    // }else {
    // }
?>
