<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Factura Lubricante</title>
</head>

<body>
<a href="logicadn.php?control=addfl&& id={$idprovedor}&& nombre={$nombrepro}&& saldo={$saldo}">Agregar Factura Lubricante</a>

<p>INFORMACIÓN DEL PROVEEDOR</p><hr />
Id<input type="text" value="{$idprovedor}" />
Nombre<input type="text" value="{$nombrepro}" />
Teléfono<input type="text" value="{$telefono}" />
Dirección<input type="text" value="{$direccion}" />
Ciudad<input type="text" value="{$ciudad}" /><br />
Combustible<input type='text' value='{$combustible}'/>
Lubricante<input type='text' value='{$lubricante}' />
Saldo <input type='text' value='{$saldo}' /><hr />


<p>REGISTRO DE FACTURAS LUBRICANTE</p><hr />



<table border="1">
<tr>

{$num=0}    
{foreach from=$id item=factura}
<tr><td>{$factura}</td>
<td>{$fechatrb[$num]}</td>
<td>{$fkgalones[$num]}</td>
<td>{$fkgalonesrest[$num]}</td>
<td>{$fkvalor[$num]}</td>
<td>{$fkestado[$num]}</td>
<td>{$fkfase[$num]}</td>
<td><a href="#">Ver Detalles</a></td>
<td><a href="#">Eliminar</a></td
</tr>



{$num=$num+1}
{/foreach}
</tr>
</table>

</body>
</html>
