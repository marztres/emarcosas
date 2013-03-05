<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Maquinas Contrato</title>
</head>
<body>
<form name='idmaquina' action="logicadn.php?control=gmaquinac&& idc={$idc}" method="post" ONSUBMIT='return preguntaevento();'>
{$num=0} 
<select name='idmaquina'>
{foreach from=$idtipo item=idt}
<option value="{$idmaquina[$num]}">{$idt}</option>
{$num=$num+1}
{/foreach}
</select>
<br />
<br />
<input type="submit" value="Agregar Maquina"/>
</form>
</body>
</html>
