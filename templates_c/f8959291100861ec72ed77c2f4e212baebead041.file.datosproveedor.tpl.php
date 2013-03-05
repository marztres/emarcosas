<?php /* Smarty version Smarty-3.1.10, created on 2012-09-22 22:24:50
         compiled from "templates\datosproveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15141505e3ab2649175-04040167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8959291100861ec72ed77c2f4e212baebead041' => 
    array (
      0 => 'templates\\datosproveedor.tpl',
      1 => 1346948554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15141505e3ab2649175-04040167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'nombre' => 0,
    'nombres' => 0,
    'num' => 0,
    'telefono' => 0,
    'tel' => 0,
    'direccion' => 0,
    'dir' => 0,
    'ciudad' => 0,
    'city' => 0,
    'combustible' => 0,
    'combu' => 0,
    'lubricante' => 0,
    'lubri' => 0,
    'saldo' => 0,
    'co' => 0,
    'lu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505e3ab2829b07_04385865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e3ab2829b07_04385865')) {function content_505e3ab2829b07_04385865($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            	<input type='text' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'/>
     			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
  	 			<?php  $_smarty_tpl->tpl_vars['nombres'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombres']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombres']->key => $_smarty_tpl->tpl_vars['nombres']->value){
$_smarty_tpl->tpl_vars['nombres']->_loop = true;
?>
       		</td>    
			<td>	
            	<input type='text' name='nombre' value='<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
' />
     				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
     				<?php } ?> 
    				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
  					<?php  $_smarty_tpl->tpl_vars['tel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telefono']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tel']->key => $_smarty_tpl->tpl_vars['tel']->value){
$_smarty_tpl->tpl_vars['tel']->_loop = true;
?>
       
            </td>
			
            <td>   
            	<input type='text' name='telefono' value='<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
' />
     				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
     				<?php } ?> 
     				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
  	 				<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['direccion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value){
$_smarty_tpl->tpl_vars['dir']->_loop = true;
?>
      	    </td>
			
            <td>   
            	<input type='text' name='direccion' value='<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
'  />
      				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
     				<?php } ?> 
   					<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
  	 				<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value){
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
        	</td>
			<td>   
            	<input type='text' name='ciudad' value='<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
' />
     				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
     				<?php } ?> 
      				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
  	 				<?php  $_smarty_tpl->tpl_vars['combu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['combustible']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['combu']->key => $_smarty_tpl->tpl_vars['combu']->value){
$_smarty_tpl->tpl_vars['combu']->_loop = true;
?>
          
            </td>
        </tr>
        <tr>
			<td 	>	<p > combustible: </p>   </td>    
			<td 	>	<p > lubricante: </p>    </td>
            <td 	>	<p > Credito: </p>    </td>
		</tr>
        
        <tr>
			<td >	
        	    <input type='text' name='combustible' value='<?php echo $_smarty_tpl->tpl_vars['combu']->value;?>
' />
     	 	    	<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
     				<?php } ?> 
     				<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
  	 				<?php  $_smarty_tpl->tpl_vars['lubri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lubri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lubricante']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lubri']->key => $_smarty_tpl->tpl_vars['lubri']->value){
$_smarty_tpl->tpl_vars['lubri']->_loop = true;
?>
     	
            </td>    
			<td> 
                <input type='text' name='lubricante' value='<?php echo $_smarty_tpl->tpl_vars['lubri']->value;?>
'  />
     		    	<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
     				<?php } ?>
     		</td>
			<td> 
            	<input type="text" name='saldo' value='<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
' />
    		 </td>
					
    
    
    	</tr>
           
           </table>
	
    
    
    
    <!--fin tabla de formulario-->	
           
               
            </td> 		
        </tr>
        
          
          
          
                
    <?php if ($_smarty_tpl->tpl_vars['combu']->value=="si"&&$_smarty_tpl->tpl_vars['lubri']->value=="no"){?>
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
    <input name='pendiente_co' value="<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="izquierda cajasaldo" /> <a href="logicadn.php?control=rcombustible&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="tabla izquierda linksaldo"> Ver Registro</a>
            </td> 		
         </tr>
        
    <?php }elseif($_smarty_tpl->tpl_vars['combu']->value=="no"&&$_smarty_tpl->tpl_vars['lubri']->value=="si"){?>
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
     <input name='pendiente_co' value="<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="izquierda cajasaldo" /> 
     <a href="logicadn.php?control=rlubricante&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="izquierda tabla linksaldo"> Ver Registro</a>
            </td> 		
        </tr>
      
        <?php }else{ ?>
       
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
    <input name='pendiente_co' value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
" class="izquierda cajasaldo"/><a href="logicadn.php?control=rcombustible&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="linksaldo izquierda tabla"> Ver Registro</a><br />
    
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
    <input name='pendiente_co' value="<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
"  class="izquierda cajasaldo"/> <a href="logicadn.php?control=rlubricante&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="linksaldo izquierda tabla"> Ver Registro</a>
    
            </td> 		
        </tr>
    <?php }?>

    
  
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