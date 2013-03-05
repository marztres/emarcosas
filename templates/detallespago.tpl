<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/detallespago.css"  type="text/css"  rel="stylesheet" media="all"  /> 
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

<body  onkeypress="return pulsar(event)">


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

		<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    <!--titulo de modulo -->
                    <h1 class="head-h1cen izquierda" > Operador </h1>
				    <!--fin titulo de modulo -->
                    
                    <!-- usuario + soporte -->
                    <div id="head-divder" class="izquierda"> 
                    	<!--usuario -->
                    	<div id="head-divder-usuarios" class="izquierda"> 
                        	<span class="estiloinline"> usuario |</span> 
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
                    <h2 class="head-h2down izquierda noflotante"> Pago  </h2>
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
                    <a href="javascript:history.back()" class="enlinea izquierda"> volver a el registro de operador</a>
                    <span class="izquierda">|</span>
                     <a href="logicadn.php?control=registrodepago&& id={$cedula}&& saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonregistrodecuentas.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=registrodepago&& id={$cedula}&& saldo={$saldo}" class="enlinea izquierda"> Ver Registro de pagos</a>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Operadores 
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de operador</a>
                            </li>
                            <li >
                                 <a href="logicadn.php?control=inicio" class="tabla">Registro de operador</a> 
                            </li>
                            <li >
                                 <a href="logicadn.php?control=inicio" class="tabla">registro de pagos</a> 
                            </li>
                            <li >
                                 <b> Pago </b> 
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
                	Información del Operador:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
          
<!--inicio tabla formularios -->
     
     <table class="formularios">
 

 
 
    	<tr>
            <td 	class='filas'>   <p >Cedula:</p>    </td>    
			<td 	class='filas'>	 <p >Nombre:</p>    </td>
			<td  	class='filas'>	 <p >Apellidos:</p> </td>
			
				
		</tr> 
		<tr>
			<td 	>	<input type='text' value='{$cedula}' />   </td>    
			<td 	>	<input type='text' value='{$nombre}' />    </td>
			<td  	>   <input type='text' value='{$apellido}' /> </td>
        </tr>
        <tr>
			<td 	>	<p > Suelo: </p>   </td>    
			<td 	>	<p > Saldo pendiente: </p>    </td>
		</tr>
        
        <tr>
			<td 	>	<input type='text' value='{$sueldo}' />        </td>    
			<td 	>	<input type='text' value='{$saldo}' />    </td>
		</tr>
           
           </table>
	
     
     <!--fin tabla formularios -->
      
  
               
            </td> 		
        </tr>
        <tr> 
            <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del pago:
                </p>
            </td>	
		 </tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
            	
 			
 		    
			<p class="izquierda negrita"> Numero de dias: </p> 
            
            	<input type="text" value='{$diaspagos}'  class="izquierda"/> 
			<p class="izquierda negrita">   Valor total dias a Pagar: </p>
            
                <input type="text" value='{$valor}'   class="izquierda"/>
				
              
			<p class="izquierda negrita"> Fecha: </p> 
            	<input type="text" value="{$fecha2}"  class="fecha izquierda"/>
            
            
 
  
               
            </td> 		
        </tr>
     	
        <tr> 
            <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Servicios Pendientes: 
                </p>
            </td>	
		 </tr>
         </table>
    	 
         {$num=0}
{$aux=0}
       <table class="controldemaquinas example izquierda">
       <thead class="fondocabeza">	
        <tr>
          
			<td 	class='tipomaquina fondocabeza'>	<b>Id</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Valor</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Lugar</b></td>
			<td  	class='registromaquina fondocabeza'><b>Fecha</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Id Trabajo</b></td>
		</thead>	
   {foreach from=$fk_idtrabajo_operador item=idtop}
<tr>

<td>{$idtop}</td>
<td>{$valor2[$num]}</td>
<td>{$lugar[$num]}</td>
<td>{$fecha[$num]}</td>
<td>{$idtrabajo[$num]}</td>
</tr>
{$aux=$aux+$valor2[$num]}
{$num=$num+1}
{/foreach}
</tr>
       </table>
	<br />


     
 <table class="informacion"> 
    	
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita seleccionados "> Valor de los Servicios Seleccionados: </p> 
         
          <input type="text" value='{$aux}' class="izquierda ">
          
	         
    
            </td> 		
        </tr>
		<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información adicional:
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita subtotal"> Valor de los Servicios Seleccionados: </p> 
           <input type="text" value='{$aux}' class="izquierda ">
    
            </td> 		
        </tr>
		<tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita subtotal2"> Valor de los dias seleccionados: </p> 
          <input type='text' value='{$valor}' class="izquierda" />
             
    
            </td> 		
        </tr>
			<tr class="fondocabeza">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita subtotal3"> Valor Total de este Pago: </p> 
          {$total=$valor+$aux}
          <input type='text' value='{$total}' class="izquierda"/>
             
    
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
