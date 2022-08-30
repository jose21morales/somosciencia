var btnMenu = document.getElementById('btnMenu');
var menu = document.getElementById('menu');

var menuLink_about = document.getElementById('menu__link-blog');
var menuLink_blog = document.getElementById('menu__link-news');
var menuLink_home = document.getElementById('menu__link-home');

btnMenu.addEventListener('click', function(){
	menu.classList.toggle('mostrar');

	menuLink_about.classList.toggle('mostrar-link-blog');
	menuLink_blog.classList.toggle('mostrar-link-news');
	menuLink_home.classList.toggle('mostrar-link-home');

});