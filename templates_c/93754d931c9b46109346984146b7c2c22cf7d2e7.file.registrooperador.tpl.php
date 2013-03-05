<?php /* Smarty version Smarty-3.1.10, created on 2012-09-22 22:24:22
         compiled from "templates\registrooperador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18590505e3a968d9bb0-16892774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93754d931c9b46109346984146b7c2c22cf7d2e7' => 
    array (
      0 => 'templates\\registrooperador.tpl',
      1 => 1346942023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18590505e3a968d9bb0-16892774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cedula' => 0,
    'saldo' => 0,
    'nombre' => 0,
    'apellido' => 0,
    'edad' => 0,
    'sexo' => 0,
    'telefono' => 0,
    'direccion' => 0,
    'correo' => 0,
    'sueldo' => 0,
    'idto' => 0,
    'idtop' => 0,
    'num' => 0,
    'horas' => 0,
    'valor' => 0,
    'lugar' => 0,
    'fecha' => 0,
    'idtrabajo' => 0,
    'estado' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505e3a96a74626_54633987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e3a96a74626_54633987')) {function content_505e3a96a74626_54633987($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/registrooperador.css"  type="text/css"  rel="stylesheet" media="all"  /> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<!--inicio scroll -->


<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:218}, 2500);
		return false;
	});
});
</script>
 

<!--fin scroll  -->

<!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable( 
				
				
						{
							"aoColumnDefs": [ 
                        						{ "bSearchable": false, "bVisible": false, "aTargets": [ 0,5 ] }
                    						],"aaSorting": [[ 6, "desc" ]]
						     
						}  
					 );
				
			} );
		</script>
<!--tablas dinamicas -->

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	





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
                    <h1 class="head-h1cen izquierda" > Operador </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Registro de operador </h2>
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
                    <a href="logicadn.php?control=operadores" class="enlinea izquierda">Volver a control de operador</a>
                    <span class="izquierda">|</span>
                    <a href="logicadn.php?control=pagaroperador&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonpago.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=pagaroperador&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea izquierda"> Hacer pago</a>
                    <span class="izquierda">|</span>
                	<a href="logicadn.php?control=registrodepago&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonregistrodecuentas.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=registrodepago&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea izquierda"> Registro de pagos</a>
                    <span class="izquierda">|</span>
                    <a href="#" class="enlinea" >
                    	<img src="/emarcosas/templates/img/botoneliminar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=elioperador&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
" class="enlinea izquierda" onClick="return cofirmareliminar()"> Eliminar operador</a>
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
                                <a href="logicadn.php?control=inicio" class="tabla">control de operadores</a>
                            </li>
                            <li >
                                 <b> Registro de operador</b> 
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
                	Información del Operador.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
    
     <!--inicio tabla formularios -->
     
     <table class="formularios">
 
<form name="operador" action="logicadn.php?control=guardaroperador" method="post">
 
 
    	<tr>
            <td 	class='filas'>   <p >Cedula:</p>    </td>    
			<td 	class='filas'>	 <p >Nombre:</p>    </td>
			<td  	class='filas'>	 <p >Apellidos:</p> </td>
			<td 	class='filas' >  <p >edad:</p>      </td>
            <td 	class='filas' >  <p >Sexo:</p>      </td>
				
		</tr> 
		<tr>
			<td 	>	<input type='text' value="<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
"  />   </td>    
			<td 	>	<input type='test'value='<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
'  />    </td>
			<td  	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
' />  </td>
			<td 	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['edad']->value;?>
'  />     </td>
			<td 	>   <input type='text'value='<?php echo $_smarty_tpl->tpl_vars['sexo']->value;?>
' />       </td>
        </tr>
        <tr>
			<td 	>	<p > Telefono: </p>   </td>    
			<td 	>	<p > Dirección: </p>    </td>
			<td  	>   <p >  Correo: </p>  </td>
			<td 	>   <p > sueldo: </p>     </td>
			<td 	>   <p >  Saldo Pendiente: </p>  </td>
        </tr>
        
        <tr>
			<td 	>	<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
'  />        </td>    
			<td 	>	<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
'  />    </td>
			<td  	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
'  />  </td>
			<td 	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['sueldo']->value;?>
'  />     </td>
			<td 	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
' />       </td>
        </tr>
           
           </table>
	
     
     <!--fin tabla formularios -->
      
     
  
               
            </td> 		
        </tr>
        
          
          
          
                
   
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	 Registro de Servicios
                </p>
            </td>	
		 </tr>
     	 </table>
    	
        
        <table class="controldemaquinas izquierda example">
           <thead class="fondocabeza">
                <tr>
                    <td 	class='seleccionar fondocabeza'>	<b>Id</b></td>    
                    <td 	class='tipomaquina fondocabeza'>	<b>Horas</b></td>
                    <td  	class='idmaquina fondocabeza'>		<b>Valor</b></td>
                    <td 	class='trabajomaquina fondocabeza' ><b>Lugar</b></td>
                    <td  	class='registromaquina fondocabeza'><b>Fecha</b></td>
                    <td 	class='notificacion fondocabeza' >	<b>Id trabajo</b></td>
                    <td  	class='ultimotrabajo fondocabeza'>	<b>Estado</b></td>
                    <td  	class='eliminar fondocabeza'>	    <b>Eliminar</b></td>
                </tr> 
                </thead>
                 <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['idtop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idtop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['idto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idtop']->key => $_smarty_tpl->tpl_vars['idtop']->value){
$_smarty_tpl->tpl_vars['idtop']->_loop = true;
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['idtop']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['horas']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['valor']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lugar']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['fecha']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['idtrabajo']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                <td><a href="logicadn.php?control=elitrbop&& id=<?php echo $_smarty_tpl->tpl_vars['idtop']->value;?>
&&cedula=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&&saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" onClick="return cofirmareliminar()" class="tabla" ><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16"/></a></td>
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