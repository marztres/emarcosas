<?php /* Smarty version Smarty-3.1.10, created on 2012-11-30 10:13:56
         compiled from "templates\trabajo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4748505c90f3f36858-89838657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce51cad3c4c309f8766e7fe661e8280273d6e631' => 
    array (
      0 => 'templates\\trabajo.tpl',
      1 => 1354288434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4748505c90f3f36858-89838657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c90f41a7cc8_64434696',
  'variables' => 
  array (
    'tipot' => 0,
    'ide' => 0,
    'idmaquina' => 0,
    'maquinatipo' => 0,
    'respuesta' => 0,
    'rpt' => 0,
    'fechatrabajo' => 0,
    'procombustible' => 0,
    'num' => 0,
    'idcombustible' => 0,
    'nombre' => 0,
    'prolubricante' => 0,
    'idlubricante' => 0,
    'nombre2' => 0,
    'operadores' => 0,
    'idoperadores' => 0,
    'nombre3' => 0,
    'valorgalon' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c90f41a7cc8_64434696')) {function content_505c90f41a7cc8_64434696($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/trabajo.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>


<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	

	<link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
 	<script type="text/javascript">
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'yy/mm/dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});    

        $(document).ready(function() {
           $("#fecha").datepicker();
        });
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
    </script>
    
<!--inicio scroll -->


<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:215}, 2500);
		return false;
	});
});
</script>


<!--fin scroll  -->



    
    


<script language="javascript">

 function MuestraFactura2(str)
  {
		var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
			  if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("factura_resultado").innerHTML=xmlhttp.responseText;
					
					 }
				  }
			  xmlhttp.open("GET","facturas_lu_resultado.php?fr="+str,true);
			  
				xmlhttp.send();
				
									
  }
</script>


<script language="javascript">

 function MuestraFactura(str)
  {
		var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
			  if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("factura").innerHTML=xmlhttp.responseText;
					
					 }
				  }
			  xmlhttp.open("GET","factura_lu.php?f="+str,true);
			  
				xmlhttp.send();
				
									
  }
</script>
 



    

<!--  inicio funcion monedas -->
	
	<script language="JavaScript">
//Código para colocar 
//los indicadores de miles mientras se escribe
//script por tunait!
function puntitos(donde,caracter){
	pat = /[\*,\+,\(,\),\?,\,$,\[,\],\^]/
	valor = donde.value
	largo = valor.length
	crtr = true
	if(isNaN(caracter) || pat.test(caracter) == true){
		if (pat.test(caracter)==true){ 
			caracter = " \ " + caracter
		}
		carcter = new RegExp(caracter,"g")
		valor = valor.replace(carcter,"")
		donde.value = valor
		crtr = false
	}
	else{
		var nums = new Array()
		cont = 0
		for(m=0;m<largo;m++){
			if(valor.charAt(m) == "," || valor.charAt(m) == " ")
				{continue;}
			else{
				nums[cont] = valor.charAt(m)
				cont++
			}
		}
	}
	var cad1="",cad2="",tres=0
	if(largo > 3 && crtr == true){
		for (k=nums.length-1;k>=0;k--){
			cad1 = nums[k]
			cad2 = cad1 + cad2
			tres++
			if((tres%3) == 0){
				if(k!=0){
					cad2 = "," + cad2
				}
			}
		}
		donde.value = cad2
	}
}	
</script>

<!--  fin funcion monedas -->






</head>




<body onkeypress="return pulsar(event)" onLoad="hola()" >


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

			<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
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
                    <h2 class="head-h2down izquierda noflotante"> Agregar Trabajo  </h2>
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
                    <a href="javascript:history.back()" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="javascript:history.back()" class="enlinea izquierda">volver a control de eventos</a>
                    <span class="izquierda none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                
             <?php if ($_smarty_tpl->tpl_vars['tipot']->value=='contrato'){?>
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
                                 <a href="logicadn.php?control=maquinaria" class="tabla">Control de contratos</a>
                            </li>
                            <li>
                                 <a href="logicadn.php?control=inicio" class="tabla">Modificar contrato</a>
                            </li>
                            <li>
                                 <a href="logicadn.php?control=inicio" class="tabla"> Control de maquinas en contrato </a>
                            </li>
                            <li >
                                  <a href="logicadn.php?control=inicio" class="tabla"> Control de eventos </a>
                            </li>
                            <li >
                                  <a href="logicadn.php?control=inicio" class="tabla"> Registro de trabajo </a>
                            </li>
                            <li >
                                 Trabajo
                            </li>
                            
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

                    <?php }else{ ?>
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
                                 <a href="logicadn.php?control=maquinaria" class="tabla">Control de maquinas</a>
                            </li>
                            <li>
                                 <a href="logicadn.php?control=inicio" class="tabla">control de eventos</a>
                            </li>
                            <li>
                                 <a href="logicadn.php?control=inicio" class="tabla">Registro de trabajo</a>
                            </li>
                            <li >
                                 Agregar trabajo 
                            </li>
                            
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->


                    <?php }?>


<div id="login">


	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza" > 
            	<p class="negrita tituloinfosup">
                	Información de la Maquina.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 

				<!--inicio tabla formularios-->

   	<table class="formularios" >
 
<form name="trabajo" method="post" action="logicadn.php?control=guardartrabajo&& ide=<?php echo $_smarty_tpl->tpl_vars['ide']->value;?>
&& tipot=<?php echo $_smarty_tpl->tpl_vars['tipot']->value;?>
" ONSUBMIT='return validaceldaboton();' >
    	<tr>
            <td 	class='filas'>   <p >Id:</p>    </td>    
			<td 	class='filas'>	 <p >Tipo:</p>    </td>
			<td  	class='filas'>	 <p >Cambio de aceite:</p> </td>
		</tr> 
		<tr>
			<td 	>	<input name='codigo' type='text'  class="negrita" id="codigo" value='<?php echo $_smarty_tpl->tpl_vars['idmaquina']->value;?>
' readonly='readonly' >  </td>    
			<td 	>	<input name='tipo' type='text'  class="negrita" id="tipo" value='<?php echo $_smarty_tpl->tpl_vars['maquinatipo']->value;?>
' readonly='readonly'>    </td>
			<td  	>   <?php  $_smarty_tpl->tpl_vars['rpt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rpt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['respuesta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rpt']->key => $_smarty_tpl->tpl_vars['rpt']->value){
$_smarty_tpl->tpl_vars['rpt']->_loop = true;
?>
             		    <input name='aceite' type='text' class="cajaaceite negrita" id="aceite" value='<?php echo $_smarty_tpl->tpl_vars['rpt']->value;?>
'readonly=' readonly' >
              			<?php } ?>  
            </td>
	    </tr>
    </table>
				<!--fin tabla formularios-->
   
                
                
        
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del trabajo.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
			
           
           <!--inicio tabla formularios-->
   	<table class="formularios">
 
    	<tr>
            <td 	class='filas'>   <p >Lugar de Trabajo:</p>    </td>    
			<td 	class='filas'>	 <p >Fecha:</p>    </td>
			<td  	class='filas'>	 <p >Cantidad del servicio:</p> </td>
			<td 	class='filas' >  <p >Valor del Servicio:</p>      </td>
          
				
		</tr> 
		<tr>
			<td 	>	<input type="text" name="lugar" id='lugar'  onkeypress='focoafecha(event)'   >  </td>    
			<td 	>	<input type="text" name="fecha" id="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fechatrabajo']->value;?>
" size="12" onclick="validaceldalugar()" onkeypress='fechacantidadservicio(event)' />     </td>
			<td  	>   <input type="text" name="servicio" id="servicio" onkeypress='cantidadservicio(event)' onChange="resultado(event)" onclick="validaceldafecha()"   >  </td>
			<td 	>   <input type="text" name="valor" id="valor" size="12" onkeypress='valorservicio(event)' onChange="resultado(event)" onclick="validaceldacantidad()" ></td>
        </tr>
           
      </table>
	<!--fin tabla formularios--> 
           
            
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Gastos.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 


			  <!--inicio tabla formularios-->
   	<table class="formularios2 noflotante">
   
    	<tr>
            <td 	class='filas'>   <p >Gasto de Combustible:</p>    </td>    
			<td 	class='filas'>	 <p >Proveedor  de Combustible:</p>    </td>
			<td  	class='filas'>	 <p >Forma de Pago:</p> </td>
				
		</tr> 
		<tr>
			<td 	>	<input type='text' name="gastoco" id="gastoco" onclick="validaceldavalor()"  onkeypress='gastocombustible(event)' onChange="resultado(event)"   > </td>    
			<td 	>	<select name="proveedor_co" id="proveedor_co" onclick="validaceldanombreco()" >
      			          <option></option>  
                              <option>Ninguno</option> 
                			 <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>
                 		     <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['procombustible']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                		  <option value="<?php echo $_smarty_tpl->tpl_vars['idcombustible']->value[$_smarty_tpl->tpl_vars['num']->value];?>
">
                             <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

                		  </option>
                 			 <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
                    		 <?php } ?>
                		</select>
          </td>
			<td  	>  <select name="fpago_co"  id="fpago_co"onclick="validaceldaformapago()" >
                           <option>        </option>
              			   <option>credito </option>
              			   <option>contado </option>
                           <option>NA </option>
              			   </select>  
            </td>
		</tr>
           
      </table>
	<!--fin tabla formularios-->


   
           
       <!--inicio tabla formularios-->          
				<table class="formularios2 izquierda">
   
    	<tr>
            <td 	class='filas'>   <p >Gasto de Lubricante:</p>    </td>    
			<td 	class='filas'>	 <p >Proveedor  de Lubricante:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	>	<input type="text" name='gastolu' id='gastolu' onkeypress='resultado(event)' onclick="validaceldacantidad_lu()"  >  </td>    
			<td 	>	 <select name="proveedor_lu" id="proveedor_lu" onChange="MuestraFactura(this.value)" onclick="validaceldanombre_lu()"  >
                		   <option></option> 
             			   <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?> 
            			   <?php  $_smarty_tpl->tpl_vars['nombre2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prolubricante']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre2']->key => $_smarty_tpl->tpl_vars['nombre2']->value){
$_smarty_tpl->tpl_vars['nombre2']->_loop = true;
?>
            		    <option value="<?php echo $_smarty_tpl->tpl_vars['idlubricante']->value[$_smarty_tpl->tpl_vars['num']->value];?>
" id="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
"  >
              			<?php echo $_smarty_tpl->tpl_vars['nombre2']->value;?>

              		    </option>
             		    <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?> 
               		    <?php } ?>
             		    </select>
          </td>
   			  
		</tr>
           
      </table>
	<!--fin tabla formularios-->

    <div id="factura" >  </div>
    <input type='hidden' id='factura2'  name='factura2' />
   


           
           <!--inicio tabla formularios-->
   	<table class="formularios2 noflotante">
 
    	<tr>
            <td 	class='filas'>   <p >Valor del Operador:</p>    </td>    
			<td 	class='filas'>	 <p >Operador:</p>    </td>
			
				
		</tr> 
		<tr>
			<td><input type='text' name='valorop' id='valorop'  onclick="validaceldavalorop()"  onkeypress='gastooperador(event)' > </td>    
			<td 	>	
                <select name="operadores" id='operadores' onclick="validaceldanombreop()"   > 
                <option></option> 
            
                <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['nombre3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['operadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre3']->key => $_smarty_tpl->tpl_vars['nombre3']->value){
$_smarty_tpl->tpl_vars['nombre3']->_loop = true;
?>
                 
                 <option value="<?php echo $_smarty_tpl->tpl_vars['idoperadores']->value[$_smarty_tpl->tpl_vars['num']->value];?>
">
                 
                <?php echo $_smarty_tpl->tpl_vars['nombre3']->value;?>

                
                </option>
                 <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
                 <?php } ?>
                </select>     
             </td>
        </tr>
           
      </table>
	<!--fin tabla formularios-->
           
           
              
<br />
<br />
            
            
            
            
            
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Estadistica de Trabajo.
                </p>
            </td>	
		</tr>
           <tr class="sinfondo">	
            <td class="informacionbotones"> 
        
        		<!--inicio tabla formularios-->          
				<table class="formularios2">
   
    	<tr>
            <td 	class='filas'>   <p >Ingresos Totales:</p>    </td>    
			<td 	class='filas'>	 <p >Gastos Totales:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	>    <input type='text' name='ingtotales' id='ingtotales' readonly='readonly'   > </td>    
			<td 	>	 <input name='gastotales' type='text' id="gastotales" readonly='readonly'   > </td>
   			 
		</tr>
           
      </table>
	<!--fin tabla formularios-->
                <!--inicio tabla formularios-->          
				<table class="formularios2">
   
    	<tr>
            <td 	class='filas'>   <p >Ganancias totales:</p>    </td>    
			<td 	class='filas'>	 <p >Cantidad de uso:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	> <input name='gananciastotales' type="text" id="gananciastotales" readonly='readonly'  ></td>    
			<td 	>	 <input name='cantidaduso' type="text" id="cantidaduso"   readonly='readonly'  > </td>
   			 
		</tr>
           
      </table>
	<!--fin tabla formularios-->
           
           
           
           
           
               
                <?php echo $_smarty_tpl->tpl_vars['valorgalon']->value;?>

               
                
               	<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

                 
                
            
                        
            
            
            
            
            
            
            
                
            </td> 		
        </tr>
		<tr class="sinfondo">	
            <td class="informacionbotones"> 
            
            
            
            
            <input name="guardar" type='submit' class="izquierda botonguardartra" onclick="MM_validateForm('codigo','','R','tipo','','R','aceite','','R','lugar','','R','fecha','','R','valor','','RisNum','gastoco','','RisNum','gastolu','','RisNum','valorop','','RisNum','ingtotales','','RisNum','gastotales','','RisNum','gananciastotales','','RisNum','cantidaduso','','RisNum');return document.MM_returnValue" value='Guardar Trabajo'  >
            
             <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

             </form>

                
            </td> 		
        </tr>

    </table>
    



    
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