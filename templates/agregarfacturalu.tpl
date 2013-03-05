<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/agregarfacturalubricante.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>
<link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
    <script language="javascript" type="text/javascript" src="/emarcosas/varios/js/agregar_factura.js"></script> 
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
            if (num<min || max<num) errors+='- '+nm+' Valor invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es obligatorio.\n'; }
    } if (errors) alert('Errro al procesar los datos:\n'+errors);
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
                    <a href="logicadn.php?control=rlubricante&& id={$id}&&combustible={$co}&&lubricante={$lu}&&saldo={$saldo}" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=rlubricante&& id={$id}&&combustible={$co}&&lubricante={$lu}&&saldo={$saldo}" class="enlinea izquierda">Volver a control de facturas</a>
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
                                 Proveedores
                             </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Control de proveedores </a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Perfil de proveedor </a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Control de facturas de lubricante </a>
                            </li>
                            <li >
                                <b> Agregar factura de lubricante </b> 
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
                	Información del proveedor.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
	

		 <form name='facturalu' action="logicadn.php?control=guardarfactura&& id={$id}&&combustible={$co}&&lubricante={$lu}&&saldo={$saldo}&&nombre={$nombre}" method="post" ONSUBMIT='return preguntafacturalu();'>
         <p class="espaciadoarriba"> </p>
            
            <p class="izquierda negrita primero arriba" > Id </p> 
          		<input name='idpro' type='text' class="izquierda" id="idpro" value='{$id}'/>
		 	<p  class="izquierda negrita arriba" >Nombre</p>
            	<input type='text' value='{$nombre}' class="izquierda"/>
		    <p class="izquierda negrita arriba"> Saldo</p>
            	<input type="text" value='{$saldo}'  class="izquierda"/>
                
         <p class="espaciadoabajo"> </p>
                
            </td> 		
        </tr>
        
        
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 1: Informacion de la Factura.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            
        <p class="espaciadoarriba"> </p> 
         
          
        <p class="izquierda negrita segundo arriba">   Id: </p>
        		<input name='id' type='text' class="izquierda" id="id" /> 
        <p class="izquierda negrita arriba"> Fecha: </p> 
        		<input name='fecha' type='text' class="fecha izquierda" id="fecha"   />
          
        <p class="espaciadoabajo"> </p>   
        
            </td> 		
        </tr>
        
        
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Paso 2: Detalles de la Factura.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
      	
        <p class="espaciadoarriba"> </p> 
        
        <p class="izquierda negrita tercero arriba"> Valor:</p> 
        	<input name='valor' type='text' class="izquierda" id="valor" />
            
		<p class="izquierda negrita arriba"> Galones: </p> 
        		<input name="galones" type="text" class="izquierda" id="galones"   onkeypress='calculapu(event)' />
		<p class="izquierda negrita arriba"> Precio Unitario: </p> 
        		<input name="precio" type="text" class="izquierda" id="precio"/>
        <p class="izquierda negrita arriba"> Forma de pago: </p>
        		<select name="estado" class="izquierda">
        			<option>credito</option> 
            		<option>contado</option>
        		</select>
	    
        <p class="espaciadoabajo"> </p>   
             
            </td> 		
        </tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
        <input type='submit' class="izquierda agregarfactura" onclick="MM_validateForm('idpro','','RisNum','id','','RisNum','fecha','','R','valor','','RisNum','galones','','RisNum','precio','','RisNum');return document.MM_returnValue" value='Guardar Factura' />
  

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