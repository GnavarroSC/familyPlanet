var click = "no";
$(function () {
    var nombrePagina = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    if (nombrePagina == "atracciones.php") {
        document.getElementById("atracciones").className = "active-menu";
    }else if (nombrePagina == "fiestasEventos.php") {
        document.getElementById("fiestasEventos").className = "active-menu";
    }else if (nombrePagina == "familyKitchen.php") {
        document.getElementById("familyKitchen").className = "active-menu";
    }else if (nombrePagina == "promociones.php") {
        document.getElementById("promociones").className = "active-menu";
    }else if (nombrePagina == "elParque.php") {
        document.getElementById("elParque").className = "active-menu";
    }else if (nombrePagina == "contactenos.php") {
        document.getElementById("contactenos").className = "active-menu";
    }
    cargarFechas();
});

function enviarMensaje() {
    if (click == "si") {

    }else if (click == "no") {
        click = "si";
        var Nombre = document.getElementById('nombre').value;
        var Apellido = document.getElementById('apellido').value;
        var Correo = document.getElementById('correo').value;
        var Telefono = document.getElementById('telefono').value;
        var Comentarios = document.getElementById('comentarios').value;
        var CBox= document.getElementById("checkbox");
        var CheckBox = "";
        if (CBox.checked) {
            CheckBox = "Si";
        }else {
            CheckBox = "No";
        }
        if (Nombre === "" || Nombre === null || Apellido === "" || Apellido === null || Correo === "" || Correo === null || Telefono === "" || Telefono === null || Comentarios === "" || Comentarios === null) {
            alert("Llenar todos los datos");
            click = "no";
            return false;
        }else {
            $("#alerta").html("Enviando mensaje...");
            $.ajax({
                type: 'POST',
                url: 'enviarMensaje.php',
                data:('nombre='+Nombre+'&apellido='+Apellido+'&correo='+Correo+'&telefono='+Telefono+'&comentarios='+Comentarios+'&checkbox='+CheckBox)
            }).done(function(respuesta){
                document.getElementById('nombre').value = "";
                document.getElementById('apellido').value = "";
                document.getElementById('correo').value = "";
                document.getElementById('telefono').value = "";
                document.getElementById('comentarios').value = "";
                $("#alerta").html("Mensaje enviado!");
                click = "no";
                }
            );
        }
    }
}

function cargarFechas() {
    $("#dias").load("dias.txt");
    $("#meses").load("meses.txt");
    $("#anos").load("años.txt");
}
