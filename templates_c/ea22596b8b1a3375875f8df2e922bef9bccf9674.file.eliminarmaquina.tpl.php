<?php /* Smarty version Smarty-3.1.10, created on 2013-01-22 00:24:37
         compiled from "templates\eliminarmaquina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858750fddc45819c88-81220551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea22596b8b1a3375875f8df2e922bef9bccf9674' => 
    array (
      0 => 'templates\\eliminarmaquina.tpl',
      1 => 1345518274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858750fddc45819c88-81220551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eliminamaq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50fddc459cce45_10678899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fddc459cce45_10678899')) {function content_50fddc459cce45_10678899($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		create("default", { title:'Emarco Systems', text:' <?php echo $_smarty_tpl->tpl_vars['eliminamaq']->value;?>
  '});
        
		
	    create("withIcon#", { title:'Mantenimiento!', text:'Hay Varias Maquinas para Cambio de aceite Inmediato. <a href="#" class="ui-notify-close">Cerrar.</a>', icon:'/emarcosas/templates/img/alert.png' },{ 
			expires:false
		});

		create("sticky#", { title:'Control de Proveedores', text:'Proveedores con credito pendiente.'},{ expires:false });
		create("sticky#", { title:'Control de Cuentas', text:'Hay Cuentas por pagar Pendientes.'},{ expires:false });
			
		
		
		create("sticky#", { title:'Notificaciones de mantenimiento', text:'Hay Maquinas con cambio de aceite inmediato.'},{ expires:20000 });
	    create("default#", { title:'Control de Maquinas', text:'Se agrego la Maquina Correctamente'});
        
		create("withIcon#", { title:'Cambio de aceite!', text:'Hay Varias Maquinas con estado Cambio de aceite Inmediato. <a href="#" class="ui-notify-close">Cerrar.</a>', icon:'/img/alert.png' },{ 
			expires:false
		});
	
		
	
	
	
 
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

var pagina="logicadn.php?control=maquinaria"
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
	<div id="container" style="display:none; top:40; left:0; bottom:auto; margin:auto; width:280px;">
		
		<div id="default">
			<h1>#{title}</h1>
			<p>#{text}</p>
		</div>
		<div id="sticky">
			<a class="ui-notify-close ui-notify-cross" href="#">x</a>
			<h1>#{title}</h1>
			<p>#{text}</p>
		</div>
		
		<div id="withIcon">
			<a class="ui-notify-close ui-notify-cross" href="#">x</a>
			<div style="float:left;margin:0 10px 0 0"><img src="#{icon}" alt="warning" /></div>
			<h1>#{title}</h1>
			<p>#{text}</p>
		</div>
			
	</div> <!--fin container -->






</body>
</html>
<?php }} ?>