<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/facturacombustible.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

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
				Proveedores
			</p>
			<p class="tituloactual">
				Compras de combustible  
			</p>
			
			<div id="menusuperior">
            	<img src="/emarcosas/templates/img/barradebotones.jpg" width="890" height="36" alt="menusuperior" class="barradebotones"/> 
                <div class="contenedorbotones">
                	<a href="logicadn.php?control=inicio" class="izquierda inicio"></a>
                	<a href="/emarcosas/logicadn.php?control=maquinaria" class="izquierda maquinas"></a>
                    <a href="logicadn.php?control=mantenimiento" class="izquierda mantenimiento"></a>
                    <a href="" class="izquierda contratos"></a>
                    <a href="/emarcosas/logicadn.php?control=operadores" class="izquierda operadores"></a>
                    <a href="logicadn.php?control=proveedor" class="izquierda proveedores"></a>
                    <a href="#" class="izquierda cuentas"></a>
                    <a href="#" class="izquierda estadisticas"></a> 
                </div>  
               	
                <a href="javascript:history.back()" class="botonagregar">
                	<img src="/emarcosas/templates/img/botonvolver.png" width="23" height="23" /> 
                </a>
                <a href="javascript:history.back()" class="volver" >
                	<p class="volverinfo">
						Volver a el Proveedor   
					</p> 
               	</a>
               
                     
            
            </div>


</div>


<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información de la Maquina
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            	<form name="generar" method="post" action="logicadn.php?control=er" ONSUBMIT='return pregunta();' >
				<p class="izquierda negrita tituloinfoid">  Id </p> 
                <input type="text" value="{$id}"  class="izquierda " />
   				
   				<p class="izquierda negrita tituloinfotipo" >  nombre </p>
   				<input type="text" value="{$nombrepro}" class="izquierda " />
                
                <p class="izquierda negrita tituloinfotipo" > Credito </p>
                <input type='text' value='{$saldo}'  class="izquierda" />
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Registro de Compras de combustible
                </p>
            </td>	
		</tr>
    </table>
    <table class="controldemaquinas">
    	<tr>
            <td 	class='seleccionar fondocabeza'>	<b>Id Factura</td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Id Trabajo</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Forma de Pago</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Valor</b></td>
			<td  	class='registromaquina fondocabeza'><b>Fecha</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Lugar</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Estado</b></td>
            <td  	class='eliminar fondocabeza'>	    <b>Pagar</b></td>
            <td  	class='eliminar fondocabeza'>	    <b>Eliminar</b></td>
		</tr> 
		<tr>

		{$num=0}    
		{foreach from=$idfactura item=factura}
		<tr><td >{$factura}</td>
		<td>{$idtrabajo[$num]}</td>
		<td>{$forma_pago[$num]}</td>
		<td>{$valor_co[$num]}</td>
		<td>{$fecha_trabajo[$num]}</td>
		<td>{$nombre_trabajo[$num]}</td>
		<td>{$estado[$num]}</td>
		{if $estado[$num] == "pendiente"}
		<td>
        	<a href="logicadn.php?control=pagarfc" class="tabla">Pagar</a></td>
		{else}
		<td>
        	<a href="logicadn.php?control=cancelarfc" class="tabla">Cancelado</a></td>
		{/if}
		<td>
        	<a href="logicadn.php?control=eliminarfc" class="tabla"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" </a></a></td>
		</tr>
		{$num=$num+1}
		{/foreach}
		</tr>
    </table>
		




   
 
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