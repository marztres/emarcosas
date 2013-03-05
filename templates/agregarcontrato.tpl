<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarcontrato.css"  type="text/css"  rel="stylesheet" media="all"  /> 

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	

<link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>


<!--inicio scroll -->
<script type="text/javascript">
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
            if (num<min || max<num) errors+='- '+nm+' Valor invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es Obligatorio.\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
{literal}

<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:220}, 2500);
		return false;
	});
});
</script>
{/literal}

<!--fin scroll  -->



<script language="javascript" type="text/javascript" src="/emarcosas/varios/js/funcionestrabajo.js"></script>
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
                    <h2 class="head-h2down izquierda noflotante"> Agregar contrato  </h2>
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
                    <a href="logicadn.php?control=contratos" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=contratos" class="enlinea izquierda">Volver a control de contratos</a>
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
                                <a href="logicadn.php?control=inicio" class="tabla"> Control de contratos</a>
                            </li>
                            <li >
                                 <b> Agregar contrato </b> 
                             </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->


<div id="login">
	<table class="informacion"> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 1: Informacion del contrato.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            
        <p class="espaciadoarriba"> </p> 
        <form name='formulario' action="logicadn.php?control=guardarcontrato" method="post" ONSUBMIT='return preguntacontrato();'> 
          
        <p class="izquierda negrita segundo arriba">   Ingrese el Id: </p>
        		<input name='id' type='text' class="izquierda" id="id"/>
                 
        <p class="izquierda negrita arriba"> Ingrese el Lugar: </p> 
        		 <input name='lugar' type='text' class="izquierda" id="lugar"/>
         
          
        <p class="espaciadoabajo"> </p>   
        
            </td> 		
        </tr>
        
        
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                    Paso 2: Valor y Fecha.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
      	
        <p class="espaciadoarriba"> </p> 
        
        <p class="izquierda negrita tercero arriba"> Valor Inicial:</p> 
        	<input name='valor' type="text" class="izquierda" id="valor" />
            
		<p class="izquierda negrita arriba"> Fecha Inicial: </p> 
          	<input name='fecha_inicio' type="text" class="fecha izquierda" id="fecha_inicio"/>
                
        
        
        
        
        
        <p class="espaciadoabajo"> </p>   
             
            </td> 		
        </tr>
          <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                    Paso 3: Descripción.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones extendible"> 
      	
        <p class="espaciadoarriba"> </p> 
        
        
        <p class="izquierda negrita cuarto arriba"> Ingrese una descripción Detallada:</p> 
        <br />
       
        	<textarea name="descripcion" cols="50" rows="5" class="izquierda cajatexto" id="descripcion" ></textarea>
            
         
        
        
        
        
        
        <p class="espaciadoabajo"> </p>   
             
            </td> 		
        </tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    	<input type="submit" class="izquierda botonagregar2" onclick="MM_validateForm('id','','R','lugar','','R','valor','','RisNum','fecha_inicio','','R','descripcion','','R');return document.MM_returnValue" value="Guardar Contrato" />
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