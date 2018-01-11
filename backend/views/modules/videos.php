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
			VIDEOS ADMINISTRABLE          
			======================================-->
			
			<div id="videos" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

			<form method="post" action="validarVideo.php" enctype="multipart/form-data">

   			 	<input type="file" name="video" class="btn btn-default">
    			
    			<input type="button" value="Subir Video" class="btn btn-info">

    		</form>

    		<ul id="galeriaVideo">
    			<li>
    				<span class="fa fa-times"></span>
    				<video controls>
            			<source src="videos/video01.mp4" type="video/mp4">
           			</video>	
    			</li>

    			<li>
    				<span class="fa fa-times"></span>
    				<video controls>
            			<source src="videos/video02.mp4" type="video/mp4">
           			</video>	
    			</li>

    			<li>
    				<span class="fa fa-times"></span>
    				<video controls>
            			<source src="videos/video03.mp4" type="video/mp4">
           			</video>	
    			</li>

    			<li>
    				<span class="fa fa-times"></span>
    				<video controls>
            			<source src="videos/video04.mp4" type="video/mp4">
           			</video>	
    			</li>

    		</ul>

    		
    			<button class="btn btn-warning " style="margin:10px 30px;">Ordenar Videos</button>

    		</div>
			
			
			<!--====  Fin de VIDEOS ADMINISTRABLE  ====-->

		<!--====  Fin de COLUMNA CONTENIDO  ====-->

		</section>
	
	</div>

	<script src="js/script.js"></script>
	
</body>

</html>