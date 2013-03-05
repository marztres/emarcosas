<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/estandar.css"  type="text/css"  rel="stylesheet" media="all"  /> 










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
            
            </div>
			
            <div id="enlaces" > 
                <div > 
                	 <a href="/emarcosas/logicadn.php?control=operadores" >
                		<img src="/emarcosas/templates/img/botonvolver.png" width="23" height="23" /> 
                	 </a>
                </div>
                <div > 
                	<a href="/emarcosas/logicadn.php?control=operadores" class="">
                		<p >
						     Volver a control de Operadores   
						</p> 
               		</a>
            	</div>
             </div>
            
</div>


<div id="login">
	
   
   <!--inicio tabla formularios-->
   	<table class="formularios">
 
 <form name="operador" action="logicadn.php?control=guardaroperador" method="post">
 
    	<tr>
            <td  	class='filas'>   <p >Cedula:</p>    </td>    
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
			<td 	>	<p >  Telefono: </p>   </td>    
			<td 	>	<p >  Dirección: </p>    </td>
			<td  	>   <p >  Correo </p>  </td>
			<td 	>   <p >  sueldo </p>     </td>
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
	<!--fin tabla formularios-->
       
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