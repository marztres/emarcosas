<?php /* Smarty version Smarty-3.1.10, created on 2012-09-24 20:04:33
         compiled from "templates\facturalubricante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304335060bcd14a5f23-91371329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0bc8c79128b66f903157a018cf8c214341f6a8' => 
    array (
      0 => 'templates\\facturalubricante.tpl',
      1 => 1346989263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304335060bcd14a5f23-91371329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idprovedor' => 0,
    'saldo' => 0,
    'co' => 0,
    'lu' => 0,
    'nombrepro' => 0,
    'telefono' => 0,
    'direccion' => 0,
    'ciudad' => 0,
    'combustible' => 0,
    'lubricante' => 0,
    'id' => 0,
    'factura' => 0,
    'num' => 0,
    'fechatrb' => 0,
    'fkgalones' => 0,
    'fkgalonesrest' => 0,
    'fkvalor' => 0,
    'fkestado' => 0,
    'fkfase' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5060bcd16a00d6_51905575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5060bcd16a00d6_51905575')) {function content_5060bcd16a00d6_51905575($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/facturalubricanteregistro.css"  type="text/css"  rel="stylesheet" media="all"  /> 


<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable();
				
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
                    <h2 class="head-h2down izquierda noflotante"> Control de facturas de lubricante  </h2>
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
                    <a href="logicadn.php?control=datosproveedor&&elpro=<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=datosproveedor&&elpro=<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="enlinea izquierda">Volver a perfil de proveedor</a>
                    <span class="izquierda">|</span>
                  	<a href="logicadn.php?control=addfl&& id=<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
&& nombre=<?php echo $_smarty_tpl->tpl_vars['nombrepro']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=addfl&& id=<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
&& nombre=<?php echo $_smarty_tpl->tpl_vars['nombrepro']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="enlinea izquierda"> Agregar factura de lubricante </a>
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
                                <a href="logicadn.php?control=inicio" class="tabla"> control de proveedores</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Perfil de proveedor</a>
                            </li>
                            <li >
                                 <b> Control de facturas de lubricante </b>
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
            	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
"  />
       		</td>    
			<td>	
            	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nombrepro']->value;?>
"  />
       
            </td>
			
            <td>   
            	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
"  />
      	    </td>
			
            <td>   
            	 <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
" />
        	</td>
			<td>   
            	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>
" />
          
            </td>
        </tr>
        <tr>
			<td 	>	<p > combustible: </p>   </td>    
			<td 	>	<p > lubricante: </p>    </td>
            <td 	>	<p > Credito: </p>    </td>
		</tr>
        
        <tr>
			<td >	
        	    <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['combustible']->value;?>
' />
     	
            </td>    
			<td> 
                 <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['lubricante']->value;?>
' />
     		</td>
			<td> 
            	<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
'  />
    		 </td>
					
    
    
    	</tr>
           
           </table>
	
    
    
    
    <!--fin tabla de formulario-->	
  
               
            </td> 		
        </tr>
        
          
          
          
                
   
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Registro de Facturas de lubricante
                </p>
            </td>	
		 </tr>
         </table>
    	 
         
     <table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">	
        <tr>
            <td 	class='seleccionar fondocabeza'><b>  ID Factura </b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Fecha</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Galones Totales</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Galones Restantes</b></td>
			<td  	class='registromaquina fondocabeza'><b>Valor</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Estado</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Fase</b></td>
            <td  	class='eliminar fondocabeza'>	<b>Opcion</b></td>
            <td  	class='eliminar fondocabeza'>	<b>Eliminar</b></td>
		</tr> 
	  </thead>
     	
			<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>    
			<?php  $_smarty_tpl->tpl_vars['factura'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['factura']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['factura']->key => $_smarty_tpl->tpl_vars['factura']->value){
$_smarty_tpl->tpl_vars['factura']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['factura']->value;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fechatrb']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fkgalones']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fkgalonesrest']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fkvalor']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fkestado']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fkfase']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
			<td><a href="logicadn.php?control=verdetallesfl&& id=<?php echo $_smarty_tpl->tpl_vars['factura']->value;?>
&& name=<?php echo $_smarty_tpl->tpl_vars['nombrepro']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&idpro=<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
" class="tabla">Ver Detalles</a></td>
			<td><a href="logicadn.php?control=elifl&& id=<?php echo $_smarty_tpl->tpl_vars['factura']->value;?>
&& name=<?php echo $_smarty_tpl->tpl_vars['nombrepro']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
&&idpro=<?php echo $_smarty_tpl->tpl_vars['idprovedor']->value;?>
&&combustible=<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
&&lubricante=<?php echo $_smarty_tpl->tpl_vars['lu']->value;?>
"      onClick="return cofirmareliminar()" class="tabla"><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>
        </tr>
		<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
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