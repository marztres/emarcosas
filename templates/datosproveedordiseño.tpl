<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/datosproveedor.css"  type="text/css"  rel="stylesheet" media="all"  /> 










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
				Detalle Proveedor  
			</p>
			
			<div id="menusuperior">
            	<img src="/emarcosas/templates/img/barradebotones.jpg" width="890" height="36" alt="menusuperior" class="barradebotones"/> 
                <div class="contenedorbotones">
                	<a href="logicadn.php?control=inicio" class="izquierda inicio"></a>
                	<a href="/emarcosas/logicadn.php?control=maquinaria" class="izquierda maquinas"></a>
                    <a href="#" class="izquierda mantenimiento"></a>
                    <a href="#" class="izquierda contratos"></a>
                    <a href="/emarcosas/logicadn.php?control=operadores" class="izquierda operadores"></a>
                    <a href="/emarcosas/logicadn.php?control=proveedores" class="izquierda proveedores"></a>
                    <a href="#" class="izquierda cuentas"></a>
                    <a href="#" class="izquierda estadisticas"></a> 
                </div>  
               	
                <a href="logicadn.php?control=maquinaria" class="botonagregar">
                	<img src="/emarcosas/templates/img/botonvolver.png" width="23" height="23" /> 
                </a>
                <a href="logicadn.php?control=proveedor" class="volver" >
                	<p class="volverinfo">
						Volver a control de Proveedores   
					</p> 
               	</a>
               
                     
            
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
            
           

     <p class="izquierda negrita " id="primero" > Id </p>  <input type='text' name='id' value='{$id}' class="izquierda" />
    
     {$num=0}    
  	 {foreach from=$nombre item=nombres}
     <p class="izquierda negrita"> Nombre:</p> <input type='text' name='nombre' value='{$nombres}' class="izquierda" />
      {$num=$num+1} 
     {/foreach} 
    
     {$num=0}    
  	 {foreach from=$telefono item=tel}
     <p class="izquierda negrita "> Telefono:</p> <input type='text' name='telefono' value='{$tel}' class="izquierda" />
      {$num=$num+1} 
     {/foreach} 
   
     {$num=0}    
  	 {foreach from=$direccion item=dir}
     <p class="izquierda negrita ">  Dirección: </p> <input type='text' name='direccion' value='{$dir}' class="izquierda" />
      {$num=$num+1} 
     {/foreach} 
   
     {$num=0}    
  	 {foreach from=$ciudad item=city}
     <p class="izquierda negrita "> Ciudad: </p> <input type='text' name='ciudad' value='{$city}' class="izquierda" />
     {$num=$num+1} 
     {/foreach} 
      
      {$num=0}    
  	 {foreach from=$combustible item=combu}
     <p class="izquierda negrita " id="segundo"> Combustible: </p> <input type='text' name='combustible' value='{$combu}' class="izquierda " id="corto"/>
      {$num=$num+1} 
     {/foreach} 
     
     {$num=0}    
  	 {foreach from=$lubricante item=lubri}
     <p class="izquierda negrita "> Lubricante: </p> <input type='text' name='lubricante' value='{$lubri}' class="izquierda" id="corto" />
      {$num=$num+1} 
     {/foreach}
    
    <p class="izquierda negrita">  Credito </p> <input type="text" name='saldo' value='{$saldo}' class="izquierda"/>
    
	 
    <!--inicio tabla de formulario-->
    
    
    <table class="formularios">
 
 <form name="operador" action="logicadn.php?control=guardaroperador" method="post">
 
    	<tr>
            <td 	class='filas'>   <p >Cedula:</p>    </td>    
			<td 	class='filas'>	 <p >Nombre:</p>    </td>
			<td  	class='filas'>	 <p >Apellidos:</p> </td>
			<td 	class='filas' >  <p >edad:</p>      </td>
            <td 	class='filas' >  <p >Sexo:</p>      </td>
				
		</tr> 
		<tr>
			<td 	>	<input type='text' value="{$cedula}"  />   </td>    
			<td 	>	<input type='test'value='{$nombre}'  />    </td>
			<td  	>   <input type='text' value='{$apellido}' />  </td>
			<td 	>   <input type='text' value='{$edad}'  />     </td>
			<td 	>   <input type='text'value='{$sexo}' />       </td>
        </tr>
        <tr>
			<td 	>	<p > Telefono: </p>   </td>    
			<td 	>	<p > Dirección: </p>    </td>
			<td  	>   <p >  Correo </p>  </td>
			<td 	>   <p > sueldo </p>     </td>
			<td 	>   <p >  Saldo Pendiente </p>  </td>
        </tr>
        
        <tr>
			<td 	>	<input type='text' value='{$telefono}'  />        </td>    
			<td 	>	<input type='text' value='{$direccion}'  />    </td>
			<td  	>   <input type='text' value='{$correo}'  />  </td>
			<td 	>   <input type='text' value='{$sueldo}'  />     </td>
			<td 	>   <input type='text' value='{$saldo}' />       </td>
        </tr>
           
           </table>
	
    
    
    
    <!--fin tabla de formulario-->	
               
            </td> 		
        </tr>
        
          
          
          
                
    {if $combu == "si" and $lubri == "no"}
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Combustible
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones"> 
    <p class="negrita izquierda parrafosaldo">Se encuentran Compras a credito no canceladas por el valor de: </p> 
    <input name='pendiente_co' value="{$saldo}" class="izquierda cajasaldo" /> <a href="logicadn.php?control=rcombustible&& id={$id}&&saldo={$saldo}" class="tabla izquierda linksaldo"> Ver Registro</a>
            </td> 		
         </tr>
        
    {elseif $combu == "no" and $lubri == "si"}
        <tr> 
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	lubricante
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
   
     <p class="izquierda parrafosaldo negrita"> Se encuentran Facturas a credito no canceladas por el valor de:</p> 
     <input name='pendiente_co' value="{$saldo}" class="izquierda cajasaldo" /> 
     <a href="logicadn.php?control=rlubricante&& id={$id}&&saldo={$saldo}" class="izquierda tabla linksaldo"> Ver Registro</a>
            </td> 		
        </tr>
      
        {else}
       
        <tr> 
        
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Combustible
                </p>
            </td>	
		</tr>
          
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
                
         
     <p class="izquierda parrafosaldo negrita"> Se encuentran Compras a credito no canceladas por el valor de:</p> 
    <input name='pendiente_co' value="{$co}" class="izquierda cajasaldo"/><a href="logicadn.php?control=rcombustible&& id={$id}&&saldo={$saldo}" class="linksaldo izquierda tabla"> Ver Registro</a><br />
    
            </td> 		
        </tr>
    
        <tr> 
        
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	lubricante
                </p>
            </td>	
		</tr>
          
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
                
  
   <p class="izquierda parrafosaldo negrita">  Se encuentran Facturas a credito no canceladas por el valor de:</p> 
    <input name='pendiente_co' value="{$lu}"  class="izquierda cajasaldo"/> <a href="logicadn.php?control=rlubricante&& id={$id}&&saldo={$saldo}" class="linksaldo izquierda tabla"> Ver Registro</a>
    
            </td> 		
        </tr>
    {/if}

    
  
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