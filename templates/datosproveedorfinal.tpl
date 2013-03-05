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
            	<input type='text' name='id' value='{$id}'/>
     			{$num=0}    
  	 			{foreach from=$nombre item=nombres}
       		</td>    
			<td>	
            	<input type='text' name='nombre' value='{$nombres}' />
     				{$num=$num+1} 
     				{/foreach} 
    				{$num=0}    
  					{foreach from=$telefono item=tel}
       
            </td>
			
            <td>   
            	<input type='text' name='telefono' value='{$tel}' />
     				{$num=$num+1} 
     				{/foreach} 
     				{$num=0}    
  	 				{foreach from=$direccion item=dir}
      	    </td>
			
            <td>   
            	<input type='text' name='direccion' value='{$dir}'  />
      				{$num=$num+1} 
     				{/foreach} 
   					{$num=0}    
  	 				{foreach from=$ciudad item=city}
        	</td>
			<td>   
            	<input type='text' name='ciudad' value='{$city}' />
     				{$num=$num+1} 
     				{/foreach} 
      				{$num=0}    
  	 				{foreach from=$combustible item=combu}
          
            </td>
        </tr>
        <tr>
			<td 	>	<p > combustible: </p>   </td>    
			<td 	>	<p > lubricante: </p>    </td>
            <td 	>	<p > Credito: </p>    </td>
		</tr>
        
        <tr>
			<td >	
        	    <input type='text' name='combustible' value='{$combu}' />
     	 	    	{$num=$num+1} 
     				{/foreach} 
     				{$num=0}    
  	 				{foreach from=$lubricante item=lubri}
     	
            </td>    
			<td> 
                <input type='text' name='lubricante' value='{$lubri}'  />
     		    	{$num=$num+1} 
     				{/foreach}
     		</td>
			<td> 
            	<input type="text" name='saldo' value='{$saldo}' />
    		 </td>
					
    
    
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