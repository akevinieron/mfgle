<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Microfundicion FGLE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Overlock:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/live.js"></script>
	<script type="text/javascript">

	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36182944-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo span6">
					<a href="index.html"><img src="images/logo.png" alt="Microfundicion FGLE Logo" /></a>
				</div>
				<nav class="navbar span6">
					<ul class="nav">
						<li><a href="index.html">Inicio</a></li>
						<li><a href="nosotros.html">Nosotros</a></li>
						<li><a href="productos.html">Productos</a></li>
						<li><a href="#" class="current">Contactos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="container contenido">
		<div class="row">
			<div class="span4 offset1">
				<h2>Contacto</h2>
				<form method="post">
					<label for="form_nombre">Nombre:</label>
					<input type="text" placeholder="Escriba su nombre..." id="form_nombre" name="nombre">
					<label for="form_email">Correo:</label>
					<input type="text" placeholder="Escriba su correo..." id="form_email" name="email">
					<label for="form_mensaje">Mensaje:</label>
					<textarea name="mensaje" id="form_mensaje" cols="30" rows="5" placeholder="Escriba su mensaje"></textarea>
					<br>
					<button class="btn btn-primary envio_contacto">Enviar</button>
				</form>
			</div>
			<div class="span6">
				<h2>Encuentranos</h2>
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=plaza+central+Santo+Domingo&amp;aq=&amp;sll=18.496077,-69.9193&amp;sspn=0.189492,0.308647&amp;g=Santo+Domingo,+Distrito+Nacional,+Dominican+Republic&amp;ie=UTF8&amp;hq=plaza+central&amp;hnear=Santo+Domingo,+Los+Alcarrizos,+Santo+Domingo+Province,+Dominican+Republic&amp;t=m&amp;ll=18.48197,-69.959049&amp;spn=0.028491,0.036478&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.es/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=plaza+central+Santo+Domingo&amp;aq=&amp;sll=18.496077,-69.9193&amp;sspn=0.189492,0.308647&amp;g=Santo+Domingo,+Distrito+Nacional,+Dominican+Republic&amp;ie=UTF8&amp;hq=plaza+central&amp;hnear=Santo+Domingo,+Los+Alcarrizos,+Santo+Domingo+Province,+Dominican+Republic&amp;t=m&amp;ll=18.48197,-69.959049&amp;spn=0.028491,0.036478&amp;z=14" style="color:#0000FF;text-align:left">Ver Mapa Grande</a></small>
			</div>
		</div>
	</div>
	<footer class="container">
		<div class="row">
			<div class="span5 offset1">
				<p>&copy; Todos los derechos reservados 2012-2013<br />Desarrollado por: <a href="http://kevinjimenezweb.com" class="desarrollador">Kevin Jimenez</a></p>
			</div>
			<div class="span3 offset3">
				<img src="images/logo_blanco.png" alt="Microfundicion FGLE Logo Blanco">
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.envio_contacto').click(function(){
				var nombre = $("#form_nombre").val();
					email = $("#form_email").val();
					validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
					mensaje = $("#form_mensaje").val();

				if (nombre == "") {
					$("#form_nombre").focus();
					return false;
				}else if (email == "" || !validacion_email.test(email)) {
					$("#form_email").focus();
					return false;
				}else if (mensaje == "") {
					$("#form_mensaje").focus();
					return false;
				}else{
					var datos = 'nombre='+ nombre +'&email='+ email +'&mensaje'+ mensaje;
					$.ajax({
						type: "POST",
						url: "proceso_form.php",
						data: datos,
						success: function(){
							alert('Su mensaje fue enviado');
						},
						error: function(){
							alert('Ocurrio un error enviando su mensaje!!');
						}
					});
					return false;
				}
			});
		});
	</script>
</body>
</html>


