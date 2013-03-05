<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 21:52:17
         compiled from "templates\controloperador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16762505c98fd2acc18-72386001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8efc9731b8d36166b1b9aefc03b88faefe8d2d5' => 
    array (
      0 => 'templates\\controloperador.tpl',
      1 => 1353880318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16762505c98fd2acc18-72386001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c98fd3f12f2_49389645',
  'variables' => 
  array (
    'id' => 0,
    'ides' => 0,
    'num' => 0,
    'nombre' => 0,
    'apellido' => 0,
    'telefono' => 0,
    'pagar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c98fd3f12f2_49389645')) {function content_505c98fd3f12f2_49389645($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/controloperadores.css"  type="text/css"  rel="stylesheet" media="all"  /> 


<title>Emarco S.A.S </title>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable({
        "aaSorting": [[ 1, "asc" ]]
    });
				
			} );
		</script>
<!--tablas dinamicas -->
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
                    <h2 class="head-h2down izquierda noflotante"> Control de operadores  </h2>
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
                    <a href="logicadn.php?control=agregaroperador" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=agregaroperador" class="enlinea izquierda">Agregar operador</a>
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
                                 Operadores 
                             </li>
                            <li>
                                Control de operadores
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<div id="login">
	<table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">	
        <tr>
            <td 	class='seleccionar fondocabeza'>	 <b>Cedula</b></td>    
			<td 	class='tipomaquina fondocabeza'>	 <b>Nombres</b></td>
			<td  	class='idmaquina fondocabeza'>		 <b>Apellidos</b></td>
			<td 	class='trabajomaquina fondocabeza' > <b>Telefono</b></td>
			<td  	class='eliminar fondocabeza'>	<b>Modificar</b></td>
            <td  	class='registromaquina fondocabeza'> <b>Saldo pendiente</b></td>
			<td 	class='notificacion fondocabeza' >	 <b>Opcion</b></td>
            
		    <td  	class='eliminar fondocabeza'>	<b>Eliminar</b></td>
		</thead>	
            <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['ides'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ides']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ides']->key => $_smarty_tpl->tpl_vars['ides']->value){
$_smarty_tpl->tpl_vars['ides']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ides']->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['nombre']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['apellido']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['telefono']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><a href="logicadn.php?control=modoperador&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" class="tabla">Modificar </a> </td> 
            <td><?php echo $_smarty_tpl->tpl_vars['pagar']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td>
            	<a href="logicadn.php?control=registrooperador&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['num']->value];?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['pagar']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" class="tabla">Ver Registro</a></td>
               
			<td>
            	<a href="logicadn.php?control=elioperador&& id=<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" onClick="return cofirmareliminar()"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>
			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
			</tr>
			<?php } ?>
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