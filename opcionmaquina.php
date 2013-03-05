<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
</head>
<?php
include('seguridad.php');
$fila[]="Volco";
if($fila[0] == $_GET['m']){	
echo" <style>.tfecha {display:block;} .ptiempo { display:block;} .trtiempo {display:block;} </style>";     
}
else{
echo" <style>.thoras {display:block;} .ptiempo { display:block;} .trtiempo {display:block;} </style> 	 ";


}


?>

</html>