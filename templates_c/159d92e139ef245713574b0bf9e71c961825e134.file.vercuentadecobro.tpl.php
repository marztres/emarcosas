<?php /* Smarty version Smarty-3.1.10, created on 2012-09-21 16:39:43
         compiled from "templates\vercuentadecobro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15829505c984fefe2d5-88760895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159d92e139ef245713574b0bf9e71c961825e134' => 
    array (
      0 => 'templates\\vercuentadecobro.tpl',
      1 => 1346962417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15829505c984fefe2d5-88760895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensajeid' => 0,
    'ciudad' => 0,
    'fecha' => 0,
    'cuentas' => 0,
    'estado' => 0,
    'ide' => 0,
    'nombre_deudor' => 0,
    'id_deudor' => 0,
    'nombre_cobrante' => 0,
    'id_cobrante' => 0,
    'valor_en_letras' => 0,
    'valor' => 0,
    'cantidad' => 0,
    'lugar' => 0,
    'fecha2' => 0,
    'maquina' => 0,
    'forma_pago' => 0,
    'nombre_responsable' => 0,
    'id_responsable' => 0,
    'telefono_responsable' => 0,
    'direccion_responsable' => 0,
    'valor_pendiente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505c985013c933_37868864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c985013c933_37868864')) {function content_505c985013c933_37868864($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"  content="text/html; charset=utf-8" />



<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/cuentadecobro.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<link href="/emarcosas/templates/css/cuentadecobro-impresion.css"  type="text/css"  rel="stylesheet" media="print"  /> 

<!--calendario -->
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
    </script>
<!--calendario -->


<!--inicio scroll -->
<!--

<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:50}, 2000);
		return false;
	});
});
</script>
 -->

<!--fin scroll  -->

<!-- placeholder -->
<script src="Jquery/jquery.js" type="text/javascript"></script>
<script src="Jquery/jquery.placeholder.min.js"></script>
<script>
$(document).ready(function(){
	$('input, textarea').placeholder();
});
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' Valor Invalido.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' Valor Invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es Obligatorio.\n'; }
    } if (errors) alert('Error al procesador los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<!-- placeholder -->


<!-- input auto expandible -->

<script>
(function($){
    
    // jQuery autoGrowInput plugin by James Padolsey
    // See related thread: http://stackoverflow.com/questions/931207/is-there-a-jquery-autogrow-plugin-for-text-fields
        
        $.fn.autoGrowInput = function(o) {
            
            o = $.extend({
                maxWidth: 1000,
                minWidth: 0,
                comfortZone: 70
            }, o);
            
            this.filter('input:text').each(function(){
                
                var minWidth = o.minWidth || $(this).width(),
                    val = '',
                    input = $(this),
                    testSubject = $('<tester/>').css({
                        position: 'absolute',
                        top: -9999,
                        left: -9999,
                        width: 'auto',
                        fontSize: input.css('fontSize'),
                        fontFamily: input.css('fontFamily'),
                        fontWeight: input.css('fontWeight'),
                        letterSpacing: input.css('letterSpacing'),
                        whiteSpace: 'nowrap'
                    }),
                    check = function() {
                        
                        if (val === (val = input.val())) {return;}
                        
                        // Enter new content into testSubject
                        var escaped = val.replace(/&/g, '&amp;').replace(/\s/g,'&nbsp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
                        testSubject.html(escaped);
                        
                        // Calculate new width + whether to change
                        var testerWidth = testSubject.width(),
                            newWidth = (testerWidth + o.comfortZone) >= minWidth ? testerWidth + o.comfortZone : minWidth,
                            currentWidth = input.width(),
                            isValidWidthChange = (newWidth < currentWidth && newWidth >= minWidth)
                                                 || (newWidth > minWidth && newWidth < o.maxWidth);
                        
                        // Animate width
                        if (isValidWidthChange) {
                            input.width(newWidth);
                        }
                        
                    };
                    
                testSubject.insertAfter(input);
                
                $(this).bind('keyup keydown blur update', check);
                
            });
            
            return this;
        
        };
        
    })(jQuery);
    
    $('input').autoGrowInput();
</script>
<!-- input auto expandible -->

</head>

<body >
<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

			<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    <!--titulo de modulo -->
                    <h1 class="head-h1cen izquierda" > Cuentas </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Detalle de cuenta de cobro  </h2>
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
                    <a href="logicadn.php?control=proveedor" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=controlcuentas" class="enlinea izquierda">Ir a control de cuentas</a>
                    <span class="izquierda">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 <b>Cuentas</b> 
                             </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de cuentas</a>
                            </li>
                            
                            <li>
                                 <b>Detalle Cuenta de cobro </b>
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
                   Información de cuenta de cobro:
                   <?php echo $_smarty_tpl->tpl_vars['mensajeid']->value;?>

                </p>
                
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
         
           <!--inicio tabla formularios-->
   	<table class="formularios1">

    	<tr>
            <td  	class='filas'>   <p >Ciudad</p>    </td>    
			<td 	class='filas'>	 <p >Fecha</p>    </td>
            <td  	class='filas'>   <p >Cuenta de cobro N°</p>    </td>    
			<td 	class='filas'>	 <p class="estado">estado</p>    </td>
				
		</tr> 
		<tr>
             <form name='formulariocuentac' action="logicadn.php?control=modificar_cuenta_cobro" method="post">
			<td 	>	<input name="ciudad" type='text' id="ciudad" value='<?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>
' />   </td>    
			<td 	>	<input  name="fecha" type='text' class="fecha divorcio" id="fecha" value='<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
'/>    </td>
            <td 	>	<input  name="numerodecuenta" type='text' id="numerodecuenta" value='<?php echo $_smarty_tpl->tpl_vars['cuentas']->value;?>
'  />    </td>
            <td 	>	<input  name="estado" type='text' class="estado " id="estado" value='<?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
'/>    </td>
		</tr>
    </table>
	<!--fin tabla formularios-->
           </td> 		
        </tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    			
                <div id="deudor" class="izquierda">
                <input type="hidden" name='ide' value='<?php echo $_smarty_tpl->tpl_vars['ide']->value;?>
' />
               	  <input name='cliente' type="text"  class="izquierda deudor-nombre autoescalable " id="cliente"  placeholder="Nombre persona o empresa " value="<?php echo $_smarty_tpl->tpl_vars['nombre_deudor']->value;?>
" />
                  <select class="izquierda identificacion1 noflotante " name='tidcliente' >
				    <option >C.C:</option>
						  <option>NIT:</option>
                  </select>
                  <input name='idcliente' type="text" class="izquierda " id="idcliente" placeholder="Identificacion" value="<?php echo $_smarty_tpl->tpl_vars['id_deudor']->value;?>
"/>
                </div>
                
                <div id="cobrante" class="izquierda"> 
               	  <label class="izquierda negrita cobrante-titulo "> Debe a: </label>
                      <input name='cobrante' type="text" class="izquierda noflotante cobrante-nombre autoescalable" id="cobrante"  placeholder="Nombre persona o empresa" value='<?php echo $_smarty_tpl->tpl_vars['nombre_cobrante']->value;?>
' />
                      <select class="izquierda identificacion2 noflotante " name='tidcobrante'>
                        <option>C.C:</option>
                              <option>NIT:</option>
                  </select>
                      <input name='idcobrante' type="text"  class="izquierda" id="idcobrante" placeholder="Identificacion" value='<?php echo $_smarty_tpl->tpl_vars['id_cobrante']->value;?>
'/>
                </div>
     			
                <div id="dineroenletras" class="izquierda "> 
               	  <label class="izquierda negrita dineroenletras-titulo" > La suma de: </label>
                      <input type="text" name='valorletras'  placeholder="Valor en letras" name='dletras' class="izquierda noflotante dineroenletras-caja autoescalable" value='<?php echo $_smarty_tpl->tpl_vars['valor_en_letras']->value;?>
'/> 
                       <input name='dinero' type="text" class="izquierda" id="dinero" value="<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
"/>
                      
                </div>
                
                <div id="listaeventos" class="izquierda">
                	<label class="izquierda negrita listadeeventos-titulo"> Por concepto de: </label>
                    <label class="izquierda noizquierda listadeeventos-titulo-actividades"> -Actividades realizadas. </label>
                    
                </div> 
                <!--tabla de eventos -->
    
       
          
       
     <table class="controldemaquinas">
    	<tr>
            <td 	class='tipomaquina fondocabeza'>	<b>Id evento</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Cantidad</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>Valor</b></td>
			<td  	class='registromaquina fondocabeza'><b>Lugar del evento</b></td>
			<td 	class='notificacion fondocabeza' >	<b>Fecha</b></td>
			<td  	class='ultimotrabajo fondocabeza'>	<b>Maquina utilizada</b></td>
        </tr> 
		<tr>   
         	<td><?php echo $_smarty_tpl->tpl_vars['ide']->value;?>
</td>
    		<td><?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
</td>  
    	    <td><?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
</td>  
    		<td><?php echo $_smarty_tpl->tpl_vars['lugar']->value;?>
</td>
    		<td><?php echo $_smarty_tpl->tpl_vars['fecha2']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['maquina']->value;?>
</td>
   	    </tr>
  	 </table>
     
                
                
                <div id="formadepago" class="izquierda"> 
               	<label class="izquierda negrita ">Favor efectuar el pago en:</label>
                <input class="izquierda formadepago-caja autoescalable " placeholder="Forma de pago" name='despago' value="<?php echo $_smarty_tpl->tpl_vars['forma_pago']->value;?>
"> </input>    
                
                </div>
                
                <div id="datosdecobro" class="izquierda"> 
                	<label class="izquierda negrita "> Coordialemte, </label>
                    <input name='nombre' type="text" class="izquierda noflotante autoescalable" id="nombre" placeholder="Nombre " value='<?php echo $_smarty_tpl->tpl_vars['nombre_responsable']->value;?>
'/>
                    <input name='cedula' type="text" class="izquierda noflotante autoescalable " id="cedula" placeholder="Cedula" value="<?php echo $_smarty_tpl->tpl_vars['id_responsable']->value;?>
"/>
                    <input name='telefono' type="text"  class="izquierda noflotante autoescalable " id="telefono" placeholder="Telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono_responsable']->value;?>
"/>
                    <input name='direccion' type="text" class="izquierda noflotante autoescalable " id="direccion" placeholder="Dirección" value="<?php echo $_smarty_tpl->tpl_vars['direccion_responsable']->value;?>
"/>
                	<label class="izquierda negrita noflotante datosdecobro-raya">________________________________</label>
                    <label class="izquierda negrita noflotante datosdecobro-firma">Firma</label>
                </div>
            	
<script>
(function($){
    
    // jQuery autoGrowInput plugin by James Padolsey
    // See related thread: http://stackoverflow.com/questions/931207/is-there-a-jquery-autogrow-plugin-for-text-fields
        
        $.fn.autoGrowInput = function(o) {
            
            o = $.extend({
                maxWidth: 1000,
                minWidth: 0,
                comfortZone: 20
            }, o);
            
            this.filter('input:text').each(function(){
                
                var minWidth = o.minWidth || $(this).width(),
                    val = '',
                    input = $(this),
                    testSubject = $('<tester/>').css({
                        position: 'absolute',
                        top: -9999,
                        left: -9999,
                        width: 'auto',
                        fontSize: input.css('fontSize'),
                        fontFamily: input.css('fontFamily'),
                        fontWeight: input.css('fontWeight'),
                        letterSpacing: input.css('letterSpacing'),
                        whiteSpace: 'nowrap'
                    }),
                    check = function() {
                        
                        if (val === (val = input.val())) {return;}
                        
                        // Enter new content into testSubject
                        var escaped = val.replace(/&/g, '&amp;').replace(/\s/g,'&nbsp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
                        testSubject.html(escaped);
                        
                        // Calculate new width + whether to change
                        var testerWidth = testSubject.width(),
                            newWidth = (testerWidth + o.comfortZone) >= minWidth ? testerWidth + o.comfortZone : minWidth,
                            currentWidth = input.width(),
                            isValidWidthChange = (newWidth < currentWidth && newWidth >= minWidth)
                                                 || (newWidth > minWidth && newWidth < o.maxWidth);
                        
                        // Animate width
                        if (isValidWidthChange) {
                            input.width(newWidth);
                        }
                        
                    };
                    
                testSubject.insertAfter(input);
                
                $(this).bind('keyup keydown blur update', check);
                
            });
            
            return this;
        
        };
        
    })(jQuery);
    
    $('input.autoescalable').autoGrowInput();
</script>


         

                
    			
        
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                   Información adicional:
                </p>
                
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            	<div id="infoadicional" class="izquierda"> 
                	<label class="izquierda negrita infoadicional-valpendiente"> valor pendiente </label>
                  <label class="izquierda negrita infoadicional-valabono"> Abono </label>
                    <input name="vpendiente" type="text" class="izquierda noflotante  infoadicional-cajapendiente autoescalable" id="vpendiente" value='<?php echo $_smarty_tpl->tpl_vars['valor_pendiente']->value;?>
' />
 					
                    
                    <input  name='abono' type="text" class="izquierda infoadicional-cajaabono " id="abono" placeholder="Ingrese abono"/>
                </div>
            	<div class="derecha" id="botonesfinales" onclick="MM_validateForm('ciudad','','R','fecha','','R','numerodecuenta','','RisNum','estado','','R','cliente','','R','idcliente','','R','cobrante','','R','idcobrante','','RisNum','dinero','','RisNum','nombre','','R','cedula','','RisNum','telefono','','RisNum','direccion','','R','vpendiente','','RisNum','abono','','NisNum');return document.MM_returnValue"> 
                    <input type="submit" class="izquierda" onclick="MM_validateForm('ciudad','','R','fecha','','R','numerodecuenta','','RisNum','estado','','R','cliente','','R','idcliente','','RisNum','cobrante','','R','idcobrante','','RisNum','dinero','','RisNum','nombre','','R','cedula','','RisNum','telefono','','RisNum','direccion','','R','vpendiente','','RisNum','abono','','NisNum');return document.MM_returnValue" value="Guardar Cambios" />
 					<input type="button" value="Imprimir" class="izquierda"/>
                    <input type="button" value="cancelar"  class="izquierda"/>
                </div>
            
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