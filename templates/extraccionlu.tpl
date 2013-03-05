<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/extracciodelubricante.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	

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
                    <h1 class="head-h1cen izquierda" > Proveedores </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Detalle de factura de lubricante  </h2>
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
                    <a href="logicadn.php?control=rlubricante&&nombre={$nombre}&&id={$idproveedor}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=rlubricante&&nombre={$nombre}&&id={$idproveedor}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea izquierda">Volver a perfil de proveedor</a>
                    <span class="izquierda">|</span>
                  	<a href="logicadn.php?control=addfl&& id={$idprovedor}&& nombre={$nombrepro}&& saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    {if $estado=='pagado'}
                    <a href="logicadn.php?control=cancelarflu&& id={$idfactura_lubricante}&&idp={$idproveedor}&&nombre={$nombre}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea izquierda" onClick="return cancelarflu()"> Cancelar Pago Factura de lubricante</a>
                    {else}
                    <a href="logicadn.php?control=pagarflu&& id={$idfactura_lubricante}&&idp={$idproveedor}&&nombre={$nombre}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea izquierda" onClick="return pagarflu()">  Pagar Factura de lubricante</a>
                    {/if}            
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
                                <a href="logicadn.php?control=inicio" class="tabla"> control de proveedores</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Perfil de proveedor</a>
                            </li>
                            <li >
                                 <b> Control de facturas de lubricante </b>
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
                	Información del Proveedor:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
    
    <!--inicio tabla de formulario-->
    
    
    <table class="formularios">
 

 
    	<tr>
            <td> <p >Id:</p>    </td>    
			<td> <p >Nombre:</p>    </td>
			<td> <p >Credito:</p> </td>
			
				
		</tr> 
		<tr>
			<td >	
            	<input type='text' value='{$idproveedor}' />
                
       		</td>    
			<td>	
            	<input type='text' value='{$nombrepro}' />
       
            </td>
			
            <td>   
            	<input type='text' value='{$saldo}' />
      	    </td>
			
        </tr>
    </table>
	
    
    
    
    <!--fin tabla de formulario-->	
  
               
            </td> 		
        </tr>
        
          
          
          
                
   
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información de la factura:
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
  				 <!--inicio tabla de formulario-->
    
    
                <table class="formularios">
             
           
             
                    <tr>
                        <td> <p >Id factura:</p>    </td>    
                        <td> <p >Precio:</p>    </td>
                        <td> <p >Forma de pago:</p> </td>
                        <td> <p >Estado:</p> </td>
                        
                            
                    </tr> 
                    <tr>
                        <td >	
                            <input type='text' value='{$idfactura_lubricante}' />
                            
                        </td>    
                        <td>	
                            <input type='text' value='{$precio}' />
                   
                        </td>
                        
                        <td>   
                            <input type='text' value='{$forma_de_pago}' />
                        </td>
                        <td> 
                        <input type='text' value='{$estado}' />
                        </td>
                    </tr>
                    <tr>
                        <td> <p >Galones totales:</p>    </td>    
                        <td> <p >Galones restantes:</p>    </td>
                        <td> <p >Precio del Galon:</p> </td>
                    </tr>
                    <tr>
                        <td >	
                            <input type='text' value='{$galones}' />
                            
                        </td>    
                        <td>	
                            <input type='text' value='{$galones_restantes}' />
                   
                        </td>
                        
                        <td>   
                            <input type='text' value='{$valor_unitario}' />
                        </td>
                    </tr>
                </table>
                
                
                
                
                <!--fin tabla de formulario-->	
              
         
            </td>	
		 </tr>
           <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Registro de extracción de lubricante:
                </p>
            </td>	
		 </tr>
         
         </table>
    	 
         
     <table class="controldemaquinas example izquierda">
    	<thead class="fondocabeza">
        <tr>
            <td 	class='seleccionar fondocabeza'><b> Id extracción </b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Id Trabajo</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Galones extraidos</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Fecha</b></td>
			<td  	class='registromaquina fondocabeza'><b>Lugar</b></td>
	    </thead>
		
                {$num=0}
            {foreach from=$idextraccion_lubricante item=idx}
            <tr><td>{$idx}</td>
            <td>{$fk_factura_lubricante[$num]}</td>
            <td>{$galones[$num]}</td>
            <td>{$fecha[$num]}</td>
            <td>{$fk_lugar[$num]}</td>
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














