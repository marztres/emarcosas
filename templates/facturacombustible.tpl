<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/facturacombustible.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable({
                    "aoColumnDefs": [ 
                        { "bSearchable": false, "bVisible": false, "aTargets": [ 1,2 ] }
                    ],"aaSorting": [[ 6, "desc" ]] } );
				
			} );
		</script>
<!--tablas dinamicas -->
</head>

<body>


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

			<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    <!--titulo de modulo -->
                    <h1 class="head-h1cen izquierda" > Proveedor </h1>
				    <!--fin titulo de modulo -->
                    
                    <!-- usuario + soporte -->
                    <div id="head-divder" class="izquierda"> 
                    	<!--usuario -->
                    	<div id="head-divder-usuarios" class="izquierda"> 
                        	<span class="estiloinline"> Usuario |</span> 
                            <a href="destruirsesion.php" class="enlaces"> Cerrar Sesión </a> 
                        </div>  
                    	<!--usuario -->
                        
                    	<!--soporte -->
                    	<div id="head-divder-soporte" class="izquierda"> 
                    		<a href="#" class="iconosoporte izquierda enlaces" > </a> 
                        	<a href="#" class="linksoporte izquierda enlaces" > Soporte </a> 
                    	</div>
                    	<!--fin soporte -->
					</div>
                    <!--fin usuario + soporte -->
                	
                    <!--titulo seccion -->
                    <h2 class="head-h2down izquierda noflotante"> Compras de combustible  </h2>
			    	<!-- fin titulo seccion -->
                </div>
				<!--fin head -->
                
                
                <!-- contenedor de enlaces -->
                <div id="divenlaces">
                	<a href="logicadn.php?control=inicio" class="inicio boton-espacio-alto"></a>
                	<a href="logicadn.php?control=maquinaria" class="maquinas boton-espacio-alto"></a>
                    <a href="logicadn.php?control=mantenimiento" class="mantenimiento boton-espacio-alto"></a>
                    <a href="logicadn.php?control=contratos" class="contratos boton-espacio-alto"></a>
                    <a href="logicadn.php?control=operadores" class="operadores boton-espacio-alto"></a>
                    <a href="logicadn.php?control=proveedor" class="proveedores boton-espacio-alto"></a>
                    <a href="/emarcosas/logicadn.php?control=controlcuentas" class="cuentas boton-espacio-alto"></a>
                    <a href="/emarcosas/logicadn.php?control=estadisticas_ingresos" class="estadisticas boton-espacio-alto"></a> 
                </div>  
                <!-- fin contenedor de enlaces -->
                
				<!--botones de barra principal -->             
                <div id="divbotones" >
                    <a href="logicadn.php?control=datosproveedor&&elpro={$id}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=datosproveedor&&elpro={$id}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea izquierda"> volver a perfil de proveedor </a>
                    <span class="izquierda volver none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Proveedores 
                             </li>
                            <li>
                                 <a href="logicadn.php?control=inicio" class="tabla">Control de proveedores</a>
                            </li>
                            <li>
                                 <a href="logicadn.php?control=inicio" class="tabla"> Perfil de proveedor</a>
                            </li>
                            <li >
                                <b>  Compras de combustible </b> 
                             </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del Proveedor
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
    <table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">	
        <tr>
            <td 	class='seleccionar fondocabeza'>	<b>Id Factura</td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Id Trabajo</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Forma de Pago</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Valor</b></td>
			<td  	class='registromaquina fondocabeza'><b>Fecha</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Lugar</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Estado</b></td>
            <td  	class='eliminar fondocabeza'>	    <b>Pagar</b></td>
            <td  	class='basura fondocabeza'>	    <b>Eliminar</b></td>
		</tr>
      </thead> 
	

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
        	<a href="logicadn.php?control=pagarfc&& id={$factura}&& idpro={$id}&& saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="tabla" onClick="return preguntapago()">Pagar</a></td>
		{else}
		<td>
        	<a href="logicadn.php?control=cancelarfc&& id={$factura}&& idpro={$id}&& saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="tabla" onClick="return pregunta_cancela_pago()">Cancelado</a></td>
		{/if}
		<td>
        	<a href="logicadn.php?control=eliminarfc&& id={$factura}&& idpro={$id}&& saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" onClick="return cofirmareliminar()" class="tabla" ><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" </a></a></td>
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