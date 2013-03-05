<?php /* Smarty version Smarty-3.1.10, created on 2012-09-21 11:42:39
         compiled from "templates\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2849505c98fff0aa52-72969241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3ee78cad867d5c8b95c398d0eee4d30f1b0365' => 
    array (
      0 => 'templates\\inicio.tpl',
      1 => 1346907949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2849505c98fff0aa52-72969241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'respuesta' => 0,
    'num' => 0,
    'cont' => 0,
    'gastocuentacobro' => 0,
    'gastooperador' => 0,
    'gastoproveedor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c99000ed386_43497786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c99000ed386_43497786')) {function content_505c99000ed386_43497786($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMARCO S.A.S | Constructora </title>
<META HTTP-EQUIV="REFRESH" CONTENT="300;">

<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>	
<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['respuesta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['respuesta']->value[$_smarty_tpl->tpl_vars['num']->value]=='maquinas_con_cambio_aceite'){?>
<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable($_smarty_tpl->tpl_vars['cont']->value+1, null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
<?php } ?>

<link href="/emarcosas/templates/css/Estilos_emarco.css"  type="text/css"  rel="stylesheet" media="all"  /> 


<!--notificaciones -->

<link type="text/css" rel="stylesheet" href="/emarcosas/templates/Jquery/style.css" />
<link type="text/css" rel="stylesheet" href="/emarcosas/templates/Jquery/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="/emarcosas/templates/Jquery/ui.notify.css" />
<script src="/emarcosas/templates/Jquery/jquery.js" type="text/javascript"></script>
<script src="/emarcosas/templates/Jquery/jquery-ui.js" type="text/javascript"></script>
<script src="/emarcosas/templates/jquery/jquery.notify.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	
<script type="text/javascript">
function create( template, vars, opts ){
	return $container.notify("create", template, vars, opts);
}

$(function(){
	
	$container = $("#container").notify();
	
	// aqui creamos las notificaciones correspondientes
	//se configura el tiempo globar de expiracion en jquery.notify.js
		create("default", { title:'Emarco Systems', text:'Notificaciones automaticas del sistema.'});
		var contador=('<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
');
		if(contador>0)
		{
		create("withIcon", { title:'Mantenimiento!', text:'Hay Varias Maquinas para Cambio de aceite Inmediato  ,<a href="logicadn.php?control=mantenimiento" class="ninguno" > Ver detalles</a> ', icon:'/emarcosas/templates/img/alert.png' },{ 
			expires:false
		});	
		}
		
	    var cuentas=('<?php echo $_smarty_tpl->tpl_vars['gastocuentacobro']->value;?>
');
		var cuentaop=('<?php echo $_smarty_tpl->tpl_vars['gastooperador']->value;?>
');
		var cuentapro=('<?php echo $_smarty_tpl->tpl_vars['gastoproveedor']->value;?>
');
		
        if(cuentas>0)
		{
		create("sticky", { title:'Cuentas Por Cobrar', text:'Saldo Pendiente:'+cuentas},{ expires:false });
        }
		
		if(cuentaop>0)
		{
		create("sticky", { title:'Control de Operadores', text:'Saldo Pendiente:'+cuentaop},{ expires:false });
		}
		
		if(cuentapro>0)
		{
		create("sticky", { title:'Control de Proveedores', text:'Saldo Pendiente:'+cuentapro},{ expires:false });	
		}
		
		
		
		create("sticky#", { title:'Notificaciones de mantenimiento', text:'Hay Maquinas con cambio de aceite inmediato.'},{ expires:20000 });
	    
        
		create("withIcon#", { title:'Cambio de aceite!', text:'Hay Varias Maquinas con estado Cambio de aceite Inmediato. <a href="#" class="ui-notify-close">Cerrar.</a>', icon:'/emarcosas/templates/img/alert.png' },{ 
			expires:false
		});
	
		
	
	
	
 
});
</script>
<!--Notificaciones -->

</head>

<body>
	
<div id="total"> 
<div id="espacio">



</div> 


<div id="cuerpo"> 


<div id="contenido"> 

<div id="cabecera"> 


<a href="#" class="izquierda" id="logo" >  </a>

<a href="#" class="enlacesoporte" >
 <span class="titulosoporte">  SOPORTE </span> 
<img src="/emarcosas/templates/img/soporte2.png" width="94" height="69" class="botonsoporte"/>
 </a> 


<div id="separador" class="izquierda">
<img src="/emarcosas/templates/img/separador.png" alt="separador" width="918" height="16" /> 

</div> 
<div id="usuario" > 
                        	
                             <span class="usuariotexto"> Usuario |</span> 
                            <a href="destruirsesion.php" class="enlaces link"> Cerrar Sesión </a> 
</div> 

</div>

<div id="menu">

            	<a href="/emarcosas/logicadn.php?control=maquinaria" class="maquinas"><img   src="/emarcosas/templates/img/Maquinas-botonprincipal.png" width="280" height="235"  alt="control de maquinaria" /></a>
                <a href="/emarcosas/logicadn.php?control=contratos" class="contratos"><img   src="/emarcosas/templates/img/Contratos-botonprincipal.png" width="299" height="239"  alt="control de contratos" /></a>
                <a href="/emarcosas/logicadn.php?control=estadisticas_ingresos" class="estadisticas"><img   src="/emarcosas/templates/img/Estadisticas-botonprincipal.png" width="296" height="226" alt="estadisticas" /></a>
                <a href="/emarcosas/logicadn.php?control=operadores" class="operadores"><img   src="/emarcosas/templates/img/operadores-botonprincipal.png" width="277" height="219"  alt="notificaciones" /></a>
                <a href="/emarcosas/logicadn.php?control=proveedor" class="proveedores"><img   src="/emarcosas/templates/img/proveedores-botonprincipal.png" width="269" height="226"  alt="operadores" /></a>               
                <a href="/emarcosas/logicadn.php?control=controlcuentas" class="cuentas"><img   src="/emarcosas/templates/img/cuentas-botonprincipal.png" width="247" height="220"  alt="pagos" /></a>
                    
           
 	<!--- container to hold notifications, and default templates --->
	<div id="container" style="display:none">
		
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
               

</div>


<div id="barra"> 
<p class="izquierda legal" ><a href="#" class="link" >  Informacíon legal </a> <a class="guiontexto"> | </a>  <a href="#" class="link" >  Soporte Tecnico </a> </p>

</div>


</div> 





</div>


<div id="pie"> 


</div>

</div>





</body>
</html>
<?php }} ?>