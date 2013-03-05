<html>
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
    


{literal}

<script type="text/javascript">
 
var cajas=0;
var filas = 1;

function agregar_caja(){
	var filaHtml = "";
	cajas++;
	filaHtml += "<input type=text id='asunto"+filas+"' name='asunto"+filas+"'> ";
	cajas++;
	filaHtml += "<input type=text id='valor"+filas+"' name='valor"+filas+"'> ";
	cajas++;
	filaHtml += "<input type=text id='retencion"+filas+"' fila='"+filas+"' name='retencion"+filas+"'> ";
	cajas++;
	filaHtml += "<input type=text id='descuento"+filas+"' name='descuento"+filas+"'> ";
	cajas++;
	filaHtml += "<input type=text id='total"+filas+"' name='total"+filas+"'> ";
	filaHtml += "<a href='javascript:;' onclick='borrarFila("+filas+")' >Borrar</a> ";
	
	$('#cajas').append('<div id="fila'+filas+'">'+filaHtml+'</div>');
	
	$('#retencion'+filas).keyup(function(e) {
		if(e.keyCode == 13) {
			//alert($(this).attr("fila"));
			operacion($(this).attr("fila"));
		}
	});
	
	filas++;
	




}

function borrarFila(fila){
	$("#fila"+fila).remove();
}


 function operacion(z)
  {
  
	retencion=parseInt( document.getElementById('retencion'+z).value); 
	valor=parseInt( document.getElementById('valor'+z).value);  
	porcentaje=retencion/100; 
	var descuento=valor*porcentaje;
	var total=valor-descuento;
	document.getElementById('vector').value =filas; 
	document.getElementById('descuento'+z).value = descuento;  
	document.getElementById('total'+z).value = total;  

  }
 
 function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
} 


</script>


{/literal}

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cuentapago</title>
</head>
<body onkeypress="return pulsar(event)">
<form name="formulario"  action="logicadn.php?control=guardarcuenta&&idc={$idc}" method="post">
fecha<input type='text' name='fecha' class="fecha"/><br />
<b> Descripción</b><br />
<textarea name="descripcion" cols="50" rows="5"></textarea><br /><br />
<div id="cajas"> </div>
<input type=button onClick="agregar_caja()" value="Agregar caja"><br>
<input type='hidden' name='vector' id='vector' >
<input type='submit' value='Agregar Cuenta' >
</form>
 
</body>
</html>
