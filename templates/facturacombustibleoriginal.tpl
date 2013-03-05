<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facturas Combustibles</title>
</head>

<body>

Id<input type="text" value="{$id}" />
Nombre<input type="text" value="{$nombrepro}" />
Saldo<input type='text' value='{$saldo}'  />


<table border="1">
<tr>

{$num=0}    
{foreach from=$idfactura item=factura}
<tr><td>{$factura}</td>
<td>{$idtrabajo[$num]}</td>
<td>{$forma_pago[$num]}</td>
<td>{$valor_co[$num]}</td>
<td>{$fecha_trabajo[$num]}</td>
<td>{$nombre_trabajo[$num]}</td>
<td>{$estado[$num]}</td>
{if $estado[$num] == "pendiente"}
<td><a href="logicadn.php?control=pagarfc">Pagar</a></td>
{else}
<td><a href="logicadn.php?control=cancelarfc">Cancelado</a></td>
{/if}
<td><a href="logicadn.php?control=eliminarfc">Eliminar</a></td>
</tr>



{$num=$num+1}
{/foreach}
</tr>
</table>
</body>
</html>
