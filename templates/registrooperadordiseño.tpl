<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/registrooperador.css"  type="text/css"  rel="stylesheet" media="all"  /> 










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
				Operadores
			</p>
			<p class="tituloactual">
				Operador  
			</p>
			
			<div id="menusuperior">
            	<img src="/emarcosas/templates/img/barradebotones.jpg" width="890" height="36" alt="menusuperior" class="barradebotones"/> 
                <div class="contenedorbotones">
                	<a href="logicadn.php?control=inicio" class="izquierda inicio"></a>
                	<a href="#" class="izquierda maquinas"></a>
                    <a href="#" class="izquierda mantenimiento"></a>
                    <a href="#" class="izquierda contratos"></a>
                    <a href="#" class="izquierda operadores"></a>
                    <a href="#" class="izquierda proveedores"></a>
                    <a href="#" class="izquierda cuentas"></a>
                    <a href="#" class="izquierda estadisticas"></a> 
                </div>  
               	
                <a href="/emarcosas/logicadn.php?control=operadores" class="botonagregar ">
                	<img src="/emarcosas/templates/img/botonvolver.png" width="23" height="23" /> 
                </a>
                <a href="/emarcosas/logicadn.php?control=operadores" class="volver tabla " >
                	<p class="volverinfo">
						Volver a control de Operadores   
					</p> 
               	</a>
                <p class="barrita"> | </p>
                
                
                <a href="logicadn.php?control=pagaroperador&& id={$cedula}&& saldo={$saldo}">Hacer Pago</a> 
                <a href="logicadn.php?control=registrodepago&& id={$cedula}&& saldo={$saldo}">Registro de Pago</a> 
               
            
                     
            
            </div>


</div>


<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del Operador.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
            
 <form name="operador" action="logicadn.php?control=guardaroperador" method="post">
          

     <p class="izquierda negrita " id="primero" > Cedula: </p>
     <input type='text' value="{$cedula}" class="izquierda" />
       
     
     
     <p class="izquierda negrita"> Nombre:</p> 
     <input type='test'value='{$nombre}' class="izquierda" />
     
     
  
     
    
    
     <p class="izquierda negrita "> Apellidos:</p> 
     <input type='text' value='{$apellido}' class="izquierda"/>
     
     
     
     
     <p class="izquierda negrita ">  edad: </p> 
     <input type='text' value='{$edad}'  class="izquierda"/>
     
    
    
    
    
     <p class="izquierda negrita "> Sexo:  </p> 
     <input type='text'value='{$sexo}' class="izquierda sex" />
     
     
     <br />
	 <br />
	 <br />
	 
     <p class="izquierda negrita " id="segundo"> Telefono: </p> 
     <input type='text' value='{$telefono}'  class="izquierda"/>     
     
     <p class="izquierda negrita "> Dirección: </p> 
     <input type='text' value='{$direccion}' class="izquierda" />
     
     <p class="izquierda negrita">  Correo </p>
     <input type='text' value='{$correo}' class="izquierda correo" />
     
     <p class="izquierda negrita sueldoparra"> sueldo </p>
     <input type='text' value='{$sueldo}'  class="izquierda"/>
     
     <p class="izquierda negrita ">  Saldo Pendiente </p>
     <input type='text' value='{$saldo}' class="izquierda"/>
     
     
      
     
  
               
            </td> 		
        </tr>
        
          
          
          
                
   
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	 Registro de Servicios
                </p>
            </td>	
		 </tr>
     	 </table>
    	<table class="controldemaquinas">
    	<tr>
            <td 	class='seleccionar fondocabeza'>	<b>Id</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Horas</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Valor</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Lugar</b></td>
			<td  	class='registromaquina fondocabeza'><b>Fecha</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Id trabajo</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Estado</b></td>
            <td  	class='eliminar fondocabeza'>	    <b>Eliminar</b></td>
		</tr> 
         {$num=0}
		{foreach from=$idto item=idtop}
		<tr><td>{$idtop}</td>
		<td>{$horas[$num]}</td>
		<td>{$valor[$num]}</td>
		<td>{$lugar[$num]}</td>
		<td>{$fecha[$num]}</td>
		<td>{$idtrabajo[$num]}</td>
		<td>{$estado[$num]}</td>
		<td>
        	<a href="logicadn.php?control=elitrbop&& id={$idtop}" onClick="return cofirmareliminar() class="tabla" > 
            <img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/> </a>   
         </td>
		{$num=$num+1}
		</tr>
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