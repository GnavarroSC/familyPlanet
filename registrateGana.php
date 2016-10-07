
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body>
        <input type="text" id="nombreRG" placeholder="Nombre">
        <div class="form-group">
            <label for="nombreRG">Nombre</label>
            <input type="email" class="form-control" id="nombreRG" placeholder="Nombre">
        </div>
        <input type="text" id="apellidoRG" placeholder="Apellido">
        <input type="text" id="cedulaRG" placeholder="Cédula">
        <input type="text" id="telefonoRG" placeholder="Teléfono"><br>
        <label for="">Género</label>
        <input type="radio" name="genero" value="Masculino">Masculino<br>
        <input type="radio" name="genero" value="Femenino">Femenino<br>
        <select id="dias" class="">
        </select>
        <select id="meses" class="">
        </select>
        <select id="anos" class="">
        </select>
        <input type="button" name="name" value="">
        <?php include 'scripts.php'; ?>
    </body>
</html>
