<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu maquinas</title>
</head>

<body>
<?php
/*!!!!!!!!_ _ _ LOGICA DE NEGOCIOS _ _ _!!!!!!!!!!!!!! */

include('include.php');
include('varios/gestor.php');
$control=$GET['maquinaria'];
if($control="maquinaria"){
$gestor= new gestor();
$gestor->conectar();
$gestor->menumaquinaria();

}



?>

</body>
</html>