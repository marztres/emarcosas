<?php /* Smarty version Smarty-3.1.10, created on 2012-09-22 21:39:01
         compiled from "templates\agregar_maquina.html" */ ?>
<?php /*%%SmartyHeaderCode:1059505e2ff56737c8-14081093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129e30a208baed087f1c015e40bfec9913a4cc00' => 
    array (
      0 => 'templates\\agregar_maquina.html',
      1 => 1346995246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059505e2ff56737c8-14081093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505e2ff5729962_75288210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e2ff5729962_75288210')) {function content_505e2ff5729962_75288210($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>

<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarmaquina.css"  type="text/css"  rel="stylesheet" media="all"  /> 




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
           $(".fecha").datepicker();
        });
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' Valor invalido.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');	
	
} }
    </script>



<script language="javascript">
function MuestraMaquinas(str){
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
					 document.getElementById("maquina").innerHTML=xmlhttp.responseText;
					 }
				  }
			  xmlhttp.open("GET","opcionmaquina.php?m="+str,true);
				xmlhttp.send();				
}
</script>
 


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
                    <h1 class="head-h1cen izquierda" > Maquinas </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Control de maquinas  </h2>
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
                    <a href="logicadn.php?control=maquinaria" class="enlinea izquierda">Volver a control de maquinas</a>
                    <span class="izquierda none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="#" class="tabla">Inicio</a>
                            </li>
                             <li>
                                Maquinas
                            </li>
                            <li >
                                 <a href="logicadn.php?control=maquinaria" class="tabla">Control de maquinas</a> 
                             </li>
                            <li>
                                Agregar maquina
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
                	Paso 1: Información de la Maquina.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones espaciointerior"> 
            	<form name="fmaquina" action="logicadn.php?control=agregarmaquina"  method="post" ONSUBMIT='return pregunta_agregar_maquina();' >
					<p class="negrita izquierda tituloinfoid" >Ingrese un Id para esta Maquina: </p>
                    <p class="negrita izquierda tituloinfotipo"> Seleccione el tipo de Maquina: </p>
				    <br />
					
                        <input type="text" name="id" id="id" class="izquierda cajainfoid" >
                        
                        
				        <select name="maquinas" onChange="MuestraMaquinas(this.value)"  class="izquierda cajainfotipo" >
							<option>Seleccione Maquina</option>
							<option>Motoniveladora</option>
							<option >Volco</option>
                            <option>RetroEscavadora</option>
							<option>VibroCompactador</option>
							<option>Bulldozer</option>
							<option>Escavadora</option>
					      
           	               </select>
                           
      
                          
                              
                            
            </td> 		
        </tr>
        
        
        <tr class="trtiempo"> 
        	<td class="fondocabeza "> 
            	<p class="negrita tituloinfosup ">
                	Paso 2: Cambio de Aceite.
                </p>
               
                
            </td>	
		</tr>
        
        <tr class="sinfondo trtiempo">	
            <td class="informacionbotones espaciointerior"> 
             
          <div id="maquina"></div>
          
          <p class='negrita izquierda ptiempo'> Tiempo para cambio de aceite: </p>
          
          <p class='izquierda tfecha cerilla'> ¿ Ingrese la siguiente fecha para cambiar el aceite ? </p>
          <input type="text" name='fecha' id="fecha" class="fecha izquierda tfecha"/>
          
          <p class='izquierda thoras cerilla'> ¿ Cada cuantas horas cambiara el Aceite ? </p>	
          <input type='text' name='contador' id="contador" class='contahoras izquierda thoras'>  
		  
            </td> 		
        </tr>
        
        
        <tr class="sinfondo">	
            <td class="informacionbotones espaciointerior"> 
              <p class="izquierda"> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </p>  
                
                <input type="submit" class="izquierda botonregistrar" onclick="MM_validateForm('id','','R','contador','','NisNum');return document.MM_returnValue" value="Registrar Maquina" ONSUBMIT='return preguntaevento();'>
 </form>
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