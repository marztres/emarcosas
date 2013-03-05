<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
Id Proveedor<input type='text' value='{$idproveedor}' />
Nombre Proveedor<input type='text' value='{$nombrepro}' />
Saldo<input type='text' value='{$saldo}' /><br />
Información Factura<br />

Id Factura<input type='text' value='{$idfactura_lubricante}' />
Valor<input type='text' value='{$precio}' />
Forma De Pago<input type='text' value='{$forma_de_pago}' />
Estado<input type='text' value='{$estado}' /><br />
Galones Totales<input type='text' value='{$galones}' />
Galones Restantes<input type='text' value='{$galones_restantes}' />
Valor Unitario<input type='text' value='{$valor_unitario}' />
<br />

<table border=1>
<tr>
<td>Id de la Extraccion</td>
<td>Id del Trabajo</td>
<td>Galones Extraidos</td>
<td>Fecha</td>
<td>Lugar</td>

{$num=0}
{foreach from=$idextraccion_lubricante item=idx}
<tr><td>{$idx}</td>
<td>{$fk_factura_lubricante[$num]}</td>
<td>{$galones[$num]}</td>
<td>{$fecha[$num]}</td>
<td>{$fk_lugar[$num]}</td>
</tr>
{$num=$num+1}
{/foreach}
</tr>
</table>
<a href="logicadn.php?control=pagarflu&& id={$idfactura_lubricante}">Pagar</a>
</body>
</html>
