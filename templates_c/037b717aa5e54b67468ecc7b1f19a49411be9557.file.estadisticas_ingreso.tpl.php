<?php /* Smarty version Smarty-3.1.10, created on 2012-09-22 21:38:57
         compiled from "templates\estadisticas_ingreso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26962505e2ff13e9523-33104654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037b717aa5e54b67468ecc7b1f19a49411be9557' => 
    array (
      0 => 'templates\\estadisticas_ingreso.tpl',
      1 => 1346431418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26962505e2ff13e9523-33104654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ingresos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505e2ff148f421_59119660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e2ff148f421_59119660')) {function content_505e2ff148f421_59119660($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/estadisticas.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<!--estadisticas -->

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="/emarcosas/templates/Jquery/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="/emarcosas/templates/Jquery/jquery.gvChart-1.1.min.js"></script>
		
		<script type="text/javascript">
		gvChartInit();
		jQuery(document).ready(function(){
		
			
			
			
			jQuery('#myTable4').gvChart({
				chartType: 'ColumnChart',
				gvSettings: {
					vAxis: {title: 'Emarcosas Systems'},
					vAxis: {format:'$ #,###'},
					hAxis: {title: 'Meses de Año actual'},
					width: 720,
					height: 300
					}
			});
			
			
		});
		</script>
        
		<style>
			body{
				text-align: center;
				font-family: Arial, sans-serif;
				font-size: 12px;
			}
			
			a{
				text-decoration: none;
				font-weight: bold;
				color: #555;
			}
			
			a:hover{
				color: #000;
			}
			
			div.main{
				margin: auto;
				text-align: left;
				width: 720px;
			}
		
			div.clean{
				border: 1px solid #850000;
			}
			
			.clean td, .clean th{
				border: 2px solid #bbb;
				background: #ddd;
				padding: 5px 10px;
				text-align: center;
				border-radius: 2px;
			}
			
			.clean table{
				margin: auto;
				margin-top: 15px;
				margin-bottom: 15px;
			}
			
			.clean caption{
				font-weight: bold;
				
			}
			
			.gvChart,.clean{
				border: 0px solid #850000;
				border-radius: 5px;
				-moz-border-radius: 10px;
				width: 720px;
				
				margin: auto;
				margin-top: 20px;
			}
			
			pre{
				background: #eee;
				padding: 10px;
				border-radius: 10px;
				-moz-border-radius: 10px;
			}
			
		</style>
<!--estadisticas -->



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
                    <h1 class="head-h1cen izquierda" > Estadisticas </h1>
				    <!--fin titulo de modulo -->
                    
                    <!-- usuario + soporte -->
                    <div id="head-divder" class="izquierda"> 
                    	<!--usuario -->
                    	<div id="head-divder-usuarios" class="izquierda"> 
                        	<span class="estiloinline"> Usuario |</span> 
                            <a href="Destruirsesion.php" class="enlaces"> Cerrar Sesión </a> 
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
                    <h2 class="head-h2down izquierda noflotante"> Estadisticas generales  </h2>
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
                    <a href="logicadn.php?control=maquinaria" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=inicio" class="enlinea izquierda"> Ir a inicio </a>
                    <span class="izquierda none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                             <li>
                               <strong> Estadisticas</strong>
                            </li>
                             <li>
                               <strong> Estadisticas generales</strong>
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<?php echo $_smarty_tpl->tpl_vars['ingresos']->value;?>


<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Estadisticas de ingresos y gastos - Año Actual:
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones espaciointerior"> 
            	
                 
			
			
			
			
			

			
			
			<table id='myTable4'>
				<caption>Gastos y Ganancias</caption>
				<thead>
					<tr>
						<th></th>
						<th>Ene</th>
						<th>Feb</th>
						<th>Mar</th>
						<th>Abr</th>
						<th>May</th>
						<th>Jun</th>
						<th>Jul</th>
						<th>Ago</th>
						<th>Sep</th>
						<th>Oct</th>
						<th>Nov</th>
						<th>Dic</th>
					</tr>
				</thead>
					<tbody>
					<tr>
						<th>Ganancias</th>
						<td>1000000</td>
						<td>1200000</td>
						<td>1300000</td>
						<td>1150000</td>
						<td>1100000</td>
						<td>1900000</td>
						<td>1800000</td>
						<td>1700000</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th>Gastos</th>
					    <td>900000</td>
						<td>1100000</td>
						<td>1200000</td>
						<td>1050000</td>
						<td>1000000</td>
						<td>1800000</td>
						<td>1700000</td>
						<td>1600000</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
				</tbody>
			</table>
			
			   
                
                
                
                          
                              
                            
            </td> 		
        </tr>
        
        
       
        
        <tr class="sinfondo">	
            <td class="informacionbotones espaciointerior"> 
           <p class="negrita"> Estadisticas desactivadas temporalmente por no tener registros suficientes para hacer calculos. </p> 
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