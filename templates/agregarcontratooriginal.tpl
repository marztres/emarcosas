<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

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
    

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Contrato</title>
</head>
<body>
<form name='formulario' action="logicadn.php?control=guardarcontrato" method="post">
<hr />
<b>Paso 1 Ingrese la información del contrato</b><hr />

Ingrese el Id <input type='text' name='id'/>
Ingrese el Lugar <input type='text' name='lugar'/>

<hr />
<b>Paso 2 Valor Inicial y Fecha</b><hr />
Valor Inicial <input type="text" name='valor'/>
Fecha Inicial <input type="text" name='fecha_inicio' class="fecha"/>

<hr />
<b>Paso 3 Descripción </b><hr />
Descripción <textarea name="descripcion" cols="50" rows="5"></textarea><br /><br />
<input type="submit" value="Guardar Contrato" />
</form>
</body>
</html>
