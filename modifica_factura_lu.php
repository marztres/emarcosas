<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>



</head>
<body>

<?php
include("conexion.php");
$factura=$_GET['f'];
$estado="activa";
$consulta= mysql_query("SELECT * FROM factura_lubricante where fk_idproveedor = '$factura' and fase='$estado' ",$conexion);
echo "
          
				<table class='formularios3 izquierda' >
   					<tr>
            			<td 	class='filas'>   <p >Factura:</p>    </td>    
					</tr> 
					<tr>
						<td >     
			 				<select  name='facturax' id='facturalu' onChange='MuestraFactura2(this.value)' ><option>--seleccione Factura--</option>";
while($fila=mysql_fetch_array($consulta)) /* Conjunto de maquinas consultadas dentro de un array */
{
 echo "    
		   						 <option value='$fila[0]' >$fila[0]</option>
		   
	  ";	
}
echo "						</select>  
      					</td>	
	  				</tr>
           
      			</table>
	
    ";

echo "<div id='factura_resultado'> </div>";

?>
</body>
</html>