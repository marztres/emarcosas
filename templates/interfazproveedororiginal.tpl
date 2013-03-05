<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Porveedor</title>
</head>

<body>
<form name='proveedor' method="post" action="logicadn.php?control=agregarproveedor">
<label>Ingrese Informacion del provedor</label>
<p>Ingrese el ID del Proveedor:</p><input type='text' name='id' /><br />
<label>Nombre proveedor</label><br />
<input  type="text" name="nombre" /><br />
<label>Direccion</label><br />
<input  type="text" name="direccion" /><br />
<label>Telefono</label><br />
<input  type="text" name="telefono" /><br />
<label>Ciudad</label><br />
<input  type="text" name="ciudad" /><br />

<label>Tipo de Distribución</label><br />

<label>Seleccione Los elementos a distribuir</label><br />
<input type="checkbox" name="combustible" value="combustible" /><label>Combustible</label><br />
<input name="lubricante" type="checkbox" value='lubricante'  /><label>Lubricante</label><br />
<input type='submit' value='Agregar Proveedor' />

</form>

</body>
</html>
