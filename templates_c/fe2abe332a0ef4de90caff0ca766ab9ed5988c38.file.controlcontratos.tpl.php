<?php /* Smarty version Smarty-3.1.10, created on 2012-09-22 21:38:53
         compiled from "templates\controlcontratos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31197505e2fed16b939-12970321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2abe332a0ef4de90caff0ca766ab9ed5988c38' => 
    array (
      0 => 'templates\\controlcontratos.tpl',
      1 => 1347341247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31197505e2fed16b939-12970321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idcontrato' => 0,
    'idc' => 0,
    'num' => 0,
    'fk_idlugar' => 0,
    'estado' => 0,
    'valor_inicial' => 0,
    'valor_final' => 0,
    'fecha_inicio' => 0,
    'fecha_finalizado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505e2fed2dbcc7_03744175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e2fed2dbcc7_03744175')) {function content_505e2fed2dbcc7_03744175($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/controldecontratos.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable( {
        "aaSorting": [[ 6, "desc" ]]
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
                    <h1 class="head-h1cen izquierda" > Contratos </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Control de contratos  </h2>
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
                    <a href="logicadn.php?control=agregarcontrato" class="enlinea">
                    	<img src="/emarcosas/templates/img/botoncontrato2.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=agregarcontrato" class="enlinea izquierda">Agregar contrato</a>
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
                                 Contratos 
                            </li>
                            <li>
                                <b> Control de contratos </b>
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<div id="login">


<table class='controldemaquinas example izquierda'>
   		<thead class="fondocabeza">
        	<tr>
 			  <td class='tipomaquina fondocabeza' >Id</td>
              <td class='idmaquina fondocabeza' > Lugar</td> 
              <td class='trabajomaquina fondocabeza' > Opcion</td>
              <td class='registromaquina fondocabeza'> Estado</td>
   			  <td class='notificacion fondocabeza'>Valor Inicial</td>
              <td class='ultimotrabajo fondocabeza'>Valor Final</td>
              <td class='fechainicial fondocabeza'>	Fecha de Inicio</td>
              <td class='fechafinal fondocabeza'>Fecha Finalizado</td>
              <td class='eliminar fondocabeza'>	Eliminar</td>
   			</tr>
        </thead>
			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['idc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['idcontrato']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idc']->key => $_smarty_tpl->tpl_vars['idc']->value){
$_smarty_tpl->tpl_vars['idc']->_loop = true;
?>
<tr>
<td> <textarea class="ids" readonly="readonly"><?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
</textarea></td>
<td><?php echo $_smarty_tpl->tpl_vars['fk_idlugar']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
<td><a href="logicadn.php?control=modificarcontrato&&id=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
&& estado=<?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" class="tabla">Modificar</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['valor_inicial']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['valor_final']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['fecha_inicio']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['fecha_finalizado']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
<td><a href='logicadn.php?control=elicontrato&& idc=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
' onClick="return cofirmareliminar()"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>


</tr>
<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
<?php } ?>
</tr>  		
            
            </table>  

		<!--<a href="destruirsesion.php"> Cerrar Sesión </a> -->
       
        	
    

   
 
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