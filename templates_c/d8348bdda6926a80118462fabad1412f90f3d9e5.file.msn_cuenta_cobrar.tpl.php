<?php /* Smarty version Smarty-3.1.10, created on 2012-09-25 01:31:22
         compiled from "templates\msn_cuenta_cobrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250865061096ad01328-67907002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8348bdda6926a80118462fabad1412f90f3d9e5' => 
    array (
      0 => 'templates\\msn_cuenta_cobrar.tpl',
      1 => 1345787032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250865061096ad01328-67907002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5061096ad623f6_87335020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5061096ad623f6_87335020')) {function content_5061096ad623f6_87335020($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cuenta Cobro</title>
</head>

<body>

</body>
</html>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>



<link href="/emarcosas/templates/css/mensajes.css"  type="text/css"  rel="stylesheet" media="all"  /> 


<!--notificaciones -->

<link type="text/css" rel="stylesheet" href="/emarcosas/templates/Jquery/style.css" />
<link type="text/css" rel="stylesheet" href="/emarcosas/templates/Jquery/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="/emarcosas/templates/Jquery/ui.notify.css" />
<script src="/emarcosas/templates/Jquery/jquery.js" type="text/javascript"></script>
<script src="/emarcosas/templates/Jquery/jquery-ui.js" type="text/javascript"></script>
<script src="/emarcosas/templates/jquery/jquery.notify.js" type="text/javascript"></script>


<script type="text/javascript">
function create( template, vars, opts ){
	return $container.notify("create", template, vars, opts);
}

$(function(){
	
	$container = $("#container").notify();
	
	// aqui creamos las notificaciones correspondientes
	//se configura el tiempo globar de expiracion en jquery.notify.js
		create("default", { titulo:'Emarco Systems', text:' <?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
 '});

});
</script>
<!--Notificaciones -->


<script type="text/javascript">
//<![CDATA[
// 1000 = 1 segundo
var mins = 2;
var segs = 59;
var s;
function minutos(){
document.getElementById("minutos").innerHTML=mins;
if(mins == 0){
var dm = clearInterval(m);
s = setInterval('segundos()', 1000);
}
mins--;
}
 
function segundos(){
document.getElementById("segundos").innerHTML=segs;
if(segs == 0){
location.reload();
var ds = clearInterval(s);
}
segs--;
}
 
var m = setInterval('minutos()', 1000);
 
//]]>
</script>

<script language="JavaScript" type="text/javascript">

var pagina="logicadn.php?control=cuentas_cobro"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 4000);

</script>



</head>

<body>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />


 <center>  <p class="red">  Se redireccionara automaticamente en <span id="minutos">3</span>   segundos. </p> </center>








<!--- container to hold notifications, and default templates --->
	<div id="container" style="display:none; top:40; left:0; bottom:auto; margin:auto; width:400px;">
		
		<div id="default">
			<h1>#{titulo}</h1>
			<p>#{text}</p>
		</div>
	
			
	</div> <!--fin container -->





</body>
</html>
<?php }} ?>