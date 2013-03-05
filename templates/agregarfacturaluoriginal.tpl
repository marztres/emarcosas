<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar factura Lubricante</title>
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
    </script>
    
    
</head ">

<body onkeypress="return pulsar(event)">
<form name='facturalu' action="logicadn.php?control=guardarfactura" method="post">
<p>Información del proveedor</p>

Id<input type='text' value='{$id}' name='idpro'/>
Nombre<input type='text' value='{$nombre}'/>
Saldo<input type="text" value='{$saldo}'/><hr />

<p>Paso 1 Inforación de la factura</p><hr />


Id:<input type='text' name='id' /> Fecha: <input type='text' name='fecha' class="fecha"  />

<p>Paso 2 detalles de la factura</p><hr />

Valor:<input type='text' name='valor' />
Galones: <input type="text" name="galones"   onkeypress='calculapu(event)' />
Precio Unitario: <input type="text" name="precio"  /><select name="estado"><option>credito</option> <option>contado</option></select><br />
<input type='submit' value='Guardar Factura' />


</form>
</body>
</html>
