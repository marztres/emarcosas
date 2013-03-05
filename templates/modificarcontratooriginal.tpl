<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
    </script>
    

<title>Modificar Contrato</title>
</head>
<body>
<form name='modifica' action="logicadn.php" method="post">
Id: <input type="text" name="id" value='{$idcontrato}'/>
Lugar: <input type="text" name="lugar" value='{$fk_idlugar}'/>
Valor Inicial: <input type="text" name="valorini" value='{$valor_inicial}'/>
Valor Final: <input type="text" name="valorfin" value='{$valor_final}'/><br />
Fecha de Inicio: <input type="text" name="fechaini" value='{$fecha_inicio}' class="fecha"/>
Fecha de Finalización: <input type="text" name="fechafin" value='{$fecha_finalizado}' class="fecha"/>
<br />
<b>Descripción</b><br />
<textarea name="descripcion" cols="50" rows="5" >{$descripcion}</textarea><br />
<hr />
Actas de Pago
<hr />
Valor de las Actas Ingresadas <input type='text' name='actasingresadas' /><input type='button' value='Ver Actas de Pago' /><br />

<hr />
Cuentas de Pago
<hr />
Valor de las cuentas de pagos ingresadas <input type='text' name='actasingresadas' /><input type='button' value='Ver Actas de Pago' /><br />

<hr />
Máquinas en contrato
<hr />
Número de Maquinas Asignadas a este Contrato <input type='text' name='actasingresadas' /><input type='button' value='Ver Maquinas en Contrato' /><br />
<hr />
<input type="submit" value='Finalizar Contrato' />
<hr />
</form>
</body>
</html>
