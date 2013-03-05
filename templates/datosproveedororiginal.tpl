<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datos Proveedor</title>
</head>

<body>

<label>Información Proveedor</label><br />

    Id<input type='text' name='id' value='{$id}' />
    
     {$num=0}    
  	 {foreach from=$nombre item=nombres}
     Nombre:<input type='text' name='nombre' value='{$nombres}' />
      {$num=$num+1} 
     {/foreach} 
    
     {$num=0}    
  	 {foreach from=$telefono item=tel}
     Telefono:<input type='text' name='telefono' value='{$tel}' />
      {$num=$num+1} 
     {/foreach} 
   
     {$num=0}    
  	 {foreach from=$direccion item=dir}
     Dirección:<input type='text' name='direccion' value='{$dir}' />
      {$num=$num+1} 
     {/foreach} 
   
     {$num=0}    
  	 {foreach from=$ciudad item=city}
     Ciudad:<input type='text' name='ciudad' value='{$city}' /><br />
      {$num=$num+1} 
     {/foreach} 
      
      {$num=0}    
  	 {foreach from=$combustible item=combu}
     Combustible:<input type='text' name='combustible' value='{$combu}' />
      {$num=$num+1} 
     {/foreach} 
     
     {$num=0}    
  	 {foreach from=$lubricante item=lubri}
     Lubricante:<input type='text' name='lubricante' value='{$lubri}' />
      {$num=$num+1} 
     {/foreach}
    
     Credito<input type="text" name='saldo' value='{$saldo}'/><br /><br />
     
     
    
    {if $combu == "si" and $lubri == "no"}
    <label> COMBUSTIBLE</label><br />   
    Se encuentran Compras a credito no canceladas por el valor de: 
    <input name='pendiente_co' value="{$saldo}" /> <a href="logicadn.php?control=rcombustible&& id={$id}&&saldo={$saldo}"> Ver Registro</a>
    {elseif $combu == "no" and $lubri == "si"}
     <label> LUBRICANTE</label><br />
     Se encuentran Facturas a credito no canceladas por el valor de: 
    <input name='pendiente_co' value="{$saldo}" /> <a href="logicadn.php?control=rlubricante&& id={$id}&&saldo={$saldo}"> Ver Registro</a>
    {else}
    
    <label> COMBUSTIBLE</label><br />   
    Se encuentran Compras a credito no canceladas por el valor de: 
    <input name='pendiente_co' value="{$co}" /><a href="logicadn.php?control=rcombustible&& id={$id}&&saldo={$saldo}"> Ver Registro</a><br />
    
    <label> LUBRICANTE</label><br />
     Se encuentran Facturas a credito no canceladas por el valor de: 
    <input name='pendiente_co' value="{$lu}" /> <a href="logicadn.php?control=rlubricante&& id={$id}&&saldo={$saldo}"> Ver Registro</a>
    
    {/if}
    
    
     

</body>
</html>
