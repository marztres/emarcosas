<?php
##
# Tutorial Smarty @ por eZakto
##

// Incluimos nuestro archivo base.
include('include.php');

// Conectamos y seleccionamos la base de datos.
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('emarcosas', $link);

/* Supongamos que tenemos la tabla "noticias", y esta tiene 3 campos: id, titulo, texto.
Ejecutamos una sentencia sql para seleccionar la última noticia (basándonos en la id). */
$query = mysql_query("SELECT * FROM usuarios ");

// Y de este resource, obtenemos un array asociativo.
$usuarios = mysql_fetch_assoc($query);

// Ahora repetimos los pasos anteriores.
// Sólo que esta vez, pasaremos un array en vez de una variable.

$smarty->assign('usuariox',$usuarios);
$smarty->display('contents.tpl');
?> 