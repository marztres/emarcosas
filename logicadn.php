<?php
/*!!!!!!!!_ _ _ LOGICA DE NEGOCIOS _ _ _!!!!!!!!!!!!!! */

include('seguridad.php');
include('include.php'); /* Incluimos el control del smarty */
include('varios/gestor.php'); /* Igresamos el gestor de la base de datos */


$control=$_GET['control']; /* Capturamos el valor de la variable control */
if($control=='inicio')
{
$gestor= new gestor();
$gestor->conectar();
$gestor->menuinicio();
$gestor->cerrarConexion();
}

else
if($control == "maquinaria") /* Si es igual a maquinaria entonces realiza el menú maquinaria*/
{
$gestor= new gestor();
$gestor->conectar();
$gestor->menumaquinaria();
$gestor->cerrarConexion();
}
/*__________________________________________________________________FIN DEL MENÚ MAQUINARIA */

//---->Formulario de las Máquinas
else
  if($control == "nuevamaquina") /* Si es igual a nuevamaquina Muestra Formulario para Ingresar la máquina*/
{

$gestor= new gestor(); /* Nuevo gestor de datos */
$gestor->selectmaquina() /* Llamamos a la función seleccion de las diferentes máquinas y su respectivo formulario */;

}
/*__________________________________________________________________FIN FORMULARIO MAQUINAS */

//---->Agregar Máquinas
else
  if($control == "agregarmaquina") /* Si es igual a agregar maquina */
{

$idmaquina=$_POST['id'];
$tipomaquina=$_POST['maquinas'];
$contador=$_POST['contador'];
$fecha=$_POST['fecha'];

if($tipomaquina != 'Volco'){
$gestor= new gestor();
$gestor->conectar();
$gestor->agregarmaquinanv($idmaquina,$tipomaquina,$contador);
$gestor->cerrarConexion();
}
else{

$gestor= new gestor();
$gestor->conectar();
$gestor->agregarmaquinav($idmaquina,$tipomaquina,$fecha);
$gestor->cerrarConexion();
	
}

}
/*__________________________________________________________________FIN FORMULARIO MAQUINAS */

/* MANTENIMIENTO DE LAS MAQUINAS  */


if($control=='mantenimiento')
{

$idmaquina=$_GET['cm'];
$gestor= new gestor();
$gestor->conectar();
$gestor->mantenimientomq();
$gestor->cerrarConexion();	
}

// actualizar o modificar el cambio de aceite <--I-->

if($control=='am'){


$tamañof=$_POST['tamañof'];
$tamañot=$_POST['tamañot'];

for($i=0; $i<=$tamañof; $i++){
$fechasv[$i]=$_POST['fecha'.$i];
$idmaq1[$i]=$_POST['fecham'.$i];

}
for($j=0; $j<=$tamañot; $j++){
$horasv[$j]=$_POST['hora'.$j];
$idmaq2[$j]=$_POST['horam'.$j];

}

$gestor=new gestor();
$gestor->conectar();
$gestor->cambioaceite($idmaq1,$fechasv,$idmaq2,$horasv);
$gestor->cerrarConexion();

	
}
//__________________________________________________________________

/*ELIMINAR UNA MAQUINA */
else
if($control=='emaq'){
$emaquina=$_GET['idmaq'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminarmaquina($emaquina);
$gestor->cerrarConexion();

}
/*__________________________________________________________________FIN FORMULARIO MAQUINAS */

//---->ASIGNAR UN EVENTO

else
if($control=="evento")
{
$idm=$_GET['id'];	
$tipo=$_GET['tipo'];	
$gestor = new gestor();
$gestor->conectar();
$gestor->agregarevento($idm,$tipo);
$gestor->cerrarConexion();
}

/*__________________________________________________________________FIN  EVENTOS */

//---->GUARDAR UN EVENTO

else
if($control=="guardarevento")
{
$idm=$_GET['idm'];
$lugar=$_POST['lugar'];
$fecha=$_POST['fecha'];
$tipo=$_GET['tipo'];	
$gestor= new gestor();
$gestor->conectar();
if($tipo =='contrato')
{
$gestor->guardarevento($idm,$lugar,$fecha,$tipo);
}
else
{
$gestor->guardarevento($idm,$lugar,$fecha,'emarco');	
}
$gestor->cerrarConexion();
}
/*__________________________________________________________________FIN GUARDAR EVENTO */

//---->REGISTRO EVENTO

else
if($control=="registroevento")
{

$idm=$_GET['id'];
$tipo=$_GET['tipo'];
$gestor= new gestor();
$gestor->conectar();
$gestor->registroevento($idm,$tipo);
$gestor->cerrarConexion();

}

/*__________________________________________________________________FIN  EVENTOS */

//---->ELIMINAR EVENTO

else
if($control=='elievento')
{
$ide=$_GET['ide'];	
$id=$_GET['id'];
$tipo=$_GET['tipo'];
$gestor=new gestor();
$gestor->conectar();
$gestor->eliminarevento($ide,$id,$tipo);
$gestor->cerrarConexion();

}


/*__________________________________________________________________FIN ELIMINAR_EVENTO */

//---->ASIGNAR UN TRABAJO

else
  if($control == "trabajo") /* Si es igual a trabajo Muestra el Formulario de Asignar Trabajo*/
{
 
$id=$_GET['id']; 
$ide=$_GET['ide'];
$tipot=$_GET['tipot'];
$gestor= new gestor();
$gestor->conectar();
$gestor->registrotrabajo($id,$ide,$tipot);
$gestor->cerrarConexion();  

}

else
  if($control == "guardartrabajo") /* Si es igual a trabajo Muestra el Formulario de Asignar Trabajo*/
{
 
  // CAPTURAS DE VARIABLES POST \\

      $tipo=$_POST['tipo'];
      $fecha=$_POST['fecha'];
    $cantidad=$_POST['servicio'];
      $valor=$_POST['valor'];
   $lugar_trabajo=$_POST['lugar'];
   $codigomaquina=$_POST['codigo'];
   $idoperador=$_POST['operadores'];
 $proveedor_co=$_POST['proveedor_co'];
  $proveedor_lu=$_POST['proveedor_lu'];
     $valorop=$_POST['valorop'];
/*_________para__facturas__________ */
   $formadepago=$_POST['fpago_co'];
    $gasto_co=$_POST['gastoco'];
	$vgalones=$_POST['gastolu'];
	$factura=$_POST['factura2'];
	
/*_________calculo__ingresos__________ */	
   $ingtotales=$_POST['ingtotales'];
   $gastotales=$_POST['gastotales'];
   
/*_________Registro__evento__________ */
	$idevento=$_GET['ide'];
	$tipot=$_GET['tipot'];
/*________________F*N_________________*/ 	
  



$gestor= new gestor();
$gestor->conectar();
if($tipo!='Volco')
{
$valorop=$valorop*$cantidad;
}
if($tipot=='contrato'){
$gestor->agregartrabajo($fecha,$cantidad,$valor,$tipot,$lugar_trabajo,$codigomaquina,$idoperador,$proveedor_co,$proveedor_lu,$valorop,$formadepago,$gasto_co,$vgalones,$ingtotales,$gastotales,$factura,$idevento);
}
else
{
$gestor->agregartrabajo($fecha,$cantidad,$valor,'emarco',$lugar_trabajo,$codigomaquina,$idoperador,$proveedor_co,$proveedor_lu,$valorop,$formadepago,$gasto_co,$vgalones,$ingtotales,$gastotales,$factura,$idevento);	
}
$gestor->cerrarConexion();  
}

/*__________________________________________________________________FIN FORMULARIO ASIGNAR TRABAJO */

//---->Registro de Trabajo
else
  if($control == "registro") /* Si es igual a registro Muestra el registro de la maquina seleccionada*/
{
 
 $codigomaquina=$_GET['id'];
  $ide=$_GET['ide'];
  $tipot=$_GET['tipot'];
 $gestor=new gestor();
 $gestor->conectar();
 $gestor->registrodemaquina($codigomaquina,$ide,$tipot);
 $gestor->cerrarConexion();
 
}
/*_____________________________________________________________ */

//---->Modificar un Trabajo

else
  if($control == "modificar") /* Si es igual a registro Muestra el registro de la maquina seleccionada*/
{ 
 $idtrabajo=$_GET['idtr'];
 $idmaquina=$_GET['idmaq'];
 $tipot=$_GET['tipot'];
 $gestor=new gestor();
 $gestor->conectar();
 $gestor->modificarr($idtrabajo,$idmaquina,$tipot);
 $gestor->cerrarConexion();
}


else
if($control == "nuevosdatos"){

// CAPTURAS DE VARIABLES POST PARA MODIFICAR\\
      $trabajo=$_GET['nuevotrabajo'];
      $fecha=$_POST['fecha'];
    $cantidad=$_POST['servicio'];
      $valor=$_POST['valor'];
   $lugar_trabajo=$_POST['lugar'];
   $codigomaquina=$_POST['codigo'];
   $idoperador=$_POST['operadores'];
 $proveedor_co=$_POST['proveedor_co'];
 $proveedor_lu=$_POST['proveedor_lu'];
     $valorop=$_POST['valorop'];
/*_________para__facturas__________ */
   $formadepago=$_POST['fpago_co'];
    $gasto_co=$_POST['gastoco'];
	$vgalones=$_POST['gastolu'];
	$factura=$_POST['factura2'];
	
/*_________calculo__ingresos__________ */	
   $ingtotales=$_POST['ingtotales'];
   $gastotales=$_POST['gastotales'];
	
/*________________F*N_________________*/ 	
  

 $gestor=new gestor();
 $gestor->conectar();
 $valorop=$valorop*$cantidad;
 $gestor->nuevosdatos($trabajo,$fecha,$cantidad,$valor,'emarco',$lugar_trabajo,$codigomaquina,$idoperador,$proveedor_co,$proveedor_lu,$valorop,$formadepago,$gasto_co,$vgalones,$ingtotales,$gastotales,$factura);
 $gestor->cerrarConexion();	

	
	
}



/*_____________________________________________________________ FIN DE MODIFICAR TRABAJO */

//---->Eliminar uno o varios trabajos

else
 if($control=='er')
  {
   
    if(!empty($_POST['idc'])) { /* Si no esta vacio el checkBox */
	  $aLista=array_keys($_POST['idc']); /* Inserto la Variable en un Array */
	  
	  
	  /*LLamando a los metodos de el gestor */
	  $gestor=new gestor();
	  $gestor->conectar();
	  $gestor->eliminarregistro($aLista);
	  $gestor->cerrarConexion();
	 
	}
	else
	{
	  echo "Usted no ha seleccionado ningún trabajo";	
	echo $aLista;
	}
    }
//---->Eliminar un trabajo	

else
 if($control=='eru')
  {
   
    $id=$_GET['id'];
	$ide=$_GET['ide'];
	$tipot=$_GET['tipot'];
	
    $eliminarr=$_GET['idtu'];
	$gestor=new gestor();
	$gestor->conectar();
	$gestor->eliminarr($eliminarr,$id,$ide,$tipot);
	$gestor->cerrarConexion();
	
	}
/*_________________________________________________________________________________FIN DE CONTROL DE MAQUINAS*/

/*PROVEEDORES */

//----->AGREGAR PROVEEDOR

else
if($control=='proveedor')
{

$gestor= new gestor();
$gestor->conectar();
$gestor->controlproveedor();
$gestor->cerrarConexion();
	
}

else
if($control=='interfazproveedor')
{

$gestor= new gestor();
$gestor->conectar();
$gestor->interfazproveedor();
$gestor->cerrarConexion();
	
}

else
if($control=="agregarproveedor")
{

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$combustible=$_POST['combustible'];
$lubricante=$_POST['lubricante'];

$gestor= new gestor();
$gestor->conectar();
$gestor->agregarproveedor($id,$nombre,$direccion,$telefono,$ciudad,$combustible,$lubricante);
$gestor->cerrarConexion();
}
/*________________________________________________________________________________FIN DE AGREGAR PROVEEDOR */

/* Datos de los proveedores */
else
if($control=="datosproveedor")
{
$id=$_GET['elpro'];
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$gestor=new gestor();
$gestor->conectar();
$gestor->datosproveedor($id,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();
}

/*Registro de las facturas */

//Factura Combustible
else
if($control=="rcombustible")
{
	

$id=$_GET['id'];	
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$gestor=new gestor();
$gestor->conectar();
$gestor->facturaproveedor($id,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();	

}

/*Pagar Factura  */

else
if($control=='pagarfc')
{
$idfactura=$_GET['id'];	
$idpro=$_GET['idpro'];	
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];	
$gestor=new gestor();
$gestor->conectar();
$gestor->pagarfc($idfactura,$idpro,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();	
}
/*____________________________ */

else
if($control == 'eliminarfc')
{
$idfactura=$_GET['id'];	
$idpro=$_GET['idpro'];	
$saldo=$_GET['saldo'];	
$combustible=$_GET['combustible'];	
$lubricante=$_GET['lubricante'];	
$gestor=new gestor();
$gestor->conectar();
$gestor->eliminarfc($idfactura,$idpro,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();	
}

/*____________________________ */
/*Fin de dato de los provedores */

//Factura Lubricante
else
if($control=="rlubricante")
{
	

$id=$_GET['id'];
$saldo=$_GET['saldo'];	
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$gestor=new gestor();
$gestor->conectar();
$gestor->facturaproveedor_lu($id,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();	

}

/* Agregar Factura Lubricante */

else
if($control=="addfl")
{

$id=$_GET['id'];
$nombre=$_GET['nombre'];
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$gestor=new gestor();
$gestor->conectar();
$gestor->addfl($id,$nombre,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();
	
}
/*_______________________________ */

/*Guardar Factura */

else
if($control=="guardarfactura")
{

$idpro=$_POST['idpro'];
$id=$_POST['id'];
$idfactura=$_GET['id'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$saldo=$_GET['saldo'];
$idfactura=$_GET['id'];
$nombre=$_GET['nombre'];
$fecha=$_POST['fecha'];
$galones=$_POST['galones'];
$valor=$_POST['valor'];
$precio=$_POST['precio'];
$estado=$_POST['estado'];
if($estado=='credito')
{
$gestor= new gestor();
$gestor->conectar();
$gestor->guardarfactura($id,$idpro,$fecha,$galones,$valor,$precio,'pendiente',$estado,$idfactura,$combustible,$lubricante,$saldo,$nombre);
$gestor->cerrarConexion();	
}
else
{
$gestor= new gestor();
$gestor->conectar();
$gestor->guardarfactura($id,$idpro,$fecha,$galones,$valor,$precio,'pagado',$estado,$idfactura,$combustible,$lubricante,$saldo,$nombre);
$gestor->cerrarConexion();		
}

}
/*______________________________ */
/*--->*/

/* Ver Detalles Factura Lubricante*/
else
if($control=='verdetallesfl')
{

$idfactura=$_GET['id'];
$nombrepro=$_GET['name'];
$saldo=$_GET['saldo'];
$idpro=$_GET['idpro'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$nombre=$_GET['name'];
$gestor= new gestor();
$gestor->conectar();
$gestor->extraccionlu($idfactura,$nombrepro,$saldo,$idpro,$nombre,$combustible,$lubricante);
$gestor->cerrarConexion();
	
}

/*___________________________________*/
/*ELiminar Factura Lubricante */

else
if($control=='elifl')
{

$idfacturalu=$_GET['id'];
$saldo=$_GET['saldo'];
$idpro=$_GET['idpro'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$nombre=$_GET['name'];

$idx=$_GET['idx'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminarflu($idfacturalu,$idpro,$nombre,$combustible,$lubricante,$saldo);
$gestor->cerrarConexion();		
	
}


/*___________________________________ */
else
if($control=='eliex')
{
$idx=$_GET['idx'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminarext($idx);
$gestor->cerrarConexion();	
}

/*__________________________________ */

/*PAGAR FACTURA LUBRICANTE */

else
if($control=='pagarflu')
{
$idfclu=$_GET['id'];
$idp=$_GET['idp'];
$nombre=$_GET['nombre'];
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];
$gestor= new gestor();
$gestor->conectar();
$gestor->pagarflu($idfclu,$nombre,$idp,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();	
	
}

else
if($control=='cancelarflu')
{
$idfclu=$_GET['id'];
$idp=$_GET['idp'];
$nombre=$_GET['nombre'];
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];	
$gestor= new gestor();
$gestor->conectar();
$gestor->cancelarflu($idfclu,$nombre,$idp,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();	
}


/*__________________________________ */

/*Cancelar Pago Combustible */

else
if($control=='cancelarfc')
{

$idfactura=$_GET['id'];
$idpro=$_GET['idpro'];
$saldo=$_GET['saldo'];
$combustible=$_GET['combustible'];
$lubricante=$_GET['lubricante'];	

$gestor=new gestor();
$gestor->conectar();
$gestor->cancelarpfc($idfactura,$idpro,$saldo,$combustible,$lubricante);
$gestor->cerrarConexion();
	
}
/*__________________________________ */
else
if($control=="agregaroperador")
{
	$gestor= new gestor();
	$gestor->conectar();
	$gestor->agregaroperador();
	$gestor->cerrarConexion();
}
/*_______________________________*/

/*GUARDAR OPERADOR */

else
if($control=="guardaroperador")
{
$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$sueldo=$_POST['sueldo'];
$pagadiario=$sueldo/30;
$gestor=new gestor();
$gestor->conectar();
$gestor->guardaroperador($cedula,$nombres,$apellidos,$edad,$sexo,$telefono,$correo,$direccion,$sueldo,$pagadiario);
$gestor->cerrarConexion();
	
}




/*_______________________________*/

/*ELIMINAR PROVEEDOR */
else
if($control=="eliminarprovedor")
{
$id=$_GET['elpro'];
$saldo=$_GET['saldo'];	
$gestor=new gestor();
$gestor->conectar();
$gestor->eliminarproveedor($id,$saldo);
$gestor->cerrarConexion();
}
/*Fin de Eliminar Proveedor */
  
/*____________________________________________________________________________________FIN DE PROVEEDOR */	

/*OPERADOR */
else
if($control=="operadores")
{
$gestor= new gestor();
$gestor->conectar();
$gestor->controloperadores();
$gestor->cerrarConexion();

}
/*__________________________________________________________________________________ */

/*REGISTRO OPERADOR */

else
if($control=="registrooperador")
{
$id=$_GET['id'];
$saldo=$_GET['saldo'];

$gestor=new gestor();
$gestor->conectar();
$gestor->registrooperador($id,$saldo);
$gestor->cerrarConexion();

}

/*HACER PAGO A OPERADORES */
else
if($control=='pagaroperador')
{
$id=$_GET['id'];
$saldo=$_GET['saldo'];
$gestor=new gestor();
$gestor->conectar();
$gestor->pagooperador($id,$saldo);
$gestor->cerrarConexion();
}

/*___________________________________________________________________________________FIN HACER PAGOS */
/*PAGAR LOS PAGOS DEL OPERADOR */

else
if($control=="pagarop")
{
	
	
if(!empty($_POST['trbop'])) { /* Si no esta vacio el checkBox */
      
	  $id=$_GET['id'];
	  $saldo=$_GET['saldo'];
	  $cedula=$_POST['cedula'];
	  $totaldia=$_POST['dias'];
	  $fecha=$_POST['fecha'];
	  $totalapagar=$_POST['totalapagar'];
	  $aLista=array_keys($_POST['trbop']);
	 
      $gestor=new gestor();
	  $gestor->conectar();
	  $gestor->pagar($aLista,$fecha,$cedula,$totaldia,$totalapagar,$saldo);
	  $gestor->cerrarConexion();
	
}
else
{

      $saldo=$_GET['saldo'];
	  $cedula=$_POST['cedula'];
	  $totaldia=$_POST['dias'];
	  $fecha=$_POST['fecha'];
	  $totalapagar=$_POST['totalapagar'];
	  $gestor=new gestor();
	  $gestor->conectar();
	  $gestor->pagarnoservicios($cedula,$fecha,$totaldia,$totalapagar,$saldo);
	  $gestor->cerrarConexion();
	  
}
}
/*___________________________________________________________________________________FIN DE PAGAR PAGOS */

/*REGISTRO DE PAGOS */

else
if($control=="registrodepago")
{
	$id=$_GET['id'];
    $saldo=$_GET['saldo'];
	$gestor= new gestor();
	$gestor->conectar();
	$gestor->registropago($id,$saldo);
	$gestor->cerrarConexion();
	
}

/*___________________________________________________________________________________ */

/*DETALLES DE LOS PAGOS */

else
if($control=='detallespago')
{
	$id=$_GET['id'];
	$cedula=$_GET['cedula'];
	$saldo=$_GET['saldo'];
	$fecha2=$_GET['fecha2'];
	$gestor= new gestor();
	$gestor->conectar();
	$gestor->detallespago($id,$cedula,$saldo,$fecha2);
	$gestor->cerrarConexion();
}


/*__________________________________________________________________________________FIN DE LOS DETALLES DE PAGO */

/*Modificar operador */

else
if($control=='modoperador')
{
$id=$_GET['id'];
$gestor= new gestor();
$gestor->conectar();
$gestor->modificaroperador($id);
$gestor->cerrarConexion();	

}

else
if($control=='modificaoperador')
{

$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$sueldo=$_POST['sueldo'];

$gestor= new gestor();
$gestor->conectar();
$gestor->modificaoperador($cedula,$nombres,$apellidos,$edad,$sexo,$telefono,$direccion,$correo,$sueldo);
$gestor->cerrarConexion();	

	
}


/*Eliminar Control operador */
else
if($control=='elioperador')
{

$id=$_GET['id'];

$gestor= new gestor();
$gestor->conectar();
$gestor->eliminaroperador($id);
$gestor->cerrarConexion();		
}

/*ELIMINAR REGISTRO OPERADOR */
else
if($control=='elitrbop')
{
$id=$_GET['id'];
$cedula=$_GET['cedula'];
$saldo=$_GET['saldo'];
$gestor=new gestor();
$gestor->conectar();
$gestor->elioperador($id,$cedula,$saldo);
	
}
/*___________________________________________________________________________________FIN DE ELMINAR ROP */

else
if($control=='elipago')
{
$id=$_GET['id'];	
$cedula=$_GET['cedula'];
$saldo=$_GET['saldo'];
$gestor=new gestor();
$gestor->conectar();
$gestor->eliminarpago($id,$cedula,$saldo);
$gestor->cerrarConexion();
}


/*____________________________________________________________________________________FIN DE OPERADOR */

/*····································CONTROL DE CONTRATOS············································ */

//---->CONTROL DE CONTRATOS
else
if($control=="contratos")
{
$gestor=new gestor();
$gestor->conectar();
$gestor->controlcontrato();
$gestor->cerrarConexion();	
}
//_________________________

//---->AGREGAR CONTRATOS
else
if($control=="agregarcontrato")
{
$gestor=new gestor();
$gestor->conectar();
$gestor->agregarcontrato();
$gestor->cerrarConexion();	
}
//_________________________
//---->GUARDAR CONTRATOS

else
if($control=="guardarcontrato")
{

$id=$_POST['id'];
$lugar=$_POST['lugar'];
$valor=$_POST['valor'];
$fecha_inicio=$_POST['fecha_inicio'];
$descripcion=$_POST['descripcion'];
$gestor=$gestor=new gestor();
$gestor->conectar();
$gestor->guardarcontrato($id,$lugar,$valor,$fecha_inicio,$descripcion);
$gestor->cerrarConexion();	

}
//_____________________________________________________________________

//---->MODIFICAR CONTRATO

else
if($control=='modificarcontrato')
{
$id=$_GET['id'];
$estado=$_GET['estado'];

$gestor=new gestor();
$gestor->conectar();
$gestor->modificarcontrato($id);
$gestor->cerrarConexion();
	
}

//---->FINALIZAR CONTRATO


else
if($control=='finalizarcontrato')
{
$idcontrato=$_POST['idcontrato'];
$lugar=$_POST['lugar'];
$valorini=$_POST['valorini'];
$valorfin=$_POST['valorfin'];
$fechaini=$_POST['fechaini'];
$fechafin=$_POST['fechafin'];
$descripcion=$_POST['descripcion'];

$gestor=new gestor();
$gestor->conectar();
$gestor->finalizar_contrato($idcontrato,$lugar,$valorini,$valorfin,$fechaini,$fechafin,$descripcion);
$gestor->cerrarConexion();
}

/*________________________ */

//---->REANUDAR CONTRATO

else
if($control=='reanudar_contrato')
{
$idcontrato=$_GET['idc'];
$gestor=new gestor();
$gestor->conectar();
$gestor->reanudar_contrato($idcontrato);
$gestor->cerrarConexion();
}

//---->ELIMINAR CONTRATO

else
if($control=='elicontrato')
{
$idcontrato=$_GET['idc'];
$gestor=new gestor();
$gestor->conectar();
$gestor->eliminar_contrato($idcontrato);
$gestor->cerrarConexion();
}


/*_______________________________________ */

//---->ACTAS DE PAGO

else
if($control=="actasdepagos")
{
$idc=$_GET['idc'];
$gestor=new gestor();
$gestor->conectar();
$gestor->agregaracta($idc);
$gestor->cerrarConexion();	
}

else
if($control=="guardaracta")
{
$idc=$_GET['idc'];
$id=$_POST['id'];
$fecha=$_POST['fecha'];
$tipo2=$_POST['tipoacta'];
$descripcion=$_POST['descripcion'];
$asunto=$_POST['asunto'];
$valor=$_POST['valor'];
$retencion=$_POST['retencion'];
$descuento=$_POST['descuento'];
$max=1500000; 
$filesize = $_FILES['imagen']['size'];
if($filesize < $max){
$directorio = $_SERVER['DOCUMENT_ROOT'].'/emarcosas/images/';
$nombre = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
 move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
  
 $nuevonombre=$directorio.$nombre; 
 $verimagen='/emarcosas/images/'.$nombre;
 $gestor= new gestor();
 $gestor->conectar();
$gestor->guardaracta($id,$fecha,$tipo2,$descripcion,$asunto,$valor,$retencion,$descuento,$nuevonombre,$verimagen,$idc);
 $gestor->cerrarConexion();

}
else
{

 $gestor= new gestor();
 $gestor->conectar();
$gestor->erroracta();
 $gestor->cerrarConexion();
	
}
}

else
if($control==registroactas)
{
	$idc=$_GET['idc'];
	$gestor= new gestor();
	$gestor->conectar();
	$gestor->registroactas($idc);
	$gestor->cerrarConexion();
}

else
if($control=="modificaracta")
{
$id=$_GET['id'];
$idc=$_GET['idc'];
$gestor=new gestor();
$gestor->conectar();
$gestor->modificaracta($id,$idc);
$gestor->cerrarConexion();
	
}

else
if($control=="actualizacta")
{
	

$id=$_POST['id'];
$idc=$_GET['idc'];
$fecha=$_POST['fecha'];
$tipo2=$_POST['tipoacta'];
$descripcion=$_POST['descripcion'];
$asunto=$_POST['asunto'];
$valor=$_POST['valor'];
$retencion=$_POST['retencion'];
$descuento=$_POST['descuento'];
$max=1500000; 
$filesize = $_FILES['nuevaimagen']['size'];
if($filesize < $max){
$directorio = $_SERVER['DOCUMENT_ROOT'].'/emarcosas/images/';
$nombre = $_FILES['nuevaimagen']['name'];
$tipo = $_FILES['nuevaimagen']['type'];
$tamano = $_FILES['nuevaimagen']['size'];
 move_uploaded_file($_FILES['nuevaimagen']['tmp_name'],$directorio.$nombre);
  
 $nuevonombre=$directorio.$nombre; 
 $verimagen='/emarcosas/images/'.$nombre;
 $gestor= new gestor();
 $gestor->conectar();
$gestor->actualizacionacta($id,$fecha,$tipo2,$descripcion,$asunto,$valor,$retencion,$descuento,$nuevonombre,$verimagen,$idc);
 $gestor->cerrarConexion();

}
else
{

$gestor= new gestor();
$gestor->conectar();
$gestor->erroracta();
$gestor->cerrarConexion();	

}
}




else
if($control=="eliacta")
{

$id=$_GET['id'];
$idc=$_GET['idc'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminaractas($id,$idc);
$gestor->cerrarConexion();
	
}

else
if($control=='cuentascontrato')
{
$idc=$_GET['idc'];
$gestor= new gestor();
$gestor->conectar();
$gestor->cuentascontrato($idc);
$gestor->cerrarConexion();
}

else
if($control=='elicpago')
{
$id=$_GET['id'];
$idc=$_GET['idc'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminar_cuenta_pago($idc,$id);
$gestor->cerrarConexion();

}

else
if($control=='nuevacuenta')
{
$idc=$_GET['idc'];
$gestor= new gestor();
$gestor->conectar();
$gestor->nuevacuenta($idc);
$gestor->cerrarConexion();
}

else
if($control=="guardarcuenta")
{	
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$vector=$_POST['vector'];
$idc=$_GET['idc'];
for($i=1; $i<=$vector; $i++)
{
 $asunto[]=$_POST['asunto'.$i];
 $valor[]=$_POST['valor'.$i];
 $retencion[]=$_POST['retencion'.$i];
 $descuento[]=$_POST['descuento'.$i];
 $total[]=$_POST['total'.$i];
}
for($j=0; $j<=$vector; $j++)
{
 if($asunto[$j]=="")
 {	
  
 }
 else
 {
  $nuevoasunto[]=$asunto[$j]; 
  $nuevovalor[]=$valor[$j]; 
  $nuevoretencion[]=$retencion[$j]; 
  $nuevodescuento[]=$descuento[$j];
  $nuevototal[]=$total[$j]; 
 }
}

$gestor= new gestor();
$gestor->conectar();
$gestor->guardar_cuenta_pago($descripcion,$fecha,$nuevoasunto,$nuevovalor,$nuevoretencion,$nuevodescuento,$nuevototal,$idc);
$gestor->cerrarConexion();

}//fin funcion

else
if($control=='modifica_cuenta_pago')
{
$idc=$_GET['idc'];
$id=$_GET['id'];
$gestor=new gestor();
$gestor->conectar();
$gestor->modifica_cuenta_pago($idc,$id);
$gestor->cerrarConexion();
	
}

/*Guardar datos Modificados de las cuenta de cobro*/
else
if($control=="mcp")
{
$idc=$_GET['idc'];		
$idcuentas_contrato=$_POST['idcuentas_contrato'];	
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];
$asunto=$_POST['asunto'];
$valor=$_POST['valor'];
$iva=$_POST['iva'];
$descuento=$_POST['descuento'];
$total=$_POST['total'];

$gestor=new gestor();
$gestor->conectar();
$gestor->guardar_modificar($idcuentas_contrato,$fecha,$descripcion,$asunto,$valor,$iva,$descuento,$total,$idc);
$gestor->cerrarConexion();

}


/*________________________________________________ */

else
if($control=='maquinascontrato')
{
$idc=$_GET['id'];
$gestor= new gestor();
$gestor->conectar();
$gestor->maquinascontrato($idc);
$gestor->cerrarConexion();
}

else
if($control=='agregarmaquinac')
{
	
$idc=$_GET['id'];

$gestor= new gestor();
$gestor->conectar();
$gestor->agregarmaquinac($idc);
$gestor->cerrarConexion();
}

else
if($control=='gmaquinac')
{
	
$idc=$_GET['idc'];
$idmaquina=$_POST['idmaquina'];
$gestor= new gestor();
$gestor->conectar();
$gestor->guardarmaquinac($idc,$idmaquina);
$gestor->cerrarConexion();
}


else
if($control=='eliminarmc')
{
	
$idc=$_GET['idc'];
$idm=$_GET['idm'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminarmc($idc,$idm);
$gestor->cerrarConexion();
}


else
if($control=='controlcuentas')//Cuentas por pagar
{
$gestor= new gestor();
$gestor->conectar();
$gestor->cuentaspagar();
$gestor->cerrarConexion();
}

else
if($control=='cuentas_cobro')
{

$gestor= new gestor();
$gestor->conectar();
$gestor->cuentas_cobro();
$gestor->cerrarConexion();

}


else
if($control=='cuentadecobro')
{
$ide=$_POST['ide'];	
$cuentas=$_GET['cuentas'];
$gestor=new gestor();
$gestor->conectar();

if($ide=="")
{	
$gestor->faltaide($cuentas);
}
else
{
$gestor->cuentadecobro($ide);
}
$gestor->cerrarConexion();
}

//_____________________________________________________________________
/* Guardar Cuenta Cobro */

else
if($control=='guardarcuentacobro')
{

$documento=$_POST['noid'];
if($documento=='noid')
{
	
$ciudad=$_POST['ciudad'];
$fecha=$_POST['fecha'];
$numerodecuenta=$_POST['numerodecuenta'];
$estado=$_POST['estado'];
$cliente=$_POST['cliente'];
$tidcliente=$_POST['tidcliente'];
$idcliente=$_POST['idcliente'];
$cobrante=$_POST['cobrante'];
$tidcobrante=$_POST['tidcobrante'];
$idcobrante=$_POST['idcobrante'];
$despago=$_POST['despago'];
$valorletras=$_POST['valorletras'];
$dinero=$_POST['dinero'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$vpendiente=$_POST['vpendiente'];
$abono=$_POST['abono'];
$ide=$_POST['ide'];
$actividad=$_POST['actividad'];	
	
$gestor=new gestor();
$gestor->conectar();

$vpendiente=$vpendiente-$abono;
$gestor->insertar_nc($ciudad,$fecha,$numerodecuenta,$estado,$cliente,$tidcliente,$idcliente,$cobrante,$tidcobrante,$idcobrante,$valorletras,$dinero,$despago,$nombre,$cedula,$telefono,$direccion,$vpendiente,$aboono,$actividades,$ide,$actividad);
$gestor->cerrarConexion();

}
else
{
$ciudad=$_POST['ciudad'];
$fecha=$_POST['fecha'];
$numerodecuenta=$_POST['numerodecuenta'];
$estado=$_POST['estado'];
$cliente=$_POST['cliente'];
$tidcliente=$_POST['tidcliente'];
$idcliente=$_POST['idcliente'];
$cobrante=$_POST['cobrante'];
$tidcobrante=$_POST['tidcobrante'];
$idcobrante=$_POST['idcobrante'];
$despago=$_POST['despago'];
$valorletras=$_POST['valorletras'];
$dinero=$_POST['dinero'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$vpendiente=$_POST['vpendiente'];
$abono=$_POST['abono'];
$ide=$_POST['ide'];
$actividad=$_POST['actividad'];
$gestor=new gestor();
$gestor->conectar();

$vpendiente=$vpendiente-$abono;

$gestor->guardarcuentadecobro($ciudad,$fecha,$numerodecuenta,$estado,$cliente,$tidcliente,$idcliente,$cobrante,$tidcobrante,$idcobrante,$valorletras,$dinero,$despago,$nombre,$cedula,$telefono,$direccion,$vpendiente,$aboono,$actividades,$ide,$actividad);
$gestor->cerrarConexion();

}
}

else
if($control=='ver_cuenta_cobro')
{
$idcuenta=$_GET['cuenta'];	
$gestor=new gestor();
$gestor->conectar();
$gestor->vercuentacobro($idcuenta);
$gestor->cerrarConexion();
}

else
if($control=='modificar_cuenta_cobro')
{
	
	
$ciudad=$_POST['ciudad'];
$fecha=$_POST['fecha'];
$numerodecuenta=$_POST['numerodecuenta'];
$estado=$_POST['estado'];
$cliente=$_POST['cliente'];
$tidcliente=$_POST['tidcliente'];
$idcliente=$_POST['idcliente'];
$cobrante=$_POST['cobrante'];
$tidcobrante=$_POST['tidcobrante'];
$idcobrante=$_POST['idcobrante'];
$despago=$_POST['despago'];
$valorletras=$_POST['valorletras'];
$dinero=$_POST['dinero'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$vpendiente=$_POST['vpendiente'];
$abono=$_POST['abono'];
$actividades=$_POST['actividades'];
$ide=$_POST['ide'];	
	
$gestor=new gestor();
$gestor->conectar();
$gestor->modificar_cuenta_cobro($ciudad,$fecha,$numerodecuenta,$estado,$cliente,$tidcliente,$idcliente,$cobrante,$tidcobrante,$idcobrante,$valorletras,$dinero,$despago,$nombre,$cedula,$telefono,$direccion,$vpendiente,$abono,$actividades,$ide);
$gestor->cerrarConexion();	
}

/*ELIMINAR CUENTA DE COBRO */

else
if($control=='eli_control_cuenta')
{
$cuenta=$_GET['cuenta'];
$ide=$_GET['ide'];
$gestor= new gestor();
$gestor->conectar();
$gestor->eliminar_cuenta_cobro($cuenta,$ide);
$gestor->cerrarConexion();	
}


/*FIN ELIMINAR CUENTA DE COBRO */
/*_______________________________________________________Fin Cuenta Cobro */
//_____________________________________________________________________
/*:::::::::::::::::::::::::::::::: FINAL CONTROL DE CONTRATOS::::::::::::::::::::::::::::::::::::::::: */

/* ESTADISTICAS DE INGRESO*/
else
if($control=='estadisticas_ingresos')
{
$gestor=new gestor();
$gestor->conectar();
$gestor->estadisticas_ingreso();
$gestor->cerrarConexion();
}


/*____________________________________________________________________ */

?>
