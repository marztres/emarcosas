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
                    <h2 class="head-h2down izquierda noflotante">Perfil de proveedor </h2>
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
                    <a href="logicadn.php?control=proveedor" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=proveedor" class="enlinea izquierda">Volver a control de proveedores</a>
                    <span class="izquierda none">|</span>
                  
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
                                <a href="logicadn.php?control=inicio" class="tabla"> Control de proveedores</a>
                            </li>
                            <li >
                                <b> Perfil de proveedor </b> 
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
    <input name='pendiente_co' value="{$co}" class="izquierda cajasaldo"/><a href="logicadn.php?control=rcombustible&& id={$id}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="linksaldo izquierda tabla"> Ver Registro</a><br />
    
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
    <input name='pendiente_co' value="{$lu}"  class="izquierda cajasaldo"/> <a href="logicadn.php?control=rlubricante&& id={$id}&&saldo={$saldo}&&combustible={$co}&&lubricante={$lu}" class="linksaldo izquierda tabla"> Ver Registro</a>
    
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