<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<meta http-equiv="Content-Type"  content="text/html; charset=utf-8" />



<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/cuentadecobro.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<link href="/emarcosas/templates/css/cuentadecobro-impresion.css"  type="text/css"  rel="stylesheet" media="print"  /> 

<script language="Javascript"> 

function ok()
{	
if (window.print) window.print() 
else alert("Para imprimir presione Crtl+P."); 
}
</script>




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
<!--{literal}

<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:50}, 2000);
		return false;
	});
});
</script>
{/literal} -->

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
            if (num<min || max<num) errors+='- '+nm+' Valor invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es Obligatorio.\n'; }
    } if (errors) alert('Error al Procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<!-- placeholder -->


<!-- input auto expandible -->
{literal}
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
{/literal}



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
                    	<img src="/emarcosas/templates/img/botonregistrodecuentas.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=cuentas_cobro" class="enlinea izquierda">Ir a control de cuentas</a>
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

 <form name='formulariocuentac' action="logicadn.php?control=guardarcuentacobro" ONSUBMIT='return pregunta_guardarevento();' method="post" >
<div id="login">
  <table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                   Información de cuenta de cobro:
                   {$mensajeid}
                   {if $mensajeid==""}
                   {else}
                   <input type="hidden"  name='noid' value='noid' />
                   {/if}
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
             
			<td 	>	<input name="ciudad" type='text' id="ciudad"   />   </td>    
			<td 	>	<input  name="fecha" type='text' class="fecha divorcio" id="fecha" />    </td>
            <td 	>	<input  name="numerodecuenta" type='text' id="numerodecuenta" value='{$idcuentas}'  />    </td>
            <td 	>	<input  name="estado" type='text' class="estado " id="estado" value='Pendiente' />    </td>
		</tr>
    </table>
	<!--fin tabla formularios-->
           </td> 		
        </tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    			
                <div id="deudor" class="izquierda">
                <input type="hidden" name='ide' value='{$ide}' />
               	  <input name='cliente' type="text"  class="izquierda deudor-nombre autoescalable " id="cliente"  placeholder="Nombre persona o empresa "/>
                  <select class="izquierda identificacion1 noflotante " name='tidcliente'>
				    <option >C.C:</option>
						  <option>NIT:</option>
                  </select>
                  <input name='idcliente' type="text" class="izquierda " id="idcliente" placeholder="Identificacion"/>
                </div>
                
                <div id="cobrante" class="izquierda"> 
                	  <label class="izquierda negrita cobrante-titulo "> Debe a: </label>
                      <input name='cobrante' type="text" class="izquierda noflotante cobrante-nombre autoescalable" id="cobrant"  placeholder="Nombre persona o empresa" />
                      <select class="izquierda identificacion2 noflotante " name='tidcobrante'>
                        <option>C.C:</option>
                              <option>NIT:</option>
                      </select>
                      <input name='idcobrante' type="text"  class="izquierda" id="idcobrante" placeholder="Identificacion"/>
                </div>
     			
                <div id="dineroenletras" class="izquierda "> 
                	  <label class="izquierda negrita dineroenletras-titulo" > La suma de: </label>
                      <input type="text" name='valorletras'  placeholder="Valor en letras" name='dletras' class="izquierda noflotante dineroenletras-caja autoescalable"/> 
                       <input name='dinero' type="text" class="izquierda" id="dinero" value='{$valor}'/>
                      
                </div>
                
                <div id="listaeventos" class="izquierda">
                	<label class="izquierda negrita listadeeventos-titulo"> Por concepto de: </label>
                    <label class="izquierda noizquierda listadeeventos-titulo-actividades"> -Actividades realizadas. </label>
                    
                </div> 
                <!--tabla de eventos -->
    
       {if $mensajeid==""} 
          
       
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
         	<td>{$ide}</td>
    		<td>{$cantidad}</td>  
    	    <td>{$valor}</td>  
    		<td>{$lugar}</td>
    		<td>{$fecha}</td>
            <td>{$maquina}</td>
   	    </tr>
  	 </table>
     
      {else}
      
      <textarea name='actividad' class="izquierda noflotante textarealibre" id="actividad" > </textarea>
      
      {/if}          
                
                <div id="formadepago" class="izquierda"> 
               	<label class="izquierda negrita ">Favor efectuar el pago en:</label>
                <input class="izquierda formadepago-caja autoescalable " placeholder="Forma de pago" name='despago'> </input>    
                
                </div>
                
                <div id="datosdecobro" class="izquierda"> 
                	<label class="izquierda negrita "> Coordialemte, </label>
                    <input name='nombre' type="text" class="izquierda noflotante autoescalable" id="nombre" placeholder="Nombre " />
                    <input name='cedula' type="text" class="izquierda noflotante autoescalable " id="cedula" placeholder="Cedula"/>
                    <input name='telefono' type="text"  class="izquierda noflotante autoescalable " id="telefono" placeholder="Telefono"/>
                    <input name='direccion' type="text" class="izquierda noflotante autoescalable " id="direccion" placeholder="Dirección"/>
                	<label class="izquierda negrita noflotante datosdecobro-raya">________________________________</label>
                    <label class="izquierda negrita noflotante datosdecobro-firma">Firma</label>
                </div>
            	{literal}
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


         {/literal}

                
    			
        
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
                    {if $valor_pendiente==0}
                    {$valor_pendiente=$valor}
                    {/if}
                    <input name="vpendiente" type="text" class="izquierda noflotante  infoadicional-cajapendiente autoescalable" id="vpendiente" value='{$valor_pendiente}' />
 					
                    
                    <input type="text"  name='abono' placeholder="Ingrese abono" class="izquierda infoadicional-cajaabono "/>
                </div>
            	<div id="botonesfinales" class="derecha"> 
                    <input type="submit" class="izquierda" onclick="MM_validateForm('ciudad','','R','fecha','','R','numerodecuenta','','RisNum','estado','','R','cliente','','R','idcliente','','RisNum','cobrant','','R','idcobrante','','RisNum','dinero','','RisNum','nombre','','R','cedula','','RisNum','telefono','','RisNum','direccion','','R','vpendiente','','RisNum','actividad','','R');return document.MM_returnValue" value="Guardar Cambios" />
                    <input type="button" name="imprimir" value="Imprimir" onClick="ok()">
                    <input type="button" value="cancelar"  class="izquierda"/>
                    
                </div>
            
        	</td> 		
        </tr>
                

    </table>

  

 
</div><!--fin login -->

</form>



<div id="barra"> 
<p class="izquierda legal" ><a href="#" class="link" >  Informacíon legal </a> <a class="guiontexto"> | </a>  <a href="#" class="link" >  Soporte Tecnico </a> </p>

</div>


</div> 





</div>


<div id="pie"> 


</div>

</div>







</body>
</html>