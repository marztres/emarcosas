<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/emarcosas/templates/css/registrodeevento.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>


<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	



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
                    
                    <h2 class="head-h2down izquierda noflotante"> Control de eventos </h2>
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
                   
                    {if $tipot == 'contrato'}
                     <a href="javascript:history.back(1)" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="javascript:history.back(1)" class="enlinea izquierda">Volver a control de maquinas en contrato</a>
                    {else}
					 <a href="logicadn.php?control=maquinaria" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=maquinaria" class="enlinea izquierda">Volver a control de maquinas</a>
					


                    {/if}
                    
                    
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=evento&&id={$codigomaquinas[$num]}" class="enlinea">
                         <img src="/emarcosas/templates/img/botonevento3.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=evento&&id={$idm}&& tipo={$tipot}" class="enlinea izquierda">Agregar evento</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=evento&&id={$codigomaquinas[$num]}" class="enlinea">
                         <img src="/emarcosas/templates/img/botoncuentacobro3.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                   <a href="javascript:viod(0)" onclick="javascript:document.forms['generar'].submit();" class="enlinea izquierda">Generar cuenta de cobro</a>
                   
                </div>  
            	<!-- fin botones de barra principal --> 
                
                
             {if $tipot == 'contrato'}
                    <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Contratos 
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de contratos</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla">Modificar contrato</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla"> Control de maquinas en contratos </a>
                            </li>

                         	<li >
                                 <b> Control de eventos  </b>
                            </li>
                            
                         </ul>
                    </div>
             

                    {else}
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
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de maquinas</a>
                            </li>
                         	<li >
                                 Control de eventos 
                            </li>
                            
                         </ul>
                    </div>
           


                    {/if}

  				</div>
			 <!--fin cabecera -->
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
            	<form name="generar" method="post" action="logicadn.php?control=cuentadecobro" >
				<p class="izquierda negrita tituloinfoid" >  Id </p> 
   				<input type='text negrita' value='{$idm}' readonly='readonly' class="izquierda negrita" />
   				<p class="izquierda negrita tituloinfotipo" >  Tipo </p>
   				<input type='text' value='{$tipot}' readonly='readonly' class="izquierda negrita"/>
            </td> 		
        </tr>
    </table>
    
    
    <table class="controldemaquinas izquierda example">
      <thead class="fondocabeza">		
        <tr>
            <td 	class='seleccionar fondocabeza'>	<b>-</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Lugar</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Ingresos totales </b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Gastos Totales</b></td>
			<td  	class='registromaquina fondocabeza'><b>Ganancias</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Trabajo</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>registro</b></td>
            <td  	class='eliminar fondocabeza'>	<b>cuenta</b></td>
            <td  	class='basura fondocabeza'>	<b>Eliminar</b></td>
		</tr>
      </thead>   
		{$cont=0}
		{foreach from=$ide item=id}
		<tr>
            {if $cuenta[$cont]=='generada'}
			<td><input name="ide" type="radio" value="{$id}" disabled="disabled" /></td>
            {else}
            <td><input name="ide" type="radio" value="{$id}"  /></td>
            {/if}
            
			<td>{$lugar[$cont]}</td>
			<td>{$ingresos[$cont]}</td>
			<td>{$gastos[$cont]}</td>
			<td>{$ganancias[$cont]}</td>
    
          
			<td><a href='logicadn.php?control=trabajo&& id={$fk_idmaquina[$cont]}&& ide={$id}&& tipot={$tipot}' class="tabla">Agregar Trabajo</a></td>
			<td><a href='logicadn.php?control=registro&& id={$fk_idmaquina[$cont]}&& ide={$id}' class="tabla">Ver Registro</a></td>
            {if $cuenta[$cont]=='generada'}
			<td><a href='logicadn.php?control=ver_cuenta_cobro&&cuenta={$id_cuenta_cobro[$cont]}' > {$cuenta[$cont]}</a></td>
            {else}
            <td>{$cuenta[$cont]}</td>
            {/if}
			<td><a href='logicadn.php?control=elievento&& ide={$id}' onClick="return cofirmareliminar()"> <img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/> </a></td>
		</tr>
		{$cont=$cont+1}
		{/foreach}
		</tr>
	</table>

		


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





</form>

</body>
</html>
























































