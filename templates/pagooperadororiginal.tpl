<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pago Operador</title>

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

<script language="javascript">
var total=0;

function sumar(valor) {
total += valor;

document.formulario.total.value=total;
document.formulario.servicios.value=total;

var pagodias=parseInt(formulario.pagodias.value);
var servicios=parseInt(formulario.servicios.value);
var resultado= pagodias+servicios;
document.formulario.totalapagar.value=resultado;

}

function restar(valor) {
total-=valor;
document.formulario.total.value=total;
document.formulario.servicios.value=total;

var pagodias=parseInt(formulario.pagodias.value);
var servicios=parseInt(formulario.servicios.value);
var resultado= pagodias+servicios;
document.formulario.totalapagar.value=resultado;
}

/* Funcion para calcular los Dias */
function numerodias(z)
{	
var dias=parseInt(formulario.dias.value);
var valordia=parseInt(formulario.valordia.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( dias>0){	
var total=dias*valordia;
document.formulario.totaldia.value=total;
document.formulario.pagodias.value=total;	
document.formulario.totaldia.focus(); 	
 	
}
else
{
alert("valor no valido");
document.formulario.totaldia.value="";		
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

</head>
<body onkeypress="return pulsar(event)">


<form name="formulario" action="logicadn.php?control=pagarop&& id={$cedula} " method="post">
Cedula:<input type='text' value='{$cedula}' name='cedula' />
Nombres:<input type='text' value='{$nombre}' />
Apellidos:<input type='text' value='{$apellido}' />
Edad:<input type='text' value='{$edad}' /> 
Sexo:<input type='text' value='{$sexo}' />
telefono:<input type='text' value='{$telefono}' />
Direccion:<input type='text' value='{$direccion}' />
Correo:<input type='text' value='{$correo}' />
Sueldo:<input type='text' value='{$sueldo}' />
Saldo:<input type='text' value='{$saldo}' /><br />


{$num=0}
<b>Información del Pago</b><br /><br />
Numero de dias:<input type="text" name='dias' onkeypress='numerodias(event)' /> 
Valor total dias a Pagar<input type="text" name='totaldia' />
<input type="hidden" name='valordia' value='{$pagadiario}' />
Fecha:<input type="text" name='fecha' class="fecha"/><br /><br />


<b>Servicios Pendientes</b><br /><br/>
Slecciones Todos los servicios que usted desea Cancelar

<table border="1">
<tr>
{foreach from=$idto item=idtop}
<tr>
<td><input  name="trbop[{$idtop}]"  type="checkbox" onClick="if (this.checked) sumar({$valor[$num]}); else restar({$valor[$num]})" ></td>
<td>{$idtop}</td>
<td>{$valor[$num]}</td>
<td>{$lugar[$num]}</td>
<td>{$fecha[$num]}</td>
<td>{$idtrabajo[$num]}</td>
<td>{$estado[$num]}</td>
</tr>
{$num=$num+1}
{/foreach}
</tr>
</table>



<br />
Valor Total De Servicios Seleccionados:<input type="text" name="total" value="0"><hr />
Finalizar Pago
<hr />
Valor total dias a pagar:<input type='text' name='pagodias' /><br />
Valor Total de Servicios selecionados<input type="text" name="servicios"  /><br />
Valor total a pagar<input type='text' name='totalapagar'/><br />
<input type="submit" value='Realizar Pago' />
</form>
</body>
</html>
