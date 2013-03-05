<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S | Constructora </title>

<link href="/emarcosas/templates/css/agregaracta.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>

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

<script type="text/javascript">
function numerodias(z)
{	
var valor=parseInt(formulario.valor.value);
var retencion=parseInt(formulario.retencion.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( valor>0){	

var rt=retencion/100; 
var resultado=valor*rt;
var total=valor-resultado;

document.formulario.descuento.value=resultado;
document.formulario.total.value=total;
document.formulario.total.focus(); 	
 	
}
}
}


function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
}
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
                    <h2 class="head-h2down izquierda noflotante"> Agregar acta de pago </h2>
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
                    <a href="javascript:history.back()" class="enlinea izquierda">Volver a control de actas de pago</a>
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



<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	paso 1: Información del acta.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
 
		<form name='formulario' method="post" action="logicadn.php?control=guardaracta&& idc={$idc}" enctype="multipart/form-data" ONSUBMIT='return pregunta_guardar_acta();'  >
				
          <p class="izquierda negrita inup1 none"> Id Acta </p>
                <input name='id' type='text' class="izquierda none" id="id"/>    
                
               <p class="izquierda negrita">  Fecha </p>
                <input name='fecha' type='text' class="fecha izquierda" id="fecha" /> 
                
               <p class="izquierda negrita">  Tipo </p>

                <select name="tipoacta" class="izquierda selup1">
                		<option>--Seleccione tipo de Acta--</option>
                		<option>Inicial</option>
               			<option>Parcial</option>
                     	<option>Final</option>
                </select>
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
                    Paso 3: Registro de acta .	 
                </p>
            
            </td>	
		 </tr>
   	    </table>
    	
        <table class="controldemaquinas">
    	<tr>
            <td 	class='seleccionar fondocabeza'>	<b>Asunto</b></td>    
			<td 	class='tipomaquina fondocabeza'>	<b>Valor</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Retención</b></td>
			<td 	class='trabajomaquina fondocabeza' ><b>descuento</b></td>
			<td  	class='registromaquina fondocabeza'><b>Valor Total</b></td>
		</tr> 
        <tr>
            <td > <input name='asunto' type='text' id="asunto" />  </td>    
			<td > <input name='valor' type='text' id="valor" />   </td>
            <td > <input  name='retencion' type='text' id="retencion"  onkeypress='numerodias(event)'/>  </td>
			<td > <input name='descuento' type='text' id="descuento"  /></td>
			<td > <input name='total' type='text' id="total" />  </td>
			  
		</tr> 
  	
  
  	</table>
    
    <br />

    
    <table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	paso 4: Subir Imagen del Acta.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop imagen2"> 
  				<p class="izquierda negrita subirimg"> Subir Imagen:  </p>
    	   
  				<input id="imagen" name="imagen"  type="file" />
 
            </td> 		
        </tr>

    <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
				<input type='submit'  class="izquierda" value='Guardar Acta' />
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