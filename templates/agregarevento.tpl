<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>

<link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
 	<script type="text/javascript">
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'yy/mm/dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});    

        $(document).ready(function() {
           $(".fecha").datepicker();
        });
    </script>
    

<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarevento.css"  type="text/css"  rel="stylesheet" media="all"  /> 




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
                    {if $tipo == 'contrato'}
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
                    <h2 class="head-h2down izquierda noflotante"> Agregar evento </h2>
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
                    <a href="logicadn.php?control=registroevento&&id={$idm}&&tipo={$tipo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=registroevento&&id={$idm}&&tipo={$tipo}" class="enlinea izquierda">Volver a control de eventos</a>
                    <span class="izquierda none">|</span>
                   
                </div>  
            	<!-- fin botones de barra principal --> 
                
          {if $tipo == 'contrato'}
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
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de eventos  </a>
                            </li>
                            <li >
                                <b>  Agregar evento </b>
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
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de maquinas </a>
                            </li>
                         	<li >
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de eventos  </a>
                            </li>
                            <li >
                                <b> Agregar evento </b>
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
                	Paso 1: Información del evento.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
		

	
        

		<form name='formulario' method="post" action="logicadn.php?control=guardarevento&& idm={$idm}&& tipo={$tipo}" ONSUBMIT='return preguntaevento();'>

         <p class="espaciadoarriba"> </p>
            
   	        <p class="izquierda negrita primero arriba" > Ingrese el  Lugar donde se realizara el evento: </p> 
          		<input type='text' name='lugar' class="izquierda prueba" />
                
                                
         <p class="espaciadoabajo"> </p>
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 2: Fecha de inicio del evento.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
		

	
        

         <p class="espaciadoarriba"> </p>
            
   	        <p class="izquierda negrita primero arriba" > Ingrese la fecha de inicio del evento: </p> 
          		           	<input type='text' name='fecha' class="fecha" class="izquierda prueba" />
                
                                
         <p class="espaciadoabajo"> </p>
                
            </td> 		
        </tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 

	
			<input type="submit" value='Agregar Evento' class="botonevento" />
		</form>
         
            </td> 		
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











