<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Operador</title>
</head>
<body>
<form name="operador" action="logicadn.php?control=guardaroperador" method="post">
Paso 1 Información del Operador<hr />
Ingrese Cedula <input type="text" name="cedula" />
Nombres<input type="text" name="nombres" />
Apellidos<input type="text" name="apellidos" />
Edad<input type="text" name="edad" />
Sexo<select name="sexo"><option>M</option><option>F</option></select>
Teléfono<input type="text" name="telefono" />
Dirección<input type="text" name="direccion" />
Correo<input type="text" name="correo" /><hr />

Paso 2 Sueldo<hr />

<p>Ingrese el sueldo de este Operador</p>
<input type="text" name="sueldo" /><br />
<input type="submit" value="Agregar Operador" />
</form>
</body>
</html>
