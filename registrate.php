<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>BusCheck</title>
        <link href="./css/estilo.css" rel=stylesheet>
        <link href="./css/footer.css" rel=stylesheet>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="seccion">
            <img src="./imagenes/newlogo.png" alt="logo empresa" class="logo">
            <h2>¡Únete a nosotros!</h2>
            <label >Usuario</label>
            <input type="text" class="dat"> 
            <label>Contraseña</label>
            <input type="password" class="dat">
            <label>Confirma Contraseña</label>
            <input type="password" class="dat">
            <label>Correo electronico</label>
            <input type="email" class="dat">
            <label>Confirma tu Correo Electronico</label>
            <input type="email" class="dat">
            <a href="./mapa.php" class="accesos">Acceder</a>
        </div>

<?php
    include('footer.php');
?>