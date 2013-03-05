<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/modificarcontrato.css"  type="text/css"  rel="stylesheet" media="all"  /> 


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
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es Obligatorio\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
    
<!--inicio scroll -->
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
                    <h2 class="head-h2down izquierda noflotante"> Modificar contrato  </h2>
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
                    <a href="logicadn.php?control=contratos&& id={$idc}" class="enlinea izquierda">Volver a control de contratos</a>
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
                            <li >
                                 <b> Modificar contrato </b> 
                             </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->



<div id="login">
	<table class="informacion"> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Informacion del contrato.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
            
        <p class="espaciadoarriba"> </p> 
        
         <form name='modifica' action="logicadn.php?control=finalizarcontrato" method="post" ONSUBMIT='return pregunta_finalizar_contrato();'>
        
          
        <p class="izquierda negrita fila1 up"> Id: </p> 
        		<input name="idcontrato" type="text" class="izquierda" id="idcontrato" value='{$idcontrato}'/>
		
        <p class="izquierda negrita up"> Lugar: </p> 
        		<input name="lugar" type="text" class="izquierda" id="lugar" value='{$fk_idlugar}'/>
		
        <p class="izquierda negrita up"> Valor Inicial: </p> 
        		<input name="valorini" type="text" class="izquierda" id="valorini" value='{$valor_inicial}'/>
                
		<p class="izquierda negrita up"> Valor Final: </p> 
        		<input name="valorfin" type="text" class="izquierda" id="valorfin" value='{$valor_final}'/>

        
         <br />
<br />
<br />

                
		<p class="izquierda negrita fila2 up"> Fecha de Inicio:</p> 
        		<input name="fechaini" type="text" class="fecha izquierda" id="fechaini" value='{$fecha_inicio}'/>
                
		<p class="izquierda negrita up">Fecha de Finalización: </p> 
        		<input name="fechafin" type="text" class="fecha izquierda fila2down" id="fechafin" value='{$fecha_finalizado}'/>
		 <br />
		 <br />
		 <br />


         
         <p class="izquierda negrita fila3"> Descripción: </p>
         <br />
 
          <textarea name="descripcion" cols="50" rows="5" class="izquierda fila3down" id="descripcion" >{$descripcion}</textarea>

        <p class="espaciadoabajo2"> </p>   
        
            </td> 		
        </tr>
        
        
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                    Actas de Pago.
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
      	
        <p class="espaciadoarriba"> </p> 
        
    
   
                
       <p class="izquierda negrita up lef"> Valor de las Actas Ingresadas </p> 
       			<input type='text' name='actasingresadas' class="izquierda rai" value='{$valoractas}' readonly="readonly" />
                <a href="logicadn.php?control=registroactas&& idc={$idcontrato} " class="mouse"><input type='button' value='Ver Actas de Pago' readonly="readonly" /></a>
        
        
        
        
        <p class="espaciadoabajo"> </p>   
             
            </td> 		
        </tr>
          <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                    Cuentas de Pago
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones extendible"> 
      	
        <p class="espaciadoarriba"> </p> 
        
        
       <p class="izquierda negrita up lef"> Valor de las cuentas de pagos ingresadas</p> 
       			<a href='logicadn.php?control=cuentascontrato&& idc={$idcontrato}'><input type='text' name='actasingresadas' class="izquierda rai" value='{$valorcuentas}' readonly="readonly"/><input type='button' value='Ver Cuentas de Pago' readonly="readonly" /></a>
        
       
        <p class="espaciadoabajo"> </p>   
             
            </td> 		
        </tr>
        <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                    Maquinaria en contrato
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones extendible"> 
      	
        <p class="espaciadoarriba"> </p> 
        
        <p class="izquierda negrita up lef"> Número de Maquinas Asignadas a este Contrato </p> 
        		<input name='maquinas' type='text' class="izquierda cajamaquinacontrato rai" id="maquinas" value='{$conteomaquina}' readonly="readonly"/><a href='logicadn.php?control=maquinascontrato&& id={$idcontrato}'> <input type='button' value='Ver Maquinas en Contrato' /></a> 
         
        
        
        
        
        
        <p class="espaciadoabajo"> </p>   
             
            </td> 		
        </tr>
     
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    {if $estado=='finalizado'}
    <a href="logicadn.php?control=reanudar_contrato&&idc={$idcontrato}"><input type="button" value=" Reanudar Contrato" class="izquierda endbox" onClick="return pregunta_reanudar_contrato()"/></a>
    {else}
    <input type="submit" class="izquierda endbox" onclick="MM_validateForm('idcontrato','','R','lugar','','R','valorini','','RisNum','valorfin','','RisNum','fechaini','','R','fechafin','','R','maquinas','','R','descripcion','','R');return document.MM_returnValue" value='Finalizar Contrato' />
	{/if}
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