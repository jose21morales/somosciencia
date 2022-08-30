<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Somos Ciencia</title>
  	<link rel="stylesheet" type="text/css" href="../css/styles.css">
  	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
  	<link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="shortcut icon" type="image/png" href="../img/adn.png" />
</head>
<body>

<div class="header-fijo">
	<div class="contenedor-div" id="contenedor-div">
    	<div class="contenedor-div--flex container">

	    <div class="contenedor-div--flex-1">
	      	<div class="logo-container">
            <img class="logo-somosciencia" id="logo" src="../img/adn.png">
		        <p class="logo-letter2">Somos</p><p class="logo-letter">Ciencia</p>
	      	</div>
    	</div>

		<div class="contenedor-div--flex-2">

			<span class="icon-bars" id="btnMenu"></span>
			<div class="nav" id="nav">
				<ul class="menu" id="menu">
					 
		       		<li class="menu__item"><a class="menu__link active" id="menu__link-blog" href="">BLOG</a></li>

					 <li class="menu__item"><a class="menu__link" id="menu__link-news" href="news.php">NOTICIAS</a></li>
		 			 					 
		       		<li class="menu__item"><a class="menu__link" id="menu__link-home" href="../">INICIO</a></li>
				</ul>
			</div>

		</div>

		</div>
	</div>
</div>

<!-- Banner -->

<div class="banner" id="banner">
  <div class="contenedor">
  	<div class="banner_content">
      	<h2 class="banner__titulo">Aqui tienes los blog más interesantes para aprender un poco más de ciencia.</h2>

      	<p class="banner__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		
      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	cillum dolore eu fugiat nulla pariatur.</p>
  	</div>

      
  </div>
</div>

<!-- End Of Banner -->

<!-- Internet Search Engine -->

<div class="search_engine-container">
    <form class="search_engine-form" action="" method="POST">
        <input type="text" name="search_engine" placeholder="Buscar" value="<?php echo $_POST['search_engine']; ?>">
        <button class="btn-button" type="submit" name="btn-search_engine"><span class="icon-search"></span></button>
    </form>
</div>

<!-- End Of Internet Search Engine -->

<div class="container-blog">

    <div class="post-contenido">
    	
    	<div class="post">
    		<div class="post_one">
		        <a href="como-viajar-mas-rapido-que-la-luz.php">
			    	<img src="../img/speed-light.jpg" alt="Foto del Articulo" class="post-img">
		        </a>    			
    		</div>
    		<div class="post_two">
		        <h1 class="post-titulo"><a class="post-titulo-link" href="como-viajar-mas-rapido-que-la-luz.php">¿Cómo se puede viajar a la velocidad de la luz?</a></h1>

			    <p class="fecha">25 de Diciembre de 2021</p>
			    
			    
		        <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	cillum dolore eu fugiat nulla pariatur.<a href="como-viajar-mas-rapido-que-la-luz.php" class="continuar">Leer más &raquo;</a>
			    </p>    			
    		</div>
        </div>

    	<div class="post">
    		<div class="post_one">
		        <a href="como-funciona-una-computadora-cuantica.php">
			    	<img src="../img/quantum-computer.jpg" alt="Foto del Articulo" class="post-img">
		        </a>    			
    		</div>
    		<div class="post_two">
		        <h1 class="post-titulo"><a class="post-titulo-link" href="como-funciona-una-computadora-cuantica.php">¿Cómo funciona la computadora cuantica de Google?</a></h1>

			    <p class="fecha">01 de Enero de 2022</p>
			    
		        <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	cillum dolore eu fugiat nulla pariatur.<a href="como-funciona-una-computadora-cuantica.php" class="continuar">Leer más &raquo;</a>
			    </p>    			
    		</div>
        </div>

      <div class="post">
        <div class="post_one">
            <a href="porque-los-agujeros-negros-son-negros.php">
            <img src="../img/black-hole.jpg" alt="Foto del Articulo" class="post-img">
            </a>          
        </div>
        <div class="post_two">
            <h1 class="post-titulo"><a class="post-titulo-link" href="porque-los-agujeros-negros-son-negros.php">¿Porque los agujeros negros son negros?</a></h1>

          <p class="fecha">15 de Enero de 2022</p>
          
            <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.<a href="porque-los-agujeros-negros-son-negros.php" class="continuar">Leer más &raquo;</a>
          </p>          
        </div>
        </div>

      <div class="post">
        <div class="post_one">
            <a href="donde-esta-el-asteroide-que-extinguio-a-los-dinosaurios.php">
            <img src="../img/dinosaurs.jpg" alt="Foto del Articulo" class="post-img">
            </a>          
        </div>
        <div class="post_two">
            <h1 class="post-titulo"><a class="post-titulo-link" href="donde-esta-el-asteroide-que-extinguio-a-los-dinosaurios.php">¿Qué paso con el asteroide que extinguió a los dinosaurios?</a></h1>

          <p class="fecha">18 de Enero de 2022</p>
          
            <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.<a href="donde-esta-el-asteroide-que-extinguio-a-los-dinosaurios.php" class="continuar">Leer más &raquo;</a>
          </p>          
        </div>
        </div>

    </div>
</div>

<footer class="main-footer">
    <div class="contenedor-footer">
      <div class="column">
        <h2 class="column-titulo">¿Porque visitarnos?</h2>
        <p class="column-texto justify">Aqui podras encontrar las noticias más recientes del mundo de la ciencia y la tecnologia asi como interesantes articulos que puedes leer para disfrutar de un buen aprendizaje y un conocimiento más amplio del mundo de la ciencia.</p>
      </div>
      <div class="column">
        <h2 class="column-titulo">Contacto</h2>
        <p class="column-texto">Tapachula, Chiapas, México</p>
        <p class="column-texto">Télefono: 962 758 44 77</p>
        <p class="column-texto">info@somosciencia.com</p>
      </div>
      <div class="column">
        <h2 class="column-titulo">Siguenos en nuestras redes</h2>
        <p class="column-texto icon-facebook">Facebook</p>
        <p class="column-texto icon-instagram">Instagram</p>
        <p class="column-texto icon-youtube-play">YouTube</p>
      </div>
      <p class="copy">&copy; 2022 somosciencia | Todos los derechos reservados</p>
    </div>
</footer>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/animar.js"></script>

</body>
</html>