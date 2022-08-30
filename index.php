<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Somos Ciencia</title>
  	<link rel="stylesheet" type="text/css" href="css/styles.css">
  	<link rel="stylesheet" type="text/css" href="css/fonts.css">
  	<link rel="stylesheet" type="text/css" href="css/home.css">
  	<link rel="shortcut icon" type="image/png" href="img/adn.png" />
</head>
<body>

<div class="header-fijo">
	<div class="contenedor-div" id="contenedor-div">
    	<div class="contenedor-div--flex container">

	    <div class="contenedor-div--flex-1">
	      	<div class="logo-container">
	      		<img class="logo-somosciencia" id="logo" src="img/adn.png">
		        <p class="logo-letter2">Somos</p><p class="logo-letter">Ciencia</p>
	      	</div>
    	</div>

		<div class="contenedor-div--flex-2">

			<span class="icon-bars" id="btnMenu"></span>
			<div class="nav" id="nav">
				<ul class="menu" id="menu">
					 
		       		<li class="menu__item"><a class="menu__link" id="menu__link-blog" href="view/blog.php">BLOG</a></li>

					 <li class="menu__item"><a class="menu__link" id="menu__link-news" href="view/news.php">NOTICIAS</a></li>
		 			 					 
		       		<li class="menu__item"><a class="menu__link active" id="menu__link-home" href="">INICIO</a></li>
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
      	<h2 class="banner__titulo">Las empresas privadas abaratan los costos al espacio</h2>

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
		        <a href="view/james-webb.php">
			    	<img src="img/banner.jpeg" alt="Foto del Articulo" class="post-img">
		        </a>    			
    		</div>
    		<div class="post_two">
		        <h1 class="post-titulo"><a class="post-titulo-link" href="view/james-webb.php">¡Lanzamiento del telescopio espacial James Webb!</a></h1>

			    <p class="fecha">25 de Diciembre de 2021</p>
			    
			    
		        <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	cillum dolore eu fugiat nulla pariatur.<a href="view/james-webb.php" class="continuar">Leer más &raquo;</a>
			    </p>    			
    		</div>
        </div>

    	<div class="post">
    		<div class="post_one">
		        <a href="view/life-in-europe-jupiter-moon.php">
			    	<img src="img/moon.jpeg" alt="Foto del Articulo" class="post-img">
		        </a>    			
    		</div>
    		<div class="post_two">
		        <h1 class="post-titulo"><a class="post-titulo-link" href="view/life-in-europe-jupiter-moon.php">¡Podria haber vida en Europa una de las lunas de Jupiter!</a></h1>

			    <p class="fecha">01 de Enero de 2022</p>
			    
		        <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	cillum dolore eu fugiat nulla pariatur.<a href="view/life-in-europe-jupiter-moon.php" class="continuar">Leer más &raquo;</a>
			    </p>    			
    		</div>
        </div>

    </div>
</div>

<?php

require("view/footer.php");

?>