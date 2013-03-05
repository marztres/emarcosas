<?php /* Smarty version Smarty-3.1.10, created on 2012-09-21 16:34:48
         compiled from "templates\registromaquina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26736505c9728caf804-13328336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b0e8c341bd76eea9c98bd1264113841c9a7ce5' => 
    array (
      0 => 'templates\\registromaquina.tpl',
      1 => 1347318524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26736505c9728caf804-13328336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tipot' => 0,
    'idmaquina' => 0,
    'cont' => 0,
    'fk_idmaquina' => 0,
    'id' => 0,
    'ide' => 0,
    'maquinas' => 0,
    'lugar' => 0,
    'idtrabajo' => 0,
    'sum' => 0,
    'nombretrabajo' => 0,
    'fecha' => 0,
    'ingresos' => 0,
    'gastos' => 0,
    'ganancias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c9728e81b81_44201211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c9728e81b81_44201211')) {function content_505c9728e81b81_44201211($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/registrodetrabajo.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>

<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable( {
        "aaSorting": [[ 2, "desc" ]]
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
                    <h2 class="head-h2down izquierda noflotante"> Registro de trabajo  </h2>
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
                    <a href="logicadn.php?control=registroevento&&id=<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
&&tipo=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=registroevento&&id=<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
&&tipo=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
" class="enlinea izquierda">volver a control de eventos</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=trabajo&& id=<?php echo $_smarty_tpl->tpl_vars['fk_idmaquina']->value[$_smarty_tpl->tpl_vars['cont']->value];?>
&& ide=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botontrabajo.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=trabajo&& id=<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
&& ide=<?php echo $_smarty_tpl->tpl_vars['ide']->value;?>
&& tipot=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
" class="enlinea izquierda">Agregar trabajo</a>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Maquinas 
                             </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de maquinas</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de eventos</a>
                            </li>
                            <li>
                                Registro de trabajo 
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<form name="generar" method="post" action="logicadn.php?control=er" ONSUBMIT='return pregunta();' >

<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información de la Maquina:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            	
				<p class="izquierda negrita tituloinfoid">  Id </p> 
   				<input type='text negrita' value='<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
' readonly='readonly' class="izquierda negrita"/>
   				<p class="izquierda negrita tituloinfotipo" >  Tipo </p>
   				<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['maquinas']->value;?>
' readonly='readonly' class="izquierda negrita"/>

            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del evento:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
                <p class="izquierda negrita tituloinfoid">  Lugar del evento </p>
                <input type='text' name='evento' value='<?php echo $_smarty_tpl->tpl_vars['lugar']->value;?>
' class="izquierda negrita" />
            </td> 		
        </tr>
    </table>
    
    
    
    <table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">
    	<tr>
            <td 	class='seleccionar fondocabeza'>	<b>-</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Lugar</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Fecha</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Ingresos totales</b></td>
			<td  	class='registromaquina fondocabeza'><b>Gastos Totales</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Ganancias</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Revisar Detalles</b></td>
            <td  	class='eliminar fondocabeza'>	<b>Eliminar</b></td>
		</tr>
      </thead>   
		   
            <?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_variable(0, null, 0);?>
      	    <?php  $_smarty_tpl->tpl_vars['idt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['idtrabajo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idt']->key => $_smarty_tpl->tpl_vars['idt']->value){
$_smarty_tpl->tpl_vars['idt']->_loop = true;
?>
    	    <td><input type="checkbox"  name="idc[<?php echo $_smarty_tpl->tpl_vars['idtrabajo']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
]" /></td>    
    		<td><?php echo $_smarty_tpl->tpl_vars['nombretrabajo']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
</td>
    		<td><?php echo $_smarty_tpl->tpl_vars['fecha']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
</td>  
    	    <td><?php echo $_smarty_tpl->tpl_vars['ingresos']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
</td>  
    		<td><?php echo $_smarty_tpl->tpl_vars['gastos']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
</td>
    		<td><?php echo $_smarty_tpl->tpl_vars['ganancias']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
</td>
    		<td>
            	<a href="logicadn.php?control=modificar&& idtr=<?php echo $_smarty_tpl->tpl_vars['idtrabajo']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
&&  idmaq=<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
&&tipot=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
" class="tabla modificar">Modificar</a> 
            </td>
    		<td>
            <a onclick="return cofirmareliminar()"  href="logicadn.php?control=eru&& idtu=<?php echo $_smarty_tpl->tpl_vars['idtrabajo']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
&& ing=<?php echo $_smarty_tpl->tpl_vars['ingresos']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
&& gas=<?php echo $_smarty_tpl->tpl_vars['gastos']->value[$_smarty_tpl->tpl_vars['sum']->value];?>
&& id=<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
&& ide=<?php echo $_smarty_tpl->tpl_vars['ide']->value;?>
&& tipot=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
 " class="tabla "><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/> </a></a>
            </td> 
	    </tr>
  			  <?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum']->value+1, null, 0);?>
              <?php } ?> 
		</table>
		<input type="submit" value="eliminar" class="eliminarvarios izquierda noflotante"   />
		
        </form>




    
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