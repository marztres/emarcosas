<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>validausuario</title>
</head>

<body>
<?php
/*!!!!!!!!_ _ _ Validación del Usuario _ _ _!!!!!!!!!!!!!! */


require('include.php'); //incluye la configuracion de smarty
include_once('varios/gestor.php');// Incluye la capa de datos de la bd
session_start(); /*Inicio de Sesión*/
$usuario=$_POST['usuario']; /* Capturo el usuario por la URL */
$clave=$_POST['clave']; /* Capturo la Clave  */
$gestor= new gestor(); /* Creacion de un nuevo objeto gestor de la BD */
$gestor->conectar(); /* llamo al metodo conectar Realizo una conexion a la BD */
$gestor->consultar($usuario,$clave); /* llamo al metodo consultar donde Consulto si el usuario existe */ 
$gestor->cerrarConexion();/* llamo al metodo cerrar conexion Cierrro la conexión en la base de datos */

/*____________________________________________________________________________________________________*///Fin Valida Usuario




?>
</body>
</html>