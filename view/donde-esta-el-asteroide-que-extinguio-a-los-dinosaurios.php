<?php

require("web_browsing_blog.php");

?>

<!-- Internet Search Engine -->
<div class="search_engine-container-padding">
<div class="search_engine-container">
    <form class="search_engine-form" action="" method="POST">
        <input type="text" name="search_engine" placeholder="Buscar" value="<?php echo $_POST['search_engine']; ?>">
        <button class="btn-button" type="submit" name="btn-search_engine"><span class="icon-search"></span></button>
    </form>
</div>
</div>
<!-- End Of Internet Search Engine -->

<div class="container-blog__view background_white">

    <div class="blog__post-contenido">
        <div class="blog__post">
	        <h1 class="blog__post-titulo">¿Qué paso con el asteroide que extinguió a los dinosaurios?</h1>
	        <p class="blog__post-fecha">18 de Enero de 2022</p>
	    
	        <img src="../img/dinosaurs.jpg" alt="Foto del Articulo" class="blog__post-img">
	        <p class="blog__post-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</div>

<div class="comentarios_white">
    <div class="comentarios" id="comentarios">
        <h3 class="comentarios-titulo">Comentarios</h3>
        <form class="form__commenter" action="" method="POST">

        		<div class="form__perfil">
        			
        			<img class="form__perfil-img" src="../img/avatar-m.jpg">
        			
        			<div class="form__perfil-content">
        	            <h4 class="form__perfil-content-user">Usuario</h4>
	                    
	                    <textarea class="textarea" name="commenter" placeholder="Escribe un comentario..."></textarea>
	                    <input type="submit" name="btn-comment" value="&laquo; Comentar &raquo;" class="btn-comentar">
        			</div>
        		</div>

        </form>

        <div class="show__commenter" id="show__commenter">

       		<img class="show__commenter-img" src="../img/avatar-m.jpg">

            <div class="show__commenter-width">
	        	<div class="show__commenter-content">
	                <div class="show__commenter-content-container">
	        	        <h4 class="show__commenter-title">jose.luis20</h4>
	        	        <p class="show__commenter-date">12 de Enero de 2022</p>
	        	        <p class="show__commenter-txt">Esta es una prueba del area de comentarios de esta página web.</p>
	                    <p class="show__commenter-answer"><a href="#">Ver comentarios</a></p>
	        	    </div>
	                <div class="show__commenter-menu__edit-container">
	                    <ul class="show__commenter-menu__edit">
	                    </ul>
	                </div>
	            </div>
        	</div>
        </div>
    </div>
</div>

<?php

require("footer.articles.php");

?>