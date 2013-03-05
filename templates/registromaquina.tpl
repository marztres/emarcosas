<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/registrodetrabajo.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable( {
        "aaSorting": [[ 2, "desc" ]]
    });
				
				
				
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
                   {if $tipot == 'contrato'}
                    {literal} 
<style>
.contratos {background:url(/emarcosas/templates/img/botoncontratos-hover.png) no-repeat !important;  width:93px;}
.contratos:hover {background:url(/emarcosas/templates/img/botoncontratos-hover.png) no-repeat; }
.maquinas {background:url(/emarcosas/templates/img/botonmaquinas.png) no-repeat !important; width:94px; }
.maquinas:hover {background:url(/emarcosas/templates/img/botonmaquinas-hover.png) no-repeat; }
</style>
{/literal}
                    <h1 class="head-h1cen izquierda" > Contratos </h1>
                    {else}
                  
                    <h1 class="head-h1cen izquierda" > Maquinas </h1>
                    {/if}
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
                    <h2 class="head-h2down izquierda noflotante"> Registro de trabajo  </h2>
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
                    <a href="logicadn.php?control=registroevento&&id={$idmaquina}&&tipo={$tipot}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=registroevento&&id={$idmaquina}&&tipo={$tipot}" class="enlinea izquierda">volver a control de eventos</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=trabajo&& id={$fk_idmaquina[$cont]}&& ide={$id}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botontrabajo.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=trabajo&& id={$idmaquina}&& ide={$ide}&& tipot={$tipot}" class="enlinea izquierda">Agregar trabajo</a>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Maquinas 
                             </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de maquinas</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de eventos</a>
                            </li>
                            <li>
                                Registro de trabajo 
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<form name="generar" method="post" action="logicadn.php?control=er" ONSUBMIT='return pregunta();' >

<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información de la Maquina:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            	
				<p class="izquierda negrita tituloinfoid">  Id </p> 
   				<input type='text negrita' value='{$idmaquina}' readonly='readonly' class="izquierda negrita"/>
   				<p class="izquierda negrita tituloinfotipo" >  Tipo </p>
   				<input type='text' value='{$maquinas}' readonly='readonly' class="izquierda negrita"/>

            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del evento:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
                <p class="izquierda negrita tituloinfoid">  Lugar del evento </p>
                <input type='text' name='evento' value='{$lugar}' class="izquierda negrita" />
            </td> 		
        </tr>
    </table>
    
    
    
    <table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">
    	<tr>
            <td 	class='seleccionar fondocabeza'>	<b>-</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Lugar</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Fecha</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Ingresos totales</b></td>
			<td  	class='registromaquina fondocabeza'><b>Gastos Totales</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Ganancias</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Revisar Detalles</b></td>
            <td  	class='eliminar fondocabeza'>	<b>Eliminar</b></td>
		</tr>
      </thead>   
		   
            {$sum=0}
      	    {foreach from=$idtrabajo item=idt}
    	    <td><input type="checkbox"  name="idc[{$idtrabajo[$sum]}]" /></td>    
    		<td>{$nombretrabajo[$sum]}</td>
    		<td>{$fecha[$sum] }</td>  
    	    <td>{$ingresos[$sum]}</td>  
    		<td>{$gastos[$sum]}</td>
    		<td>{$ganancias[$sum]}</td>
    		<td>
            	<a href="logicadn.php?control=modificar&& idtr={$idtrabajo[$sum]}&&  idmaq={$idmaquina}&&tipot={$tipot}" class="tabla modificar">Modificar</a> 
            </td>
    		<td>
            <a onclick="return cofirmareliminar()"  href="logicadn.php?control=eru&& idtu={$idtrabajo[$sum]}&& ing={$ingresos[$sum]}&& gas={$gastos[$sum]}&& id={$idmaquina}&& ide={$ide}&& tipot={$tipot} " class="tabla "><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/> </a></a>
            </td> 
	    </tr>
  			  {$sum=$sum+1}
              {/foreach} 
		</table>
		<input type="submit" value="eliminar" class="eliminarvarios izquierda noflotante"   />
		
        </form>



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