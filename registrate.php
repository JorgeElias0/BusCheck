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
        <form action="./mapa.php" method="post" class="seccion">
            <img src="./imagenes/newlogo.png" alt="logo empresa" class="logo">
            <h2>¡Únete a nosotros!</h2>
            <label >Usuario</label>
            <input type="text" class="dat" required name="usuario"> 
            <label>Contraseña</label>
            <input type="password" class="dat" required name="contraseña">
            <label>Confirma Contraseña</label>
            <input type="password" class="dat" required name="contraseña2">
            <label>Correo electronico</label>
            <input type="email" class="dat" required name="correo">
            <label>Confirma tu Correo Electronico</label>
            <input type="email" class="dat" required name="correo2">
            <input type="submit" value="Acceder" class="accesos">
        </form>

<?php
    include('footer.php');
?>