<?php /* Smarty version Smarty-3.1.10, created on 2012-11-14 23:46:55
         compiled from "templates\interfazproveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:936950a42d6f3d8029-14399697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca750907a9e25ca293809c5ad1ce28090d2cc8a' => 
    array (
      0 => 'templates\\interfazproveedor.tpl',
      1 => 1346959213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '936950a42d6f3d8029-14399697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50a42d6f6b8544_15097511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a42d6f6b8544_15097511')) {function content_50a42d6f6b8544_15097511($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarproveedor.css"  type="text/css"  rel="stylesheet" media="all"  /> 



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--inicio scroll -->
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' Valor invalido.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' Valor invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es obligatorio.\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>


<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:200}, 2000);
		return false;
	});
});
</script>


<!--fin scroll  -->





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
                            <a href="destruirsesion" class="enlaces"> Cerrar Sesión </a> 
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
                    <h2 class="head-h2down izquierda noflotante"> Agregar Proveedor  </h2>
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
                    <a href="logicadn.php?control=proveedor" class="enlinea izquierda">Volver a control de proveedor</a>
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
                                 <a href="logicadn.php?control=inicio" class="tabla">Control de proveedores</a> 
                             </li>
                            <li>
                                 <b> Agregar proveedor </b>
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->
<form name='proveedor' method="post" action="logicadn.php?control=agregarproveedor">
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
            	

            
            
            
             <!--tablas formularios -->
    <!--inicio tabla formularios-->
   	<table class="formularios">
 

 
    	<tr>
            <td 	class='filas'>   <p >Ingrese un Id para este proveedor: </p>    </td>    
			<td 	class='filas'>	 <p >Nombre:</p>    </td>
			<td  	class='filas'>	 <p >Dirección:</p> </td>
			
				
		</tr>
        <tr>  
	        <td>        <input type="text" name='id'   id="separador" />    </td>    
			<td>        <input name="nombre" type="text" id="nombre" />    </td>
			<td>        <input name="direccion" type="text" id="direccion" />  </td>
			
        </tr>
        <tr>
			<td 	>	<p > Telefono: </p>   </td>    
			<td 	>	<p >Ciudad: </p>    </td>			
        </tr>
        
        <tr>
			<td 	><input name="telefono" type="text" id="telefono"/>	  </td>    
			<td 	> <input name="ciudad" type="text" id="ciudad"  />  </td>
			
        </tr>
           
    </table>
	<!--fin tabla formularios-->
    <!--tabla formulario  -->
                
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
            
          
          <p class="negrita izquierda titulodistri noflotante" >Seleccione los elementos a distribuir:</p>
   

          
          <input type="checkbox" name="combustible" value="combustible" class="izquierda cajacombustible noflotante" />
          <p class="negrita izquierda titulocombustible " >Combustible</p>
          
		  <input name="lubricante" type="checkbox" value='lubricante' class="izquierda cajalubricante noflotante"  /> 
          <p class="negrita izquierda titulolubricante " >Lubricante</p>
           

          
            
            </td> 		
        </tr>
        
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
                
                
                
           		<input type='submit' class="izquierda botonregistrar" onclick="MM_validateForm('separador','','RisNum','nombre','','R','direccion','','R','telefono','','RisNum','ciudad','','R');return document.MM_returnValue" value='Agregar Proveedor' />
                
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
</html><?php }} ?>