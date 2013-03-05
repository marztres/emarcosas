<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/registrooperador.css"  type="text/css"  rel="stylesheet" media="all"  /> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<!--inicio scroll -->
{literal}

<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:218}, 2500);
		return false;
	});
});
</script>
{/literal} 

<!--fin scroll  -->

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>
{literal}
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable( 
				
				
						{
							"aoColumnDefs": [ 
                        						{ "bSearchable": false, "bVisible": false, "aTargets": [ 0,5 ] }
                    						],"aaSorting": [[ 6, "desc" ]]
						     
						}  
					 );
				
			} );
		</script>
<!--tablas dinamicas -->
{/literal}
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	





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
                    <h1 class="head-h1cen izquierda" > Operador </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Registro de operador </h2>
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
                    <a href="logicadn.php?control=operadores" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=operadores" class="enlinea izquierda">Volver a control de operador</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=pagaroperador&& id={$cedula}&& saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonpago.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=pagaroperador&& id={$cedula}&& saldo={$saldo}" class="enlinea izquierda"> Hacer pago</a>
                    <span class="izquierda">|</span>
                	<a href="logicadn.php?control=registrodepago&& id={$cedula}&& saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonregistrodecuentas.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=registrodepago&& id={$cedula}&& saldo={$saldo}" class="enlinea izquierda"> Registro de pagos</a>
                    <span class="izquierda">|</span>
                    <a href="#" class="enlinea" >
                    	<img src="/emarcosas/templates/img/botoneliminar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=elioperador&& id={$cedula}" class="enlinea izquierda" onClick="return cofirmareliminar()"> Eliminar operador</a>
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
                                <a href="logicadn.php?control=inicio" class="tabla">control de operadores</a>
                            </li>
                            <li >
                                 <b> Registro de operador</b> 
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
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	 Registro de Servicios
                </p>
            </td>	
		 </tr>
     	 </table>
    	
        
        <table class="controldemaquinas izquierda example">
           <thead class="fondocabeza">
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
                </thead>
                 {$num=0}
                {foreach from=$idto item=idtop}
                <tr><td>{$idtop}</td>
                <td>{$horas[$num]}</td>
                <td>{$valor[$num]}</td>
                <td>{$lugar[$num]}</td>
                <td>{$fecha[$num]}</td>
                <td>{$idtrabajo[$num]}</td>
                <td>{$estado[$num]}</td>
                <td><a href="logicadn.php?control=elitrbop&& id={$idtop}&&cedula={$id}&&saldo={$saldo}" onClick="return cofirmareliminar()" class="tabla" ><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>
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