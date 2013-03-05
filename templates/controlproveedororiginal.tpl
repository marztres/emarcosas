<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<a href="logicadn.php?control=interfazproveedor"> Agregar Proveedor</a>
<table border="1">
<tr>
  <td>
   Id Proveedor
  </td>
  <td width="104" align="center">
   Nombres
  </td>
  <td>
   Combustible
  </td> 
  <td>
   Lubricante
  </td> 
  <td>
   Credito
  </td>
  <td width="90" align="center">
   Registro
  </td>
</tr>
</table >
{$cont=0}
{foreach from=$id item=listaproveedor}
<table border="1">
<tr>
<td width="80" align="center">{$listaproveedor}</td>
<td width="104" align="center">{$nombre[$cont]}</td>
<td width="77" align="center">{$combustible[$cont]}</td>
<td width="64" align="center">{$lubricante[$cont]}</td>
<td width="46">{$pagar[$cont]}</td>
<td width="90" align="center"><a href="logicadn.php?control=datosproveedor&& elpro={$listaproveedor}&& saldo={$pagar[$cont]}&&combustible={$aux1[$cont]}&& lubricante={$aux2[$cont]} ">Ver Registro</a> </td>
<td width="90" align="center"><a href="logicadn.php?control=eliminarprovedor&& elpro={$listaproveedor} " onclick="return cofirmareliminar()" >Eliminar </a> </td>
</tr>
</table> 
{$cont=$cont+1}  	
{/foreach}    			     
<body>
</body>
</html>
