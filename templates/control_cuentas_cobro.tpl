<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/controldecuentasdecobro.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable();
				
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
                    <h1 class="head-h1cen izquierda" > Cuentas </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Control de cuentas de cobro  </h2>
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
                    <a href="javascript:history.back(-1)" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=controlcuentas" class="enlinea izquierda">Volver a control de cuentas</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=interfazproveedor" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=cuentadecobro&&cuentas=0" class="enlinea izquierda">Agregar cuenta de cobro libre</a>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                           <li>
                              <b> Cuentas  </b>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">control de cuentas</a>
                            </li>
                            <li>
                              <b> Control de cuentas de cobro  </b>
                            </li>
                            
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->
<div id="login">

            <table class='controldemaquinas example izquierda'>
   			<thead class="fondocabeza">
            <tr>
 			  <td class='tipomaquina fondocabeza' >Id cuenta</td>
              <td class='idmaquina fondocabeza' > Valor</td> 
              <td class='trabajomaquina fondocabeza' > Valor pendiente</td>
              <td class='registromaquina fondocabeza'> Lugar</td>
   			  <td class='notificacion fondocabeza'>Fecha</td>
              <td class='ultimotrabajo fondocabeza'>Tipo</td>
              <td class='estado fondocabeza'>	Estado</td>
              <td class='eliminar fondocabeza'>	Opción</td>
              <td class='basura fondocabeza'>	Eliminar</td>
   			 </tr>
             </thead>
		{$cont=0}
{foreach from=$idcuentas_cobro item=idcuentas}
			<tr><td>{$idcuentas}</td>
<td>{$valor[$cont]}</td>
<td>{$valor_pendiente[$cont]}</td>
<td>{$ciudad[$cont]}</td>
<td>{$fecha[$cont]}</td>
{if $tipo_evento[$cont]==0}
<td>emarco</td>
{else}
<td>{$tipo_evento[$cont]}
{/if}
<td>{$estado[$cont]}</td>
<td><a href='logicadn.php?control=ver_cuenta_cobro&&cuenta={$idcuentas}' class="tabla">Ver Cuenta</a></td>
<td class="basura"><a href='logicadn.php?control=eli_control_cuenta&&cuenta={$idcuentas}&&ide={$fk_idevento[$cont]}' onClick="return cofirmareliminar()"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" /></a></td>
{$cont=$cont+1}
</tr>
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








