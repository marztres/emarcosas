<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>

<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/registropagooperador.css"  type="text/css"  rel="stylesheet" media="all" /> 


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

<body  >


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

			<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    <!--titulo de modulo -->
                    <h1 class="head-h1cen izquierda" > Operadores </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Registro de pagos  </h2>
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
                    <a href="logicadn.php?control=registrooperador&& id={$cedula}&& saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=registrooperador&& id={$cedula}&& saldo={$saldo}" class="enlinea izquierda">Volver a registro de operador</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=pagaroperador&& id={$cedula}&& saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonregistrodecuentas.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=pagaroperador&& id={$cedula}&& saldo={$saldo}" class="enlinea izquierda">Hacer pago</a>
                  
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
                                <a href="logicadn.php?control=inicio" class="tabla">Control de operadores</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Registro de operador</a>
                            </li>
                            <li>
                               <b> Registro de pagos</b>
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
                	Información del Operador.
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
			<td  	>   <p >  Correo: </p>  </td>
			<td 	>   <p > sueldo: </p>     </td>
			<td 	>   <p >  Saldo Pendiente: </p>  </td>
        </tr>
        
        <tr>
			<td 	>	<input type='text' value='{$telefono}'  />        </td>    
			<td 	>	<input type='text' value='{$direccion}'  />    </td>
			<td  	>   <input type='text' value='{$correo}'  />  </td>
			<td 	>   <input type='text' value='{$sueldo}'  />     </td>
			<td 	>   <input type='text' value='{$saldo}' />       </td>
        </tr>
           
           </table>
	
     
     <!--fin tabla formularios -->
      
  
               
            </td> 		
        </tr>
        <tr> 
      
        </table>
    	 
         
       
       <table class="controldemaquinas example izquierda ">
    	<thead class="fondocabeza"> 
        <tr>
               
			<td 	class='tipomaquina fondocabeza'>	<b>Id</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Valor</b></td>
			<td  	class='registromaquina fondocabeza'><b>Numero de dias</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Fecha</b></td>
            <td 	class='notificacion fondocabeza' >	<b>Opción</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Eliminar</b></td>
    </tr> 
        </thead>
		{$num=0}
		{foreach from=$idpago item=id}
		<tr>
		<td>{$id}</td>
		<td>{$valor[$num]}</td>
		<td>{$numerodias[$num]}</td>
		<td>{$fecha[$num]}</td>
        
        <td><a href="logicadn.php?control=detallespago&& id={$id}&& cedula={$cedula}&& saldo={$saldo}&& fecha2={$fecha[$num]}" class="tabla">Ver Detalles</a></td>
        
		<td>
        	<a href="logicadn.php?control=elipago&& id={$id}&& cedula={$cedula}&& saldo={$saldo}" onclick="return cofirmareliminar()">
            <img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/>
            </a>
        </td>
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