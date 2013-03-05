<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Maquinas</title>
</head>

<body>
<form name="generar" method="post" action="logicadn.php?control=er" ONSUBMIT='return pregunta();'  >

    
   <label> ID</label>
   <input type='text' value='{$idmaquina}' readonly='readonly'/>
   <label> TIPO</label>
   <input type='text' value='{$maquinas}' readonly='readonly'/>
     
    <table border="1">
    <tr>
    <td>
       Eliminar/varios
    </td>
     <td>
     Lugar
    </td>
     <td align="center">
       Fecha
    </td> 
    <td>
        Ingresos Totales
    </td>
    <td>
        Gastos Totales
    </td> 
    <td>
        Ganancias
    </td>    
    <td>
        Revisar Detalles
    </td> 
    <td align="center">
        Cuenta
    </td>
    <td align="center">
       Eliminar
    </td>
   </tr> 
</table>
<table border='1'>
<tr>   
       
       {$sum=0}
      {foreach from=$idtrabajo item=idt}
    <td><input type="checkbox"  name="idc[{$idtrabajo[$sum]}]" /></td>    
    <td>{$nombretrabajo[$sum]}</td>
    <td>{$fecha[$sum] }</td>  
    <td>{$ingresos[$sum]}</td>  
    <td>{$gastos[$sum]}</td>
    <td>{$ganancias[$sum]}</td>
    <td><a href="logicadn.php?control=modificar&& idtr={$idtrabajo[$sum]}&&  idmaq={$idmaquina}">Modificar</a></td>
    <td>{$cuenta[$sum]}</td>
    <td><a onclick=" pregunta()"  href="logicadn.php?control=eru&& idtu={$idtrabajo[$sum]} ">Eliminar</a></td> 

  </tr>
  {$sum=$sum+1}
  {/foreach} 
</table>
<input type="submit" value="eliminar"  />
</form>     
</body>
</html>
