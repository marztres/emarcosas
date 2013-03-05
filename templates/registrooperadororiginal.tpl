<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Operador</title>
</head>
<a href="logicadn.php?control=pagaroperador&& id={$cedula}&& saldo={$saldo}">Hacer Pago</a><br>

<body>
<table>
<tr>
Cedula:<input type='text' value="{$cedula}" />
Nombres:<input type='test'value='{$nombre}' />
Apellidos:<input type='text' value='{$apellido}'/>
Edad:<input type='text' value='{$edad}' />
Sexo:<input type='text'value='{$sexo}' />
Telefono:<input type='text' value='{$telefono}' />
Direccion:<input type='text' value='{$direccion}' />
Correo:<input type='text' value='{$correo}' />
Sueldo:<input type='text' value='{$sueldo}' />
Saldo:<input type='text' value='{$saldo}' />


{$num=0}
{foreach from=$idto item=idtop}
<tr><td>{$idtop}</td>
<td>{$horas[$num]}</td>
<td>{$valor[$num]}</td>
<td>{$lugar[$num]}</td>
<td>{$fecha[$num]}</td>
<td>{$idtrabajo[$num]}</td>
<td>{$estado[$num]}</td>
<td><a href="logicadn.php?control=elitrbop&& id={$idtop}" onClick="return cofirmareliminar()" >Eliminar</a></td>
{$num=$num+1}
</tr>
{/foreach}
</tr>
</table>
</body>
</html>
