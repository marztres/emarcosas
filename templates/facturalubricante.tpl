<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/facturalubricanteregistro.css"  type="text/css"  rel="stylesheet" media="all"  /> 


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
                    <h2 class="head-h2down izquierda noflotante"> Control de facturas de lubricante  </h2>
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
                    <a href="logicadn.php?control=datosproveedor&&elpro={$idprovedor}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=datosproveedor&&elpro={$idprovedor}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea izquierda">Volver a perfil de proveedor</a>
                    <span class="izquierda">|</span>
                  	<a href="logicadn.php?control=addfl&& id={$idprovedor}&& nombre={$nombrepro}&& saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=addfl&& id={$idprovedor}&& nombre={$nombrepro}&& saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="enlinea izquierda"> Agregar factura de lubricante </a>
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
                	Información del Proveedor.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
    
    <!--inicio tabla de formulario-->
    
    
    <table class="formularios">
 
 <form name="operador" action="logicadn.php?control=guardaroperador" method="post">
 
    	<tr>
            <td> <p >Id:</p>    </td>    
			<td> <p >Nombre:</p>    </td>
			<td> <p >Telefono:</p> </td>
			<td> <p >Dirección:</p>      </td>
            <td> <p >ciudad:</p>      </td>
				
		</tr> 
		<tr>
			<td >	
            	<input type="text" value="{$idprovedor}"  />
       		</td>    
			<td>	
            	<input type="text" value="{$nombrepro}"  />
       
            </td>
			
            <td>   
            	<input type="text" value="{$telefono}"  />
      	    </td>
			
            <td>   
            	 <input type="text" value="{$direccion}" />
        	</td>
			<td>   
            	<input type="text" value="{$ciudad}" />
          
            </td>
        </tr>
        <tr>
			<td 	>	<p > combustible: </p>   </td>    
			<td 	>	<p > lubricante: </p>    </td>
            <td 	>	<p > Credito: </p>    </td>
		</tr>
        
        <tr>
			<td >	
        	    <input type='text' value='{$combustible}' />
     	
            </td>    
			<td> 
                 <input type='text' value='{$lubricante}' />
     		</td>
			<td> 
            	<input type='text' value='{$saldo}'  />
    		 </td>
					
    
    
    	</tr>
           
           </table>
	
    
    
    
    <!--fin tabla de formulario-->	
  
               
            </td> 		
        </tr>
        
          
          
          
                
   
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Registro de Facturas de lubricante
                </p>
            </td>	
		 </tr>
         </table>
    	 
         
     <table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">	
        <tr>
            <td 	class='seleccionar fondocabeza'><b>  ID Factura </b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Fecha</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Galones Totales</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Galones Restantes</b></td>
			<td  	class='registromaquina fondocabeza'><b>Valor</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Estado</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Fase</b></td>
            <td  	class='eliminar fondocabeza'>	<b>Opcion</b></td>
            <td  	class='eliminar fondocabeza'>	<b>Eliminar</b></td>
		</tr> 
	  </thead>
     	
			{$num=0}    
			{foreach from=$id item=factura}
			<tr><td>{$factura}</td>
			<td>{$fechatrb[$num]}</td>
			<td>{$fkgalones[$num]}</td>
			<td>{$fkgalonesrest[$num]}</td>
			<td>{$fkvalor[$num]}</td>
			<td>{$fkestado[$num]}</td>
			<td>{$fkfase[$num]}</td>
			<td><a href="logicadn.php?control=verdetallesfl&& id={$factura}&& name={$nombrepro}&&saldo={$saldo}&&idpro={$idprovedor}&&combustible={$co}&&lubricante={$lu}" class="tabla">Ver Detalles</a></td>
			<td><a href="logicadn.php?control=elifl&& id={$factura}&& name={$nombrepro}&& saldo={$saldo}&&idpro={$idprovedor}&&combustible={$co}&&lubricante={$lu}"      onClick="return cofirmareliminar()" class="tabla"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>
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