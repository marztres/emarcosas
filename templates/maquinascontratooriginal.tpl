<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/emarcosas/templates/css/control de maquinaria.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maquinas Contrato</title>
</head>
<body>
<a href="logicadn.php?control=agregarmaquinac&& id={$idc}">Agregar Maquinas</a>
<table>
<tr>
{$num=0}
{foreach from=$idmaquina item=idmaq}
<tr><td>{$idmaq}</td>
<td>{$nombremaquina[$num]}</td>
<td><a href='logicadn.php?control=registroevento&&id={$idmaquina[$num]}&&tipo=contrato&& class='tabla'> Registro de Evento</a></td>
<td><a href='logicadn.php?control=mantenimiento&& cm={$codm[$num]}' >{$respuesta[$num]}</a></td>
<td>{$utrabajo[$num]}</td>
</tr>
{$num=$num+1}
{/foreach}
</tr>
</table>
</body>
</html>
