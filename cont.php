<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Regístrate para recibir noticias, novedades, cupones y estar actualizado, acerca de nuestros productos y servicios realizados en cocinas industriales."/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

<link rel="stylesheet" href="estilos2.css">
<link rel="stylesheet" href="Diseno.css">

    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>


	<title>Contacto</title>
</head>

	<body>

 <header class="header">
      <nav class="nav">
        <a href="index.html" class="logo nav-link"><img src="imagenes/logo.webp" alt="Logo H&F"></a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
        	<li class="nav-menu-item">
            <a href="index.html" class="nav-menu-link nav-link">Inicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="Productos.html" class="nav-menu-link nav-link">Productos</a>
          </li>
          <li class="nav-menu-item">
            <a href="Servicios.html" class="nav-menu-link nav-link">Servicios</a>
          </li>
          <li class="nav-menu-item">
            <a href="cont.php" class="nav-menu-link nav-link">Contacto</a>
          </li>
          <li class="nav-menu-item">
            <a href="Nosotros.html" class="nav-menu-link nav-link"
              >Nosotros</a>
          </li>
        </ul>
      </nav>
    </header>

<section class="algo suavecito" >
	<h1>Contactanos</h1>
	<h2>¿Quieres recibir novedades?</h2>
	<div class="cuadrado">
				<p>Regístrate para recibir noticias, novedades, cupones sobre nuestros productos</p>
			</div>
<div class="contenido">
	<div class="contcont">

		<div class="cajcont">

	<div class="contacto">
		
		<form action="conexion.php" method="POST">
			
			<p>
				<label>Nombre*</label>
				<input type="text" name="nombre" placeholder="Nombre" required>
			</p>

			<p>
				<label>Telefono*</label>
				<input type="tel" name="telefono" placeholder="55-5555-5555" min="0" max="12">
			</p>

			<p>
				<label>Correo</label>
				<input type="email" name="correo" placeholder="tucorreo@ejemplo.com" required>
			</p>

			<p>
				<label>Estado</label>
				<select name="estado" class="estado">
					<option value="Aguascalientes">Aguascalientes</option>
					<option value="Baja California">Baja California</option>
					<option value="Baja California Sur">Baja California Sur</option>
					<option value="Campeche">Campeche</option>
					<option value="Chiapas">Chiapas</option>
					<option value="Chihuahua">Chihuahua</option>
					<option value="Ciudad de México">Ciudad de México</option>
					<option value="Coahuila">Coahuila</option>
					<option value="Colima">Colima</option>
					<option value="Durango">Durango</option>
					<option value="Guanajuato">Guanajuato</option>
					<option value="Guerrero">Guerrero</option>
					<option value="Hidalgo">Hidalgo</option>
					<option value="Jalisco">Jalisco</option>
					<option value="Estado de México">Estado de México</option>
					<option value="Michoacán">Michoacán</option>
					<option value="Morelos">Morelos</option>
					<option value="Nayarit">Nayarit</option>
					<option value="Nuevo León">Nuevo León</option>
					<option value="Oaxaca">Oaxaca</option>
					<option value="Puebla">Puebla</option>
					<option value="Querétaro">Querétaro</option>
					<option value="Quintana Roo">Quintana Roo</option>
					<option value="San Luis Potosí">San Luis Potosí</option>
					<option value="Sinaloa">Sinaloa</option>
					<option value="Sonora">Sonora</option>
					<option value="Tabasco">Tabasco</option>
					<option value="Tamaulipas">Tamaulipas</option>
					<option value="Tlaxcala">Tlaxcala</option>
					<option value="Veracruz">Veracruz</option>
					<option value="Yucatán">Yucatán</option>
					<option value="Zacatecas">Zacatecas</option>

				</select>


				
			</p>

			<p class="excep  cajita">
				<label>mensaje</label>
				<textarea name="mensaje" rows="6" placeholder="¡Cuentanos en que podemos ayudarte!"></textarea>
			</p>

			
			<button class="excep" type="submit" name="enviar">Enviar</button>
		</form>
	</div>

	<div class="morei">
	<h3>Mas informacion</h3><br>
		<div class="redes">
			
			<ul>
				<li><a href="https://api.whatsapp.com/send?phone=5530236324&text=Hola, Nececito mas informacion!" target="_blank"><i class="fas fa-phone"></i>55-3023-6324</a></li>
				<li><a href="mailto:omar.dec@hotmail.com?Subject=Informes%20de%20producto%20o%20servicio"target="_blank"> <i class="far fa-envelope"></i> omar.dec@hotmail.com</a></li>
				<li><a href="https://www.facebook.com/Servicios-T%C3%A9cnicos-HF-103355368107895"target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>	
				<li><a href="https://www.instagram.com/serviciostecnicoshf/" target="_blank"><i class="fab fa-instagram"></i>Instagram</a></li>

			</ul>
			

		</div>
		<br>
			<p> serviciostecnicoshf.com </p>
	</div>
</div>
</div>
</div>
</section>







<footer>
<section class="redes-footer">		
	<div class="imagenes1">
	<ul>
		<li> <a href="https://www.facebook.com/ServTecnicoshf" target="_blank" class="face"><i class="fab fa-facebook-f"></i> </a> </li>
		<li> <a href="https://api.whatsapp.com/send?phone=525530236324&text=Hola, Necesito mas informacion!" target="_blank" class="whats"><i class="fab fa-whatsapp"> </i> </a></li>
	</ul>
	</div>
	<div class="copyright">
		<p>Todos los derechos reservados © 2022 Servicios H & F </p>


</div>
</div>

</section>

		</footer>



	</body>

	

</html>


