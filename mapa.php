<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST['usuario'] != '') {
			echo 'Hola ' . $_POST['usuario'];
		}
	}
?>

<!DOCTYPE html>
<html lang="es">

<head>
<title>BusCheck</title>
<link href="./css/footer.css" rel=stylesheet>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="./css/estiloc.css" rel=stylesheet>
<meta name="viewport" content="width=device-width">

</head>

<body>
<nav>
    <img src="./imagenes/newlogo.png" alt="logo empresa" class="logo">
</nav>
<main>
    <div class="seccion">
        <div class="dropdown">
            <button class="dropbtn">Rutas Disponibles</button>
            <div class="dropdown-content" style="display:block">
                <a href="#">Ruta 27</a>
                <a href="#">Ruta 9</a>
            </div>
        </div>
        <div class="mapadiv">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29563.23431127074!2d-100.97079457742915!3d22.148677610111918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1573111599827!5m2!1ses-419!2smx"
                height="450" allowfullscreen="" class="mapa"></iframe>
        </div>
    </div>
</main>

<?php
include('footer.php');
?>