<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control de Contratos</title>
</head>
<body>

<a href="logicadn.php?control=agregarcontrato">Agregar Un Contrato</a>
<table border="1">
<td>Nombre del Contrato</td>
<td>Id del Contrato</td>
<td>Opción</td>
<td>Estado del Contrato</td>
<td>Valor Inicial</td>
<td>Valor Final</td>
<td>Fecha de Inicio</td>
<td>Fecha de Finalización</td>
<td>Eliminar</td>
<td></td>
<tr>
{$num=0}
{foreach from=$idcontrato item=idc}
<tr>
<td>{$fk_idlugar[$num]}</td>
<td>{$idc}</td>
<td><a href="logicadn.php?control=modificarcontrato&& id={$idc}">Modificar</a></td>
<td><a href='#'>{$estado[$num]}</a></td>
<td>{$valor_inicial[$num]}</td>
<td>{$valor_final[$num]}</td>
<td>{$fecha_inicio[$num]}</td>
<td>{$fecha_finalizado[$num]}</td>
<td><a href='#'>Eliminar</a></td>


</tr>
{$num=$num+1}
{/foreach}
</tr>
</table>
</body>
</html>
