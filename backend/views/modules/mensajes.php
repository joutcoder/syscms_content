<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BackEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="images/icono.jpg">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/cssFancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">

	<script src="js/jquery-2.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>


</head>

<body>

	<div class="container-fluid">

		<section class="row">

		<!--=====================================
		COLUMNA BOTONERA           
		======================================-->

			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12" id="col1">
				
				<div id="logo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
					<img src="images/logotipo.jpg" class="img-responsive" alt="Image">


				</div>

				<!--=====================================
				BOTONERA MOVIL            
				======================================-->

				<div id="botoneraMovil" class="navbar-header navbar-inverse">

					<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#botonera">

						<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	           			<span class="icon-bar"></span>

					</button>
				
				</div>

				<!--====  Fin de BOTONERA MOVIL  ====-->

				<nav id="botonera" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse text-center">
							
					<ul class="nav navbar">
		
						<li><a href="inicio.html">Inicio <span class="glyphicon glyphicon-new-window"></span></a></li>
						<li><a href="slide.html">Slide <span class="glyphicon glyphicon-new-window"></span></a></li>
						<li><a href="articulos.html">Artículos <span class="glyphicon glyphicon-new-window"></span></a></li>
						<li><a href="galeria.html">Imágenes <span class="glyphicon glyphicon-new-window"></span></a></li>
						<li><a href="videos.html">Videos <span class="glyphicon glyphicon-new-window"></span></a></li>
						<li><a href="suscriptores.html">Suscriptores <span class="glyphicon glyphicon-new-window"></span></a></li>

					</ul>

				</nav>

			</div>

		<!--====  FIn de COLUMNA BOTONERA  ====-->

		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->
		
			<!--=====================================
			 CABEZOTE             
			======================================-->

			<div id="cabezote" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					
					<ul>
						<li  style="background: #333">
							<a href="mensajes.html" style="color: #fff">
                  			<i class="fa fa-envelope"></i> 
                  			<span>1</span> 
                			</a>
						</li>

						<li  style="background: #333">
							<a href="suscriptores.html" style="color: #fff">
                  			<i class="fa fa-bell"></i>  
                  			<span>1</span>
                			</a>
						</li>

					</ul>

				</div>

				<div id="time" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					

					<div class="text-center">Lunes, 12 de Septiembre de 2016</div>
					<div class="text-center">12:56:00 pm</div>

				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
					
					<img src="images/photo.jpg" class="img-circle">
					
					<p id="member">Juanu  <span class="fa fa-chevron-down"></span>
						<br>
						<ol id="admin">
							<li><a href="perfil.html"><span class="fa fa-user"></span>Editar Perfil</a></li>
							<li><a href=""><span class="fa fa-file-text"></span>Términos y Condiciones</a></li>
							<li><a href=""><span class="fa fa-times"></span>Salir</a></li>
						</ol>

					</p>

				</div>

			</div>

			<!--====  Fin de CABEZOTE  ====-->

			<!--=====================================
			MENSAJES        
			======================================-->
			
			<div id="bandejaMensajes" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			 
				 <div >
				    <h1>Bandeja de Entrada</h1>
				    <hr>
				 </div>

				  <div class="well well-sm">
					
					<span class="fa fa-times pull-right"></span>
					<h3>De: Lorem Ipsum</h3>
					<h5>Email: correo@correo.com</h5>
				  	<p>Lorem ipsum dolor sit amet, consectetur...</p>
				  	<button class="btn btn-info btn-sm">Leer</button>

				  </div>

				  <div class="well well-sm">
					
					<span class="fa fa-times pull-right"></span>
					<h3>De: Lorem Ipsum</h3>
					<h5>Email: correo@correo.com</h5>
				  	<p>Lorem ipsum dolor sit amet, consectetur...</p>
				  	<button class="btn btn-info btn-sm">Leer</button>

				  </div>

				  <div class="well well-sm">
					
					<span class="fa fa-times pull-right"></span>
					<h3>De: Lorem Ipsum</h3>
					<h5>Email: correo@correo.com</h5>
				  	<p>Lorem ipsum dolor sit amet, consectetur...</p>
				  	<button class="btn btn-info btn-sm">Leer</button>

				  </div>

    		</div>

    		<div id="lecturaMensajes" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			 
				 <div >
				  <hr>
				   <button class="btn btn-success">Enviar mensaje a todos los usuarios</button>
				    <hr>
				 </div>

				 <form action="">

				 	<p>Para: Todos los usuarios</p>
				 	
				 	<input type="text" placeholder="Título del Mensaje" class="form-control">

					<textarea name="" id="" cols="30" rows="5" placeholder="Escribe tu mensaje..." class="form-control"></textarea>

					<input type="button" class="form-control btn btn-primary" value="Enviar">

				 </form>

				 <div class="well well-sm">
					
					<span class="fa fa-times pull-right"></span>
					<h3>De: Lorem Ipsum</h3>
					<h5>Email: correo@correo.com</h5>
				  	<p style="background:#fff; padding:10px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				  	<button class="btn btn-info btn-sm">Responder</button>

				  </div>



    		</div>

			<!--====  Fin de MENSAJES  ====-->

		<!--====  Fin de COLUMNA CONTENIDO  ====-->

		</section>
	
	</div>

	<script src="js/script.js"></script>
	
</body>

</html>