<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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

 </script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<title>Modificar Acta</title>
</head>

<body onkeypress="return pulsar(event)">


<form name='formulario' action="logicadn.php?control=actualizacta" method="post" enctype="multipart/form-data">
<input type='text' name='id' value='{$idacta_pago}' readonly="readonly"/>
<input type='text' name='fecha' value='{$fecha}' class="fecha"/>
<select name='tipoacta'>    
{if  $tipo == "Inicial"}              
<option  selected >{$tipo}</option>
<option>Parcial</option>
<option>Final</option>
{else if $tipo == "Parcial"}                
<option  selected >
{$tipo}
</option>
<option>Inicial</option>
<option>Final</option> 
{else}
<option  selected >
{$tipo}
</option>
<option>Inicial</option>
<option>Parcial</option>
{/if} 
</select>


<b>Descripcion</b><br />
<textarea name="descripcion" cols="50" rows="5">{$descripcion}</textarea><br />
<br />
<br />Asunto<input type='text' name='asunto' value='{$asunto}'/>
Valor<input type='text' name='valor' value='{$valor}'/>
Retencion<input type='text' name='retencion' value='{$retencion}'  onkeypress='numerodias(event)' />
Descuento<input type='text' name='descuento' value='{$descuento}' /><br /><br />


<a href="{$imagendescarga}" />Ver Acta Guardada</a><br />
Cambiar Acta Subir Imagen: <input id="imagen" name="nuevaimagen"  type="file" /> <br />
<a href="logicadn.php? control=eliacta&& id={$idacta_pago}"> Eliminar Acta</a>
<input type='submit' value='Modificar Acta' />
</form>
</body>
</html>
