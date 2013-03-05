<?php
$conexion= mysql_connect('localhost','root','root');
mysql_select_db("emarcosas", $conexion);
if(!$conexion){
die("No se ha podido conectar ". mysql_error());	
}
?>