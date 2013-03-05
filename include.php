<?php

define ('RUTA','http://localhost/emarcosas/');
include_once('C:\wamp\www\emarcosas\smarty\Smarty.class.php');


##
# Tutorial Smarty @ por eZakto
##

// Incluimos el siguiente archivo, que básicamente carga toda la librería.


// Bien, ahora creamos un objeto Smarty, que llamaremos template.
$template = new Smarty;

// Y lo siguiente será configurar los directorios previamente creados.
// La ruta a estos directorios puede ser o bien relativa, o bien absoluta.
$template->template_dir = 'templates/';
$template->compile_dir = 'templates_c/';
$template->config_dir = 'configs/';
$template->cache_dir = 'cache/';
?> 
