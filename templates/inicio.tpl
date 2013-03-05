<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMARCO S.A.S | Constructora </title>
<META HTTP-EQUIV="REFRESH" CONTENT="300;">

{$cont=0}
{$num=0}	
{foreach from=$respuesta item=res}
{if $respuesta[$num]=='maquinas_con_cambio_aceite'}
{$cont=$cont+1}
{/if}
{$num=$num+1}
{/foreach}

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
		var contador=('{$cont}');
		if(contador>0)
		{
		create("withIcon", { title:'Mantenimiento!', text:'Hay Varias Maquinas para Cambio de aceite Inmediato  ,<a href="logicadn.php?control=mantenimiento" class="ninguno" > Ver detalles</a> ', icon:'/emarcosas/templates/img/alert.png' },{ 
			expires:false
		});	
		}
		
	    var cuentas=('{$gastocuentacobro}');
		var cuentaop=('{$gastooperador}');
		var cuentapro=('{$gastoproveedor}');
		
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
                    
      {literal}     
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
          {/literal}     

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
