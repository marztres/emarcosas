<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/control de maquinaria.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>
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
		
	    create("withIcon", { title:'Mantenimiento!', text:'Hay Varias Maquinas para Cambio de aceite Inmediato. <a href="#" class="ui-notify-close">Cerrar.</a>', icon:'/emarcosas/templates/img/alert.png' },{ 
			expires:false
		});

		create("sticky#", { title:'Control de Proveedores', text:'Proveedores con credito pendiente.'},{ expires:false });
		create("sticky", { title:'Control de Cuentas', text:'Hay Cuentas por pagar Pendientes.'},{ expires:false });
			
		
		
		create("sticky#", { title:'Notificaciones de mantenimiento', text:'Hay Maquinas con cambio de aceite inmediato.'},{ expires:20000 });
	    create("default#", { title:'Control de Maquinas', text:'Se agrego la Maquina Correctamente'});
        
		create("withIcon#", { title:'Cambio de aceite!', text:'Hay Varias Maquinas con estado Cambio de aceite Inmediato. <a href="#" class="ui-notify-close">Cerrar.</a>', icon:'/emarcosas/templates/img/alert.png' },{ 
			expires:false
		});
	
		
	
	
	
 
});
</script>
<!--Notificaciones -->

</head>

<body>


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

			<div id="cabecera"> 
				<a href="#" class="izquierda" id="logo" >  </a>
				
                <a href="#" class="enlacesoporte" >
				 	<span class="titulosoporte">  SOPORTE </span> 
				 	<img src="/emarcosas/templates/img/soporte.png" width="94" height="69" class="botonsoporte"/>
 				</a> 






			<p class="titulocontrol">
				Maquinaria 
			</p>
			<p class="tituloactual">
				Control de maquinas  
			</p>
			
			<div id="menusuperior">
            	<img src="/emarcosas/templates/img/barradebotones.jpg" width="890" height="36" alt="menusuperior" class="barradebotones"/> 
                <div class="contenedorbotones">
                	<a href="logicadn.php?control=inicio" class="izquierda inicio"></a>
                	<a href="#" class="izquierda maquinas"></a>
                    <a href="logicadn.php?control=mantenimiento" class="izquierda mantenimiento"></a>
                    <a href="#" class="izquierda contratos"></a>
                    <a href="#" class="izquierda operadores"></a>
                    <a href="#" class="izquierda proveedores"></a>
                    <a href="#" class="izquierda cuentas"></a>
                    <a href="#" class="izquierda estadisticas"></a> 
                </div>  
                <div class="contenedorbotonesbarra" >
                  	<a href="logicadn.php?control=nuevamaquina" class="izquierda botonagregar"><img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23" </a>
                    <a href="logicadn.php?control=nuevamaquina" class="izquierda agregar">Agregar Maquina</a>
                     
                </div>  
            
            </div>
</div>

<div id="login">

<table class='controldemaquinas'>
   			<tr>
 			  <td class='tipomaquina fondocabeza' >Tipo</td>
              <td class='idmaquina fondocabeza' > Id</td> 
              <td class='trabajomaquina fondocabeza' > Trabajo</td>
              <td class='registromaquina fondocabeza'> Registro</td>
   			  <td class='notificacion fondocabeza'>Aceite</td>
              <td class='ultimotrabajo fondocabeza'>Ultimo Trabajo</td>
              <td class='eliminar fondocabeza'>	Eliminar</td>
   			</tr>
		
   			<tr>
  				{$num=0}    
  				{foreach from=$maquinas item=tipos}
  				{if $num>=0}     
  			</tr >
            <tr>
				<td>{$tipos}</td>
				<td>{$codigomaquinas[$num]}</td>
  				<td><a href='logicadn.php?control=trabajo&&id={$codigomaquinas[$num]}' class='tabla'> Asignar Trabajo</a></td>
  				<td><a href='logicadn.php?control=registro&&id={$codigomaquinas[$num]}' class='tabla'> Registro de Trabajo</a></td>
  				<td class="aceite">
            		<a href='logicadn.php?control=mantenimiento&& cm={$codm[$num]}' >{$respuesta1[$num]}</a></td>
  				<td>{$trabajos[$num]}</td>
  				<td class="basura"><a href="logicadn.php?control=emaq&& idmaq={$codigomaquinas[$num]}" onclick="return cofirmareliminar()" class='tabla'><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" </a></a></td>
	 			{$num=$num+1}
 				{/if}    
 				{/foreach}
       		</tr>
		</table>  

		<!--<a href="destruirsesion.php"> Cerrar Sesión </a> -->
        
        	
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


   
 
</div><!--fin login -->


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