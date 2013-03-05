<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/mantenimiento.css"  type="text/css"  rel="stylesheet" media="all"  /> 

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
	


<!--tablas dinamicas -->

<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
				$('.example').dataTable( {
        "aaSorting": [[ 2, "asc" ]]
    });
				
				
				
			} );
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
            if (num<min || max<num) errors+='- '+nm+' Datos invalidos '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es obligatorio.\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<!--tablas dinamicas -->

<title>Emarco S.A.S </title>

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
                    <h2 class="head-h2down izquierda noflotante"> Control de mantenimientos  </h2>
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
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Maquinas 
                             </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de maquinas</a>
                            </li>
                            <li>
                                Mantenimientos
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->


<div id="login">
	<form name="ca" action="logicadn.php?control=am " method="post" ONSUBMIT='return pregunta_asignar_mantenimiento();'  >
    </table>
    <table class="controldemaquinas example izquierda">
      <thead class="fondocabeza">	
        <tr>
                
			<td 	class='tipomaquina fondocabeza'>	<b>Tipo</b></td>
			<td  	class='idmaquina fondocabeza'>		<b>Id</b></td>
			<td 	class='notificacion fondocabeza' ><b>Mantenimiento</b></td>
			<td  	class='registromaquina fondocabeza'><b>Cambiar Aceite</b></td>
		
			
		</tr>
     </thead>    
		
         {$cont=0}
        	 {$sum=0}
        	 {$th=1}
        	 {$tf=1}
             {foreach from=$maquina item=idmaquina}
        <tr>
        	
         	 <td>{$nombremaquinas[$cont]}</td>
             <td>{$idmaquina}</td>
             {if $respuesta[$cont]=='Cambio de aceite inmediato'}
             <td class="incorrecto">{$respuesta[$cont]}</td>
             {else}
             <td class="correcto"> {$respuesta[$cont]} </td>
             {/if}
         	 {if $nombremaquinas[$cont] == 'Volco'}
             {$fechac=fecha|cat:"$sum"}<!-- Este es el nombre que va en elfor es decir fecha -->
             {$fecham=fecham|cat:"$sum"}
             <td>
             	<input name='{$fechac}' type='text'  class='fecha' id="{$fechac}" ><input type='hidden' name='{$fecham}' value='{$maquina[$sum]}'/> 
             </td>
            {$tf=$tf+1}
            {else}
            {$horac=hora|cat:"$sum"} <!-- Este es el nombre que va en el for es decir hora -->
            {$horam=horam|cat:"$sum"}
            <td>
           	  <input name='{$horac}' type='text' id="{$horac}" /><input type='hidden' name='{$horam}' value='{$maquina[$sum]}'/>  </td>
         	{$th=$th+1}
          	{/if} 
        </tr>
         {$sum=$sum+1}
         {$cont=$cont+1}
        {/foreach}
     </td>   
 </table>
 
 {foreach from=$maquina item=idt}
 
    	  <input type="hidden"  name="vca[{$idt}]" />
      {/foreach}
 
 <input type="hidden" name='tamañof' value="{$tf}" />
 <input type="hidden" name='tamañot' value="{$th}" />
  <input type="hidden" name='tamañototal' value="{$cont}" />
 <input type="submit" class="botonmante izquierda" onclick="MM_validateForm('{$fechac}','','R','{$horac}','','RisNum');return document.MM_returnValue" value='Guardar Cambios' />
 </form>


{literal}
    
{/literal}

   
 
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