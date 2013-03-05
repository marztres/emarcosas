<?php
include("conexion.php");
$facturaresul=$_GET['fr'];
$estado="activa";
$consulta= mysql_query("SELECT * FROM factura_lubricante where  idfactura_lubricante = '$facturaresul' and fase='$estado' ",$conexion);

while($fila=mysql_fetch_array($consulta)) /* Conjunto de maquinas consultadas dentro de un array */
{
 echo " 
 			 <table class='formularios3 izquierda' >
   					<tr>
            			<td >   <p >Galones disponibles:</p>    </td>    
					</tr> 
					<tr>
						<td >
						    <input type='text' name='galonesd' id='galones' value='$fila[4]'>
		    				<input type='hidden' name='galondisponible' id='galon' value='$fila[8]' >
		  			    </td>	
	  				</tr>
           	 </table>
		    ";	
}
?>