<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST['usuario'] != '') {
			$usuario = $_POST['usuario'];
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
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">

    
</head>

<body>
<nav>
    <img src="./imagenes/newlogo.png" alt="logo empresa" class="logo">
</nav>
<main>
    <div style="display:none" id="usuario">
        <?php
            echo $usuario;
        ?>
    </div>

    <div class="seccion">
        <div class="dropdown">
            <button class="dropbtn">Rutas Disponibles</button>
            <div class="dropdown-content" style="display:block">
                <a onclick="ActualizaChat27()">Ruta 27</a>
                <a onclick="ActualizaChat9()">Ruta 9</a>
            </div>
        </div>
        <div class="mapadiv">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29563.23431127074!2d-100.97079457742915!3d22.148677610111918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1573111599827!5m2!1ses-419!2smx"
                height="450" allowfullscreen="" class="mapa"></iframe>
        </div>
    </div>
            <div id="contenedor">
                <h2>Chat</h2>
                <h3 style="text-align: center" id="ruta">Ruta - 27</h3>
                <div id="caja-chat">
                    <table>
                        <tbody id="chat-msg">

                        </tbody>
                    </table>
                </div>
    
                <div>
                    <input type="text" name="usuario" value="¡Envia un mensaje, <?php echo $usuario; ?> !" disabled>			
                    <textarea name="mensaje" placeholder="Ingresa tu mensaje" id="msg"></textarea>
                    <input type="button" name="enviar" value="Enviar" onclick="AgregaMensaje()">
                </div>
            </div>
</main>

    <script type="text/javascript">
        var tabla = document.querySelector('#chat-msg');
        var divusuario = document.querySelector('#usuario').innerHTML;
        var usuario = divusuario.trim();
        var salachat = document.querySelector('#ruta');

        function ActualizaChat9()
        {
            salachat.innerHTML = 'Ruta - 9';
            tabla.innerHTML = '';
        }
        function ActualizaChat27()
        {
            salachat.innerHTML = 'Ruta - 27';
            tabla.innerHTML = '';
        }

        function AgregaMensaje()
        {
            var d = new Date();
            if(d.getHours() < 10)
            {
                var horas = '0' + d.getHours();
            }
            else{
                var horas = d.getHours();
            }
            var hora = horas + ':' + d.getMinutes();
            if(d.getHours() < 12)
            {
                var hora = hora + ' am';
            }
            else{
                var hora = hora + ' pm';
            }
            var mensaje = document.querySelector('#msg');
            tabla.innerHTML += '<tr><td>' + hora + ' - ' + usuario + ': ' + mensaje.value + '</td></tr>';
        }

    </script>

<?php
include('footer.php');
?>