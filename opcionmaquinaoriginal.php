<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<script type="text/javascript" src="varios/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="varios/jquery.functions.js"></script>
</head>
<?php
include('seguridad.php');
include('varios/calendario.php');
$fila[]="Volco";
if($fila[0] == $_GET['m']){	

echo"<br></td><td><b>FECHA DE CAMBIO DE ACEITE</b><br><input type='text' name='fecha' id='fecha'  readonly='readonly' > </td>";
calendar_html();

}
else{
echo "<br><b>¿ DENTRO DE CUANTAS HORAS CAMBIARÁ EL ACEITE ?</b><br><br>";	
echo"<input type='text' name='contador'<br>";

}

echo"<br><br>";
?>

</html>