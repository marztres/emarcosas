<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de eventos</title>
</head>

<body>
<table border="1">
<tr>
<td align="center">x</td>
<td>Lugar</td>
<td>Ingresos Totales</td>
<td>Gastos Totales</td>
<td>Ganancias</td>
<td>Opción</td>
<td>Registro</td>
<td>Cuenta</td>
<td>Eliminar</td>
{$cont=0}
{foreach from=$ide item=id}
<tr>
<td><input name="ide" type="radio" value="{$id}" /></td>
<td>{$lugar[$cont]}</td>
<td>{$ingresos[$cont]}</td>
<td>{$gastos[$cont]}</td>
<td>{$ganancias[$cont]}</td>
<td><a href='logicadn.php?control=trabajo&& id={$fk_idmaquina[$cont]}&& ide={$id}'>Agregar Trabajo</a></td>
<td><a href='logicadn.php?control=registro&& id={$fk_idmaquina[$cont]}&& ide={$id}'>Ver Registro</a></td>
<td>{$cuenta[$cont]}</td>
<td><a href='logicadn.php?control=elievento&& ide={$id}'>Eliminar</a></td>
</tr>
{$cont=$cont+1}
{/foreach}
</tr>
</table>
</body>
</html>
