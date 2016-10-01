<?php
    header("Content-Type: text/html;charset=UTF-8");
    include('conexionBd.php');
    mysql_query("SET NAMES 'utf8'");
    $Scripts = "";
    $Disponibilidad = array();
    $FechaReserva = $_POST["fechaReserva"];
    $HoraInicio = $_POST["horaInicio"];
    $HoraFinalizar = $_POST["horaFinalizar"];
    $Salon = $_POST["salon"];
    $strSQL = "SELECT * FROM reservasalon WHERE fechaReserva='".$FechaReserva."' AND salon='".$Salon."' " ;
    $objQuery = mysql_query($strSQL);
    $i = 0;
    $Disponible = "Disponible";
    while ($table = mysql_fetch_array($objQuery)) {
        $HoraInicioBD = str_replace(':','',$table["horaInicio"]);
        $HoraFinalizarBD = str_replace(':','',$table["horaFinalizar"]);
        if (((int)$HoraInicio < (int)$HoraInicioBD && (int)$HoraFinalizar <= (int)$HoraInicioBD) || ((int)$HoraInicio >= (int)$HoraFinalizarBD && (int)$HoraFinalizar >= (int)$HoraFinalizarBD)) {
            $Disponibilidad[$i] = "Si";
        }else {
            $Disponibilidad[$i] = "No";
        }
        for ($j=(int)$HoraInicioBD; $j <= (int)$HoraFinalizarBD; $j = $j + 10000) {
            $Scripts = $Scripts."$('#".$j."').html('Reservado');";
            $Scripts = $Scripts."$('#".$j."').css('background-color', '#FF0000');";
            if ($j != (int)$HoraFinalizarBD) {
                $Scripts = $Scripts."$('#".((int)$j+3000)."').html('Reservado');";
                $Scripts = $Scripts."$('#".((int)$j+3000)."').css('background-color', '#FF0000');";
            }
        }
        $i = $i + 1;
    };
    for ($k=0; $k < count($Disponibilidad); $k++) {
        if ($Disponibilidad[$k] == "No") {
            $Disponible = ('<table border=2 cellpadding=2 align=center width=80% class="table">');
            $Disponible .= ('<tr>');
            $Disponible .= ('<th>');
            $Disponible .= ('Hora');
            $Disponible .= ('</th>');
            $Disponible .= ('<th>');
            $Disponible .= ('Disponibilidad');
            $Disponible .= ('</th>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>12:00 pm</td>');
            $Disponible .= ('<td id="120000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>12:30 pm</td>');
            $Disponible .= ('<td id="123000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>1:00 pm</td>');
            $Disponible .= ('<td id="130000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>1:30 pm</td>');
            $Disponible .= ('<td id="133000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>2:00 pm</td>');
            $Disponible .= ('<td id="140000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>2:30 pm</td>');
            $Disponible .= ('<td id="143000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>3:00 pm</td>');
            $Disponible .= ('<td id="150000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>3:30 pm</td>');
            $Disponible .= ('<td id="153000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>4:00 pm</td>');
            $Disponible .= ('<td id="160000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>4:30 pm</td>');
            $Disponible .= ('<td id="163000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>5:00 pm</td>');
            $Disponible .= ('<td id="170000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>5:30 pm</td>');
            $Disponible .= ('<td id="173000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>6:00 pm</td>');
            $Disponible .= ('<td id="180000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>6:30 pm</td>');
            $Disponible .= ('<td id="183000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>7:00 pm</td>');
            $Disponible .= ('<td id="190000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>7:30 pm</td>');
            $Disponible .= ('<td id="193000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>8:00 pm</td>');
            $Disponible .= ('<td id="200000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>8:30 pm</td>');
            $Disponible .= ('<td id="203000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('<tr>');
            $Disponible .= ('<td>9:00 pm</td>');
            $Disponible .= ('<td id="210000" bgcolor="#1AE346">Disponible</td>');
            $Disponible .= ('</tr>');
            $Disponible .= ('</table>');
            $Disponible .= ('</table>');
            $Disponible .= ('<script language="javascript">');
            $Disponible .= $Scripts;
            $Disponible .= ('</script>');
            break;
        }else {
            $Disponible = "Disponible";
        }
    }
    echo $Disponible;
    mysql_close($objConnect);
?>
