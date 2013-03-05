<?php /* Smarty version Smarty-3.1.10, created on 2012-09-21 16:37:34
         compiled from "templates\cuentas_de_pago_cobro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19566505c97cedcab04-49757247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af665890929ed39e495d42745d06197f86d0e29' => 
    array (
      0 => 'templates\\cuentas_de_pago_cobro.tpl',
      1 => 1346430485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19566505c97cedcab04-49757247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gastocuentacobro' => 0,
    'gastooperador' => 0,
    'gastoproveedor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c97ceeabb62_31514858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c97ceeabb62_31514858')) {function content_505c97ceeabb62_31514858($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/cuentas_de_pago_cobro.css"  type="text/css"  rel="stylesheet" media="all"  /> 



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
                    <h1 class="head-h1cen izquierda" > Cuentas  </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Control de cuentas </h2>
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
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=inicio" class="enlinea izquierda">Volver a el inicio</a>
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
                                 Cuentas
                             </li>
                            <li >
                                <b> Control de cuentas </b> 
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
                	Cuentas por cobrar.
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones margeninterno"> 
    		
    <p class="negrita izquierda margenparrafos"> Se encuentran cuentas de cobro no canceladas por valor :</p> 
    <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['gastocuentacobro']->value;?>
' class="izquierda"/>
    <a href='logicadn.php?control=cuentas_cobro'><input type='button' value='Ver Cuentas' class="izquierda" /></a>
            
            </td> 		
         </tr>


             <tr>
          <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Cuentas por pagar: Operadores.
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones margeninterno"> 
            
             
    <p class="negrita izquierda margenparrafos"> Valor de cuentas por pagar a operadores : </p> 
    <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['gastooperador']->value;?>
' class="izquierda"/>
    <a href='logicadn.php?control=operadores'><input type='button' value='Ver Cuentas' class="izquierda" /></a>
               
            </td> 		
         </tr>
         
          <tr> 
          <td class="fondocabeza"> 
          
            	<p class="negrita tituloinfosup">
                	Cuentas por pagar: Proveedores.
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones margeninterno">
   
            
    <p class="negrita izquierda margenparrafos ">Se encuentran cuentas por pagar : </p> 
    <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['gastoproveedor']->value;?>
'  />
    <a href='logicadn.php?control=proveedor'><input type='button' value='Ver Cuentas' /></a>
           
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