<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Operador</title>
</head>
<body>
<a href="logicadn.php?control=agregaroperador">Agregar Operador</a>

<table border="1">
<tr>
<td>Cedula</td>
<td>Nombres</td>
<td>Apellidos</td>
<td>Telefono</td>
<td>saldo</td>
<td> Registro</td>
<td>Eliminar</td>
{$num=0}
{foreach from=$id item=ides}
<tr><td>{$ides}</td>
<td>{$nombre[$num]}</td>
<td>{$apellido[$num]}</td>
<td>{$telefono[$num]}</td>
<td>{$pagar[$num]}</td>
<td><a href="logicadn.php?control=registrooperador&& id={$id[$num]}&& saldo={$pagoop}">Ver Registro</a></td>
<td><a href="logicadn.php?control=elioperador&& id={$id[$num]}" onClick="return cofirmareliminar()">Eliminar</a></td>
{$num=$num+1}
</tr>
{/foreach}
</tr>
</table>
</body>
</html>
