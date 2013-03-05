<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Acta</title>
</head>
<body>
 <a href="logicadn.php?control=actasdepagos&& idc={$idc}" >Actas de pago</a> 

<table border="1">
<td>Id Acta</td>
<td>Tipo Acta</td>
<td>Opción</td>
<td>Valor</td>
<td>Fecha</td>
<td>Eliminar</td>
<tr>
{$num=0}
{foreach from=$idacta_pago item=id}
<tr><td>{$id}</td>
<td>{$tipo[$num]}</td>
<td><a href="logicadn.php?control=modificaracta">Modificar</a></td>
<td>{$valor[$num]}</td>
<td>{$fecha[$num]}</td>
<td><a href='logicadn.php?control=eliacta&& id={$id}'>Eliminar</a></td>
</tr>
{$num=$num+1}
{/foreach}
</tr>
</table>
</body>
</html>
