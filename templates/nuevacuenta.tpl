<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/registro_cuentas_contrato.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>
<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable({
        "aaSorting": [[ 3, "desc" ]]
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
                    <h1 class="head-h1cen izquierda" > Contratos </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Control de cuentas de pago </h2>
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
                    <a href="javascript:history.back()" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=modificarcontrato&&id={$idc}" class="enlinea izquierda">Volver a modificar contrato</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=actasdepagos&& idc={$idc}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonactadepago.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=nuevacuenta&& idc={$idc}" class="enlinea izquierda">Agregar cuenta de pago</a>
                  {$id=$idc}
                </div>  
            	<!-- fin botones de barra principal --> 
                
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
                                <a href="logicadn.php?control=inicio" class="tabla">Control de contratos</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">modificar contrato</a>
                            </li>
                            <li >
                                 <b> Control de actas de pago </b>
                             </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->


<div id="login">

           

	
    <table class='controldemaquinas example izquierda'>
   			<thead class="fondocabeza">
            
 			  <td class='tipomaquina fondocabeza' ><strong>Id Cuenta De pago</strong></td>
                  <td class='idmaquina fondocabeza' > <strong>Opción</strong></td> 
                  <td class='trabajomaquina fondocabeza' ><strong>Valor Total</strong></td>
                  <td class='registromaquina fondocabeza'> <strong>Fecha</strong></td>
             
                  <td class='eliminar fondocabeza'>	<strong>Eliminar</strong></td>
              </tr>
             </thead>
{$num=0}
{foreach from=$idcuentas_contrato item=idc}
<tr>
<td>{$idc}</td>
<td><a href="logicadn.php?control=modifica_cuenta_pago&&idc={$idc}&& id={$id}" class="tabla">Modificar</a></td>
<td>{$valor[$num]}</td>
<td>{$fecha[$num]}</td>
<td><a href="logicadn.php?control=elicpago&&idc={$idc}&& id={$id}" onClick="return cofirmareliminar()"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" class="eliminarimg" </img></a></td>
</tr>
{$num=$num+1}
{/foreach}
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