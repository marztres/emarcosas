<?php /* Smarty version Smarty-3.1.10, created on 2012-09-21 16:42:35
         compiled from "templates\controlproveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31141505c98fba04c00-66132720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba86c6df389289ec0f9e685384cee1c6e1347b5' => 
    array (
      0 => 'templates\\controlproveedor.tpl',
      1 => 1346739010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31141505c98fba04c00-66132720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'listaproveedor' => 0,
    'cont' => 0,
    'nombre' => 0,
    'combustible' => 0,
    'lubricante' => 0,
    'pagar' => 0,
    'aux1' => 0,
    'aux2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c98fbb35569_12657847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c98fbb35569_12657847')) {function content_505c98fbb35569_12657847($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/controldeproveedores.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	

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
                    <h2 class="head-h2down izquierda noflotante"> Control de proveedores  </h2>
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
                    <a href="logicadn.php?control=interfazproveedor" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=interfazproveedor" class="enlinea izquierda">Agregar proveedor</a>
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
                              <b> Control de proveedor </b>
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->
<div id="login">

            <table class='controldemaquinas example izquierda noflotante'>
   			<thead class="fondocabeza">
            <tr>
 			  <td class='tipomaquina fondocabeza' >ID</td>
              <td class='idmaquina fondocabeza' > Nombre</td> 
              <td class='trabajomaquina fondocabeza' > Combustible</td>
              <td class='registromaquina fondocabeza'> lubricante</td>
   			  <td class='notificacion fondocabeza'>Credito</td>
              <td class='ultimotrabajo fondocabeza'>Registro</td>
              <td class='eliminar fondocabeza'>	Eliminar</td>
   			 </tr>
             </thead>
			 <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable(0, null, 0);?>
			 <?php  $_smarty_tpl->tpl_vars['listaproveedor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listaproveedor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listaproveedor']->key => $_smarty_tpl->tpl_vars['listaproveedor']->value){
$_smarty_tpl->tpl_vars['listaproveedor']->_loop = true;
?>
			 <tr>
				<td ><?php echo $_smarty_tpl->tpl_vars['listaproveedor']->value;?>
</td>
				<td ><?php echo $_smarty_tpl->tpl_vars['nombre']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
				<td ><?php echo $_smarty_tpl->tpl_vars['combustible']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
				<td ><?php echo $_smarty_tpl->tpl_vars['lubricante']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
				<td ><?php echo $_smarty_tpl->tpl_vars['pagar']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
				<td >
                	<a href="logicadn.php?control=datosproveedor&& elpro=<?php echo $_smarty_tpl->tpl_vars['listaproveedor']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['pagar']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['aux1']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
&& lubricante=<?php echo $_smarty_tpl->tpl_vars['aux2']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
 " class="tabla">Ver Perfil</a> 
                </td>
				<td class="basura" >
                	<a href="logicadn.php?control=eliminarprovedor&& elpro=<?php echo $_smarty_tpl->tpl_vars['listaproveedor']->value;?>
 " onclick="return cofirmareliminar()" class="tabla" ><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/> </a> 
                </td>
			</tr>
<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable($_smarty_tpl->tpl_vars['cont']->value+1, null, 0);?>  	
<?php } ?>    			     

</table> 

		
		<!--<a href="destruirsesion.php"> Cerrar Sesión </a> -->
        
        	
    
	<!--- container to hold notifications, and default templates --->
	<div id="container" style="display:none">
		
		<div id="default">
			<h1>#{title}</h1>
			<p>#{text}</p>
		</div>
		
		<div id="sticky">
			<a class="ui-notify-close ui-notify-cross" href="#">x</a>
			<h1>#{title}</h1>
			<p>#{text}</p>
		</div>
		
		
		
		<div id="withIcon">
			<a class="ui-notify-close ui-notify-cross" href="#">x</a>
			<div style="float:left;margin:0 10px 0 0"><img src="#{icon}" alt="warning" /></div>
			<h1>#{title}</h1>
			<p>#{text}</p>
		</div>
			
	</div> <!--fin container -->



   
 
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