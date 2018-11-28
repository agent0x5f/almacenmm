<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienvenido a la página web de El equipo Herrera</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<script type="text/javascript" src="js/js.js"></script>
</head>

<body>
	<script type="text/javascript">
	Login();
	</script>

	<header>
	<a href="index.php"><img id="img1" src="imagenes/titulo_web.png"></a>
	</header>

	<nav>
		<ul class="menu">
			<li><a href="./index.php">Inicio </a></li>
  			<li><a href="./quienes_somos.html"> Quienes somos </a></li>
  			<li><a href="./contacto.html"> Contacto </a></li>
  			<li><a href="./servicios.html"> Servicios </a></li>
<!-- 		<li><a href="./contratar.php"> Contratar </a></li>  -->
    		<li><a href="./chat.php"> Chat online </a></li>   
  			<li class="derecha"><a href="./registrarse.php"> Registrarse </a></li> 	
  			<li class="derecha"><a href="./login.php"> Login </a></li>		
		</ul>
	</nav>

	<section>
		<br>
		<p id="parrafo1">
			CHAT ONLINE
			TIENES DUDAS?
			HABLA CON NUESTRO PERSONAL! :)			
		</p>
		<br>

	</section>	

	<section>
		<form>
			<fieldset>
				<legend>Chat</legend>
				<br>
				<textarea maxlength="2000" readonly="true" style="font-family: cambria"></textarea>
				<br>
				<br>
				<input type="text" name="mensaje" maxlength="200" style="font-size: 14px" size="30">
				<input type="submit" value="Enviar">
			</fieldset>			
		</form>
	</section>

	<section>
		<hr>
   		<img class="galeria" src="imagenes/computadora.jpg">
      	<img class="galeria" src="imagenes/labtop.jpg">
		<img class="galeria" src="imagenes/celular.jpg">
		<img class="galeria" src="imagenes/aire_acondicionado.jpg">
		<img class="galeria" src="imagenes/licuadora.jpg">
		<img class="galeria" src="imagenes/bomba_agua.gif">
		<img class="galeria" src="imagenes/lavadora.png">		
		<hr>
	</section>

	<footer>
		<br>
		<br>
		<br>
		Hecho por Miguel Mateo Hernández Vargas
	</footer>

	<script type="text/javascript">
	var slideIndex = 0;
    carro();
    </script>

</body>
</html>