<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Fli Agencia" content="aca debe ir la description de la pagina servicios no mayor a 156">
	<title>Escribenos-contacto</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="icon" type="image/png" href="imagenes/embarcacion.png">
<link rel="stylesheet" type="text/css" href="estilos.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen|Libre+Baskerville|Rubik|Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<div class="menu">
	     <div class="row header-nosotros">

			         <p class="logo">Fli SAS</p>
			         <img src="imagenes/menu.png" class="menu-icon" alt="">

			        <nav>
				       <ul>
				          <li><a href="index.php">Inicio</a></li>
				          <li><a href="nosotros.php" target="_black">Nosotros</a></li>
				          <li><a href="servicios.php" target="_black">Servicios</a></li>			  
				          <li><a href="contacto.php">Contacto</a></li>
			          </ul>
			        </nav>

		        <div class="btn-group boton-registro">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acceso
                     </button>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="#">Registrese</a>
                         <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Ingrese</a>
                        </div>
                 </div>

	      </div>
	      
   </div>

</header>
<br>
<br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-msg">
				<h2 class="titulo-registro brb">Escribenos</h2>
                <p class="pto">Te responderemos en el menor tiempo posible</p>
                 <form  method="POST" action="database.php" class="login" enctype="multipart/form-data">
                 	<div class="div_form">
                      <div class="label-float label-size">
                        <label class="mtm">Nombres:
                              <span class="requerido">*</span>
                        </label>
                      </div>
                      <div class="label-float input-size">
                        <input type="text" name="nombres" placeholder="Ingrese sus nombres" required="">
                      </div>
                    </div>
				    <div class="div_form">
                      <div class="label-float label-size">
                          <label class="mtm">Email:
                              <span class="requerido">*</span>
                          </label>
                       </div>
                      <div class="label-float input-size">
                        <input type="email" name="email" placeholder="Correo electronico" required="">
                      </div>
                    </div>
                    <div class="div_form">
                      <div class="label-float label-size">
                        <label class="mtm">Telefono:
                              <span class="requerido">*</span>
                        </label>
                      </div>
                      <div class="label-float input-size">
                        <input type="number" name="telefono" placeholder="Ingrese su telefono" required="">
                      </div>
                    </div>
                    <div class="div_form">
                      <div class="label-float label-size">
                        <label class="mtm">Mensaje:
                              <span class="requerido">*</span>
                        </label>
                      </div>
                      <div class="label-float input-size">
                        <textarea name="mensaje" placeholder="Escriba por favor su mensaje"></textarea>
                      </div>
                    </div>
                    
                   <input type="submit" value="Enviar">
              </form> 
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 contac-info">
				<ul>
					<h2 class="servicios-h2">Cesar Quintero</h2>
                    <p class="contact-p">clquintero@flisas.com.co | 300-413-77-14 </p>
                    <h2 class="servicios-h2">Cesar Camargo</h2>
                    <p class="contact-p">ccamargo@flisas.com.co | 300-413-77-14 </p>
                    <h2 class="servicios-h2">Juan Salamanca</h2>
                    <p class="contact-p">ccamargo@flisas.com.co | 300-413-77-14 </p>
                    <h2 class="servicios-h2">Dirección</h2>
                    <p class="contact-p">Calle 14 # 12 - 12</p>
				</ul>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15906.596930896832!2d-74.0652613!3d4.656487499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1583680064406!5m2!1ses-419!2sco" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<img src="imagenes/contacto.jpg">
			</div>
		</div>
	</div>
</section>
<footer class="footer-servicios">
	<section id="socialmedia">
		<div class="contenedor">
			<div class="redes">
			      <a href="https://www.facebook.com/miah.pasteleria/" target="_blank"><img src="imagenes/facebook.png"></a>
			      <a href="https://www.instagram.com/miah.pasteleria/" target="_blank"><img src="imagenes/instagram.png"></a>
			      <a href="link de linkedd" target="_blank"><img src="imagenes/linkedin.png"></a>
			</div>
			<div class="parrafo">
				<p>2020 FLI SAS | Operador Logistico. Todos los derechos reservados</p>
			</div>
		</div>
	</section>
</footer>
</body>
</html>