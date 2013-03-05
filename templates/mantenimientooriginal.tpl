<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="varios/css/default.css" />
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
	

	
<title>mantenimiento</title>
</head>

<body>
 <form name="ca" action="logicadn.php?control=am " method="post"  >
 <table border="1">
   <tr>
         {$cont=0}
         {$sum=0}
         {$th=1}
         {$tf=1}
     
         {foreach from=$maquina item=idmaquina}
         <td>{$nombremaquinas[$cont]}</td>
         {if $cont >=0}
         <td>{$idmaquina}</td>
         <td>{$respuesta[$cont]}</td>
         <td>{$maquinax}</td>
         {if $nombremaquinas[$cont] == 'Volco'}
         {$fechac=fecha|cat:"$sum"}<!-- Este es el nombre que va en elfor es decir fecha -->
         {$fecham=fecham|cat:"$sum"}
         <td><input type='text' name='{$fechac}'  class='fecha' ><input type='hidden' name='{$fecham}' value='{$maquina[$sum]}'/> </td>
         
          {$tf=$tf+1}
         {else}
         {$horac=hora|cat:"$sum"} <!-- Este es el nombre que va en elfor es decir hora -->
         {$horam=horam|cat:"$sum"}
         <td><input type='text' name='{$horac}' /><input type='hidden' name='{$horam}' value='{$maquina[$sum]}'/>  </td>
         {$th=$th+1}
         {/if} 
         </tr>
         {$sum=$sum+1}
         {$cont=$cont+1}
         {/if} 
        {/foreach}
     </td>   
 </table>
 
 {foreach from=$maquina item=idt}
 
    	  <input type="hidden"  name="vca[{$idt}]" />
      {/foreach}
 
 <input type="hidden" name='tamañof' value="{$tf}" />
 <input type="hidden" name='tamañot' value="{$th}" />
  <input type="hidden" name='tamañototal' value="{$cont}" />
 <input type="submit" value='Guardar Cambios'/>
 </form>  
</body>
</html>
