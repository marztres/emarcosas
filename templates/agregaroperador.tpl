<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregaroperador.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' Valor invalido e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' Valor invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es obligatorio.\n';}
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
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
                    <h1 class="head-h1cen izquierda" > Operadores</h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Agregar operador  </h2>
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
                    <a href="logicadn.php?control=operadores" class="enlinea izquierda">Volver a control de operadores</a>
                    <span class="izquierda none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li>
                                Operadores
                            </li>
                            <li >
                                <b> Control de operadores</b> 
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<form name="operador" action="logicadn.php?control=guardaroperador" method="post" ONSUBMIT='return pregunta_operador();' >
<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 1: Información del Operador.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
            

     
     

          

			       
      
		
	 
			

    <!--tablas formularios -->
    <!--inicio tabla formularios-->
   	<table class="formularios">
 

 
    	<tr>
            <td 	class='filas'>   <p >Cedula:</p>    </td>    
			<td 	class='filas'>	 <p >Nombre:</p>    </td>
			<td  	class='filas'>	 <p >Apellidos:</p> </td>
			<td 	class='filas' >  <p >edad:</p>      </td>
            <td 	class='filas' >  <p >Sexo:</p>      </td>
				
		</tr>
        <tr>  
	        <td>        <input name="cedula" type="text" id="cedula"  />    </td>    
			<td>        <input name="nombres" type="text" id="nombres" />    </td>
			<td>        <input name="apellidos" type="text" id="apellidos" />  </td>
			<td>        <input name="edad" type="text" id="edad" />       </td>
			<td>        <select name="sexo" >
     						<option>Masculino</option>
      			  			<option>Femenino</option>
    				    </select>
            </td>
        </tr>
        <tr>
			<td 	>	<p > Telefono: </p>   </td>    
			<td 	>	<p > Dirección: </p>    </td>
			<td  	>   <p >  Correo: </p>  </td>
        </tr>
        
        <tr>
			<td 	><input name="telefono" type="text" id="telefono"/>	  </td>    
			<td 	> <input name="direccion" type="text" id="direccion" />  </td>
			<td  	> <input name="correo" type="text" id="correo" />     </td>
        </tr>
           
    </table>
	<!--fin tabla formularios-->
    <!--tabla formulario  -->
  
          
          
                
   
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 2: Sueldo.
                </p>
            </td>	
		 </tr>
     	 <tr class="sinfondo">	
            <td class="informacionbotones "> 
        	
            
            <p class="izquierda negrita psueldo"> Ingrese el valor del sueldo de este operador:</p>
			<input name="sueldo" type="text" class="cajasueldo" id="sueldo" />
		    
            
            
     	    </td> 		
         </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones "> 
        	
            
        	<input type="submit" class="derecha cajaagregarop" onclick="MM_validateForm('cedula','','RisNum','nombres','','R','apellidos','','R','edad','','R','telefono','','RisNum','direccion','','R','correo','','RisEmail','sueldo','','RisNum');return document.MM_returnValue" value="Agregar Operador" />
			
            
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