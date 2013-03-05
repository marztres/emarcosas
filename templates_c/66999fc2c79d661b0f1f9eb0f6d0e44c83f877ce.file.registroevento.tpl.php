<?php /* Smarty version Smarty-3.1.10, created on 2012-09-21 16:08:16
         compiled from "templates\registroevento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31679505c90f06dd447-33697053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66999fc2c79d661b0f1f9eb0f6d0e44c83f877ce' => 
    array (
      0 => 'templates\\registroevento.tpl',
      1 => 1346822585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31679505c90f06dd447-33697053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tipot' => 0,
    'num' => 0,
    'codigomaquinas' => 0,
    'idm' => 0,
    'ide' => 0,
    'cont' => 0,
    'cuenta' => 0,
    'id' => 0,
    'lugar' => 0,
    'ingresos' => 0,
    'gastos' => 0,
    'ganancias' => 0,
    'fk_idmaquina' => 0,
    'id_cuenta_cobro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c90f0b2cb14_31383018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c90f0b2cb14_31383018')) {function content_505c90f0b2cb14_31383018($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/emarcosas/templates/css/registrodeevento.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
				
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
                    <?php if ($_smarty_tpl->tpl_vars['tipot']->value=='contrato'){?>
                     
<style>
.contratos {background:url(/emarcosas/templates/img/botoncontratos-hover.png) no-repeat !important;  width:93px;}
.contratos:hover {background:url(/emarcosas/templates/img/botoncontratos-hover.png) no-repeat; }
.maquinas {background:url(/emarcosas/templates/img/botonmaquinas.png) no-repeat !important; width:94px; }
.maquinas:hover {background:url(/emarcosas/templates/img/botonmaquinas-hover.png) no-repeat; }
</style>

                    <h1 class="head-h1cen izquierda" > Contratos </h1>
                    <?php }else{ ?>

                    <h1 class="head-h1cen izquierda" > Maquinas </h1>
                    <?php }?>
				    <!--fin titulo de modulo -->
                    
                    <!-- usuario + soporte -->
                    <div id="head-divder" class="izquierda"> 
                    	<!--usuario -->
                    	<div id="head-divder-usuarios" class="izquierda"> 
                        	<span class="estiloinline"> Usuario |</span> 
                            <a href="destruirsesion.php" class="enlaces" title="Cerrar sesión activa"> Cerrar Sesión </a> 
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
                    
                    <h2 class="head-h2down izquierda noflotante"> Control de eventos </h2>
			    	<!-- fin titulo seccion -->
                </div>
				<!--fin head -->
                
                
                <!-- contenedor de enlaces -->
                <div id="divenlaces">
                	<a href="logicadn.php?control=inicio" class="inicio boton-espacio-alto" title="Ir a inicio"></a>
                	<a href="logicadn.php?control=maquinaria" class="maquinas boton-espacio-alto" title="Ir a Control de maquinas"></a>
                    <a href="logicadn.php?control=mantenimiento" class="mantenimiento boton-espacio-alto" title="Ir a mantenimiento"></a>
                    <a href="logicadn.php?control=contratos" class="contratos boton-espacio-alto" title="Ir a Control de contratos"></a>
                    <a href="logicadn.php?control=operadores" class="operadores boton-espacio-alto" title="Ir a Control de operadores"></a>
                    <a href="logicadn.php?control=proveedor" class="proveedores boton-espacio-alto" title="Ir a Control de proveedores"></a>
                    <a href="/emarcosas/logicadn.php?control=controlcuentas" class="cuentas boton-espacio-alto"></a>
                    <a href="/emarcosas/logicadn.php?control=estadisticas_ingresos" class="estadisticas boton-espacio-alto"></a> 
                </div>  
                <!-- fin contenedor de enlaces -->
                
				<!--botones de barra principal -->             
                <div id="divbotones" >
                   
                    <?php if ($_smarty_tpl->tpl_vars['tipot']->value=='contrato'){?>
                     <a href="javascript:history.back(1)" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="javascript:history.back(1)" class="enlinea izquierda">Volver a control de maquinas en contrato</a>
                    <?php }else{ ?>
					 <a href="logicadn.php?control=maquinaria" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=maquinaria" class="enlinea izquierda">Volver a control de maquinas</a>
					


                    <?php }?>
                    
                    
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=evento&&id=<?php echo $_smarty_tpl->tpl_vars['codigomaquinas']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" class="enlinea">
                         <img src="/emarcosas/templates/img/botonevento3.png" width="23" height="23"  class="enlinea izquierda" title="Agregar evento"/> 
                    </a>
                    <a href="logicadn.php?control=evento&&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&& tipo=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
" class="enlinea izquierda">Agregar evento</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=evento&&id=<?php echo $_smarty_tpl->tpl_vars['codigomaquinas']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" class="enlinea">
                         <img src="/emarcosas/templates/img/botoncuentacobro3.png" width="23" height="23"  class="enlinea izquierda" title="Generar cuenta de cobro"/> 
                    </a>
                   <a href="javascript:viod(0)"  onclick="javascript:document.forms['generar'].submit();" class="enlinea izquierda">Generar cuenta de cobro</a>
                   
                </div>  
            	<!-- fin botones de barra principal --> 
                
                
             <?php if ($_smarty_tpl->tpl_vars['tipot']->value=='contrato'){?>
                    <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="/emarcosas/templates/inicio.html" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Contratos 
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de contratos</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla">Modificar contrato</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla"> Control de maquinas en contratos </a>
                            </li>

                         	<li >
                                 <b> Control de eventos  </b>
                            </li>
                            
                         </ul>
                    </div>
             

                    <?php }else{ ?>
						<!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="/emarcosas/templates/inicio.html" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Maquinas 
                            </li>
                            <li>
                                <a href="logicadn.php?control=maquinaria" class="tabla">control de maquinas</a>
                            </li>
                         	<li >
                                 Control de eventos 
                            </li>
                            
                         </ul>
                    </div>
           


                    <?php }?>

  				</div>
			 <!--fin cabecera -->
<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información de la Maquina
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            	
				<p class="izquierda negrita tituloinfoid" >  Id </p> 
   				<input type='text negrita' value='<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
' readonly='readonly' class="izquierda negrita" />
   				<p class="izquierda negrita tituloinfotipo" >  Tipo </p>
   				<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
' readonly='readonly' class="izquierda negrita"/>
            </td> 		
        </tr>
    </table>
    
     <form name="generar" method="post" action="logicadn.php?control=cuentadecobro" >
    <table id="example" class="controldemaquinas izquierda">
    
    <thead class="fondocabeza"> 
  
     	<tr>
         
            <td 	class='seleccionar fondocabeza'>	<b>-</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Lugar</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Ingresos totales </b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Gastos Totales</b></td>
			<td  	class='registromaquina fondocabeza'><b>Ganancias</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Trabajo</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>registro</b></td>
            <td  	class='eliminar fondocabeza'>	<b>cuenta</b></td>
            <td  	class='basura fondocabeza'>	<b>Eliminar</b></td>
		</tr>
     </thead> 
		<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value){
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
		
        <tr>
         
            <?php if ($_smarty_tpl->tpl_vars['cuenta']->value[$_smarty_tpl->tpl_vars['cont']->value]=='generada'){?>
			<td><input name="ide" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" disabled="disabled" /></td>
            <?php }else{ ?>
            <td><input name="ide" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  /></td>
            <?php }?>
            
            
			<td><?php echo $_smarty_tpl->tpl_vars['lugar']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['ingresos']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['gastos']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['ganancias']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
</td>
    
          
			<td><a href='logicadn.php?control=trabajo&& id=<?php echo $_smarty_tpl->tpl_vars['fk_idmaquina']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
&& ide=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&& tipot=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
' class="tabla">Agregar Trabajo</a></td>
			<td><a href='logicadn.php?control=registro&& id=<?php echo $_smarty_tpl->tpl_vars['fk_idmaquina']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
&& ide=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&& tipot=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
' class="tabla">Ver Registro</a></td>
            <?php if ($_smarty_tpl->tpl_vars['cuenta']->value[$_smarty_tpl->tpl_vars['cont']->value]=='generada'){?>
			<td><a href='logicadn.php?control=ver_cuenta_cobro&&cuenta=<?php echo $_smarty_tpl->tpl_vars['id_cuenta_cobro']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
' > <img src="/emarcosas/templates/img/cuentagenerada.png" height="16" width="16" title="ver cuenta"/></a></td>
            <?php }else{ ?>
            <td><img src="/emarcosas/templates/img/cuentanogenerada.png" height="16" width="16" title="No hay cuenta generada"/></td>
            <?php }?>
			<td><a href='logicadn.php?control=elievento&& ide=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&&id=<?php echo $_smarty_tpl->tpl_vars['idm']->value;?>
&&tipo=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
' onClick="return cofirmareliminar()"> <img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" title="eliminar"/> </a></td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable($_smarty_tpl->tpl_vars['cont']->value+1, null, 0);?>
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





</form>

</body>
</html>
























































<?php }} ?>