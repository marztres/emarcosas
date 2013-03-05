<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarproveedor.css"  type="text/css"  rel="stylesheet" media="all"  /> 










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
				Agregar Proveedor  
			</p>
			
			<div id="menusuperior">
            	<img src="/emarcosas/templates/img/barradebotones.jpg" width="890" height="36" alt="menusuperior" class="barradebotones"/> 
                <div class="contenedorbotones">
                	<a href="logicadn.php?control=inicio" class="izquierda inicio"></a>
                	<a href="logicadn.php?control=maquinaria" class="izquierda maquinas"></a>
                    <a href="logicadn.php?control=mantenimientos" class="izquierda mantenimiento"></a>
                    <a href="logicadn.php?control=contratos" class="izquierda contratos"></a>
                    <a href="logicadn.php?control=operadores" class="izquierda operadores"></a>
                    <a href="logicadn.php?control=proveedores" class="izquierda proveedores"></a>
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
                	Paso 1: Información del Proveedor.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            	<form name='proveedor' method="post" action="logicadn.php?control=agregarproveedor">
              <p class="negrita izquierda tituloinfoid" >Ingrese un Id para este proveedor: </p>  
              <p class="negrita izquierda titulonombre" >Nombre: </p>  
              <p class="negrita izquierda titulodireccion" >Dirección: </p>  


                
               <input  type='text' name='id'         class="izquierda cajainfoid"  />
               <input  type="text" name="nombre"     class="izquierda  cajanombre" />
               <input  type="text" name="direccion"  class="izquierda cajadireccion" />
              
				              
                              

               <p class="negrita izquierda titulotelefono" >Telefono: </p>
               <p class="negrita izquierda titulociudad" >Ciudad: </p>               
<br />
<br />
              
               <input  type="text" name="telefono" class="izquierda cajatelefono" />
               <input  type="text" name="ciudad"   class="izquierda cajaciudad" />
                
            </td> 		
        </tr>
        
        
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 2: Tipo de Distribución.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            
          
          <p class="negrita izquierda titulodistri" >Seleccione los elementos a distribuir:</p>
   

          
          <input type="checkbox" name="combustible" value="combustible" class="izquierda cajacombustible" />
          <p class="negrita izquierda titulocombustible" >Combustible</p>


          
		  <input name="lubricante" type="checkbox" value='lubricante' class="izquierda cajalubricante"  /> 
          <p class="negrita izquierda titulolubricante" >Lubricante</p>
           

          
            
            </td> 		
        </tr>
        
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
                
                
                
           		<input type='submit' value='Agregar Proveedor' class="izquierda botonregistrar" />
                
             </form>   
                
                
                
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