
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarcuentadepago.css"  type="text/css"  rel="stylesheet" media="all"  /> 

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
          if (isNaN(val)) errors+='- '+nm+' Valor Invalido.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' Valor Invalido'+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es obligatorio.\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
    </script>
    


{literal}

<script type="text/javascript">
 
var cajas=0;
var filas = 1;

function agregar_caja(){
	var filaHtml = "";
	cajas++;
	filaHtml += "<table class='controldemaquinas'><tr><td class='seleccionar'><input type=text id='asunto"+filas+"' name='asunto"+filas+"'></td>";
	cajas++;
	filaHtml += "<td class='tipomaquina' > <input type=text id='valor"+filas+"' name='valor"+filas+"'></td> ";
	cajas++;
	filaHtml += "<td class='idmaquina' > <input type=text id='retencion"+filas+"' fila='"+filas+"' name='retencion"+filas+"'></td>  ";
	cajas++;
	filaHtml += "<td class='trabajomaquina' > <input type=text id='descuento"+filas+"' name='descuento"+filas+"'></td>  ";
	cajas++;
	filaHtml += "<td class='registromaquina' > <input type=text id='total"+filas+"' name='total"+filas+"'> </td>  ";
	filaHtml += "<td class='ultimotrabajo' > <a href='javascript:;' onclick='borrarFila("+filas+")' ><img src='/emarcosas/templates/img/botoneliminar2.png' height='23' width='23' class='botoneliminar' class='botoneliminar'  </img> </a></td></tr></table>  ";
	$('#cajas').append('<div id="fila'+filas+'" >'+filaHtml+'</div>');
	
	$('#retencion'+filas).keyup(function(e) {
		if(e.keyCode == 13) {
			//alert($(this).attr("fila"));
			operacion($(this).attr("fila"));
		}
	});
	
	filas++;
	




}

function borrarFila(fila){
	$("#fila"+fila).remove();
}


 function operacion(z)
  {
  
	retencion=parseInt( document.getElementById('retencion'+z).value); 
	valor=parseInt( document.getElementById('valor'+z).value);  
	porcentaje=retencion/100; 
	var descuento=valor*porcentaje;
	var total=valor-descuento;
	document.getElementById('vector').value =filas; 
	document.getElementById('descuento'+z).value = descuento;  
	document.getElementById('total'+z).value = total;  

  }
 
 function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
} 


</script>


{/literal}

</head>

<body onkeypress="return pulsar(event)">


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
                    <h2 class="head-h2down izquierda noflotante"> Agregar cuenta de pago </h2>
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
                    <a href="javascript:history.back()" class="enlinea izquierda">Volver a control de cuentas de pago</a>
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
                                <a href="logicadn.php?control=inicio" class="tabla">Control de contratos</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">modificar contrato</a>
                            </li>
                            <li >
                                 <a href="logicadn.php?control=inicio" class="tabla">Control de actas de pago</a>
                             </li>
                              <li >
                                 <b> Agregar acta de pago </b>
                             </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->

<form name="formulario"  action="logicadn.php?control=guardarcuenta&&idc={$idc}" method="post" ONSUBMIT='return pregunta_guardar_cuenta();'>

<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	paso 1: Fecha de la cuenta de pago.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
 
		
				
        
                
               <p class="izquierda negrita">  Fecha </p>
               <input name='fecha' type='text' class="fecha izquierda" id="fecha" /> 
                
            
<br />
<br />

            </td> 		
        </tr>
        	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 2: Descripción
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
 
 
 
		<p class="izquierda negrita"> Descripción</p>
        <br />
        <br />
       
		<textarea name="descripcion" cols="50" rows="5" class="izquierda boxarea" id="descripcion"></textarea>





  
               
            </td> 		
        </tr>
        
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                    Paso 3: Registros de cuenta de pago .	 
                </p>
            
            </td>	
		 </tr>
     	 </table>
    	
        <table class="controldemaquinas izquierda noflotante">
    	<tr>
            <td 	class='seleccionar fondocabeza'>	<b>Asunto</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Valor</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Retención</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>descuento</b></td>
			<td  	class='registromaquina fondocabeza'><b>Valor Total</b></td>
			<td  	class='ultimotrabajo fondocabeza'><b>Eliminar</b></td>
        </tr> 
	    </table>
  	     
         <div id="cajas" class="izquierda"> </div> 
     
  
  	
    
    
<input type=button onClick="agregar_caja()" value="Añadir campos" class="izquierda noflotante agregarcampo"> 
<input type='hidden' name='vector' id='vector' >

    
    <br />

    
    <table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	paso 4: Guardar Cuenta de pago.
                </p>
            </td>	
		</tr>


    <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
		 <input type='submit' class="izquierda botonguardar" onclick="MM_validateForm('fecha','','R','descripcion','','R');return document.MM_returnValue" value='Agregar Cuenta' >
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
		</html>