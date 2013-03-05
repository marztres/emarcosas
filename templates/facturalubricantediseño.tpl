<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/facturalubricanteregistro.css"  type="text/css"  rel="stylesheet" media="all"  /> 










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
				Proveedor 
			</p>
			<p class="tituloactual">
				Control de Facturas 
			</p>
			
			<div id="menusuperior">
            	<img src="/emarcosas/templates/img/barradebotones.jpg" width="890" height="36" alt="menusuperior" class="barradebotones"/> 
                <div class="contenedorbotones">
                	<a href="logicadn.php?control=inicio" class="izquierda inicio"></a>
                	<a href="/emarcosas/logicadn.php?control=maquinaria" class="izquierda maquinas"></a>
                    <a href="/emarcosas/logicadn.php?control=mantenimiento" class="izquierda mantenimiento"></a>
                    <a href="#" class="izquierda contratos"></a>
                    <a href="/emarcosas/logicadn.php?control=operadores" class="izquierda operadores"></a>
                    <a href="/emarcosas/logicadn.php?control=proveedores" class="izquierda proveedores"></a>
                    <a href="#" class="izquierda cuentas"></a>
                    <a href="#" class="izquierda estadisticas"></a> 
                </div>  
               <div class="botonera">	
                <a href="javascript:history.back()" class="botonagregar ">
                	<img src="/emarcosas/templates/img/botonvolver.png" width="23" height="23" /> 
                </a>
                <a href="javascript:history.back()" class="volver tabla " >
                	<p class="volverinfo">
						Volver a el proveedor  
					</p> 
               	</a>
               
               <p class="barrita"> | </p>
               <a href="logicadn.php?control=addfl&& id={$idprovedor}&& nombre={$nombrepro}&& saldo={$saldo}" class="botonagregarfact ">
                	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23" />  
               </a>
               <a href="logicadn.php?control=addfl&& id={$idprovedor}&& nombre={$nombrepro}&& saldo={$saldo}" class="tabla" id="linkagregar"> 
              		<p > Agregar Factura de Lubricante</p>
               </a>
               </div>          
            
            </div>


</div>


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
            
           

     <p class="izquierda negrita " id="primero" > Id </p>  
     <input type="text" value="{$idprovedor}" class="izquierda" />
     
     
    <p class="izquierda negrita"> Nombre:</p> 
    <input type="text" value="{$nombrepro}"  class="izquierda"/>
  
     
    
    
     <p class="izquierda negrita "> Telefono:</p> 
     <input type="text" value="{$telefono}"  class="izquierda"/>
    
     
     
     
     <p class="izquierda negrita ">  Dirección: </p> 
     <input type="text" value="{$direccion}"  class="izquierda"/>
     
    
    
    
    
     <p class="izquierda negrita "> Ciudad: </p> 
     <input type="text" value="{$ciudad}" class="izquierda"/>
     
     
     
      
     
     <p class="izquierda negrita " id="segundo"> Combustible: </p> 
     <input type='text' value='{$combustible}' class="izquierda " id="corto"/>

     
     
     
     
     <p class="izquierda negrita "> Lubricante: </p> 
     <input type='text' value='{$lubricante}' class="izquierda" id="corto" />

    
     <p class="izquierda negrita">  Credito </p> 
     <input type='text' value='{$saldo}' class="izquierda" />

    

    
  
               
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
    	 
         
     <table class="controldemaquinas">
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
		
     	<tr>
			{$num=0}    
			{foreach from=$id item=factura}
			<tr><td>{$factura}</td>
			<td>{$fechatrb[$num]}</td>
			<td>{$fkgalones[$num]}</td>
			<td>{$fkgalonesrest[$num]}</td>
			<td>{$fkvalor[$num]}</td>
			<td>{$fkestado[$num]}</td>
			<td>{$fkfase[$num]}</td>
			<td><a href="#" class="tabla">Ver Detalles</a></td>
			<td><a href="#" class="tabla"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>
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