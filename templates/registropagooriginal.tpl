<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registro pago</title>
</head>

<body>

Cedula:<input type="text" name="cedula" value='{$cedula}' />
Nombres:<input type='text' name="nombres" value='{$nombre}' />
Apellidos:<input type='text' name="apellidos" value='{$apellido}'  />
Edad:<input type='text' name="edad"  value='{$edad}' />
Sexo:<input type='text' name="sexo" value='{$sexo}' /><br />
Teléfono:<input type='text' name="telefono" value='{$telefono}' />
Direccion:<input type='text' name="direccion" value='{$direccion}' />
Correo:<input type='text' name="sexo" value='{$correo}' />
Sueldo:<input type='text' name="sueldo" value='{$sueldo}' />
Saldo:<input type='text' name="sueldo" value='{$saldo}' /><br />
<br />

<b> Registro de Pagos</b><br /><br />
<table border="1">
<td>Id Pago</td>
<td>Valor Total</td>
<td>Dias Pagado</td>
<td>Fecha</td>
<td>Eliminar</td>
<tr>
{$num=0}
{foreach from=$idpago item=id}
<tr>
<td>{$id}</td>
<td>{$valor[$num]}</td>
<td>{$numerodias[$num]}</td>
<td>{$fecha[$num]}</td>
<td><a href="logicadn.php?control=elipago&& id={$id}" onclick="return cofirmareliminar()">Eliminar</a></td>
</tr>
{$num=$num+1}
{/foreach}
</tr>
</table>
</body>
</html>
