$(function () {
    var nombrePagina = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    if (nombrePagina == "atracciones.php") {
        document.getElementById("atracciones").className = "active-menu";
    }else if (nombrePagina == "fiestasEventos.php") {
        document.getElementById("fiestasEventos").className = "active-menu";
    }else if (nombrePagina == "kitchen.php") {
        document.getElementById("kitchen").className = "active-menu";
    }else if (nombrePagina == "promociones.php") {
        document.getElementById("promociones").className = "active-menu";
    }else if (nombrePagina == "elParque.php") {
        document.getElementById("elParque").className = "active-menu";
    }else if (nombrePagina == "contactenos.php") {
        document.getElementById("contactenos").className = "active-menu";
    }
});

function enviarMensaje() {
    var Nombre = document.getElementById('nombre').value;
    var Apellido = document.getElementById('apellido').value;
    var Correo = document.getElementById('correo').value;
    var Telefono = document.getElementById('telefono').value;
    var Comentarios = document.getElementById('comentarios').value;
    if (Nombre === "" || Nombre === null || Apellido === "" || Apellido === null || Correo === "" || Correo === null || Telefono === "" || Telefono === null || Comentarios === "" || Comentarios === null) {
        alert("Llenar todos los datos");
        return false;
    }else {
        $("#alerta").html("Enviando mensaje...");
        $.ajax({
            type: 'POST',
            url: 'enviarMensaje.php',
            data:('nombre='+Nombre+'&apellido='+Apellido+'&correo='+Correo+'&telefono='+Telefono+'&comentarios='+Comentarios)
        }).done(function(respuesta){
            document.getElementById('nombre').value = "";
            document.getElementById('apellido').value = "";
            document.getElementById('correo').value = "";
            document.getElementById('telefono').value = "";
            document.getElementById('comentarios').value = "";
            $("#alerta").html("Mensaje enviado!");
            }
        );
    }
}
