<title>Emarco SAS</title>
<?php

/*!!!!!!!!_ _ _ Consultas a la Base de Datos _ _ _!!!!!!!!!!!!!! */

/* Creamos la Clase Gestor Para procesar todas la consultas a la BD*/
class gestor{

var $servidor = "localhost"; //Conectamos al servidor
var $user = "root"; //Ingresamos el usuario del servidor o de la BD
var $pass = "root"; /* Password de la BD */
var $db = "emarcosas"; /* Base de datos a la cual accedemos */
var $cn;  /* Variable conexion ($cn) */

function conectar() /* Creamos la funcion donde Realizamos conexion a la bd */
{	
$this->cn = mysql_connect($this->servidor, $this->user, $this->pass ); 
if ( !$this->cn )
die("Fallo en la conexion a la base de datos: ".mysql_error());
if(!mysql_select_db($this->db))
die ( "No fue posible comunicarse con la base de datos $db: ".mysql_error());
}
function realizarOperacion($codigo) /* Para Lograr insertar los valores a las tablas de la BD */
{
$resultado = mysql_query($codigo, $this->cn) ; /* La consulta que realicemos la agregamos a la variable resultado */
}

/*--->Realiza una consulta de la tabla usuarios sobre la BD*/
function consultar($usuario,$clave){ /* Parametros que capturaran los datos que vengan del tpl del post en este caso del
loging */
global $template; /* Variable global para enviar mensajes al tpl */	
$resultado = mysql_query("SELECT * FROM usuarios where usuario = '$usuario' and clave='$clave'",$this->cn); /* Comparacion para verificar si el usuario existe */
$filas=mysql_num_rows($resultado); /* Capturamos los resultados de las filas del resultado  */
if($filas==1){ /* Si filas es igual a 1 Inicia sesión  */
$_SESSION["autentificado"]="1"; // inicio de sesión
header("Location:logicadn.php?control=inicio"); 
}
else{
$this->errorusuario(); /* Si el usuario no es correcto se llama al metodo error usuario */
}
}

function errorusuario(){
 global $template; /* Variable global para enviar mensajes al tpl */
 $template->assign('error','Error al procesar los datos'); /* Error que se mostrará en caso de no existir el usuario */ $template->display('loging.tpl'); /* Se mostrará por pantalla en loging .tpl */
 
}

/*MENU INICIO */

function menuinicio()
{	
global $template; /* Variable global para enviar mensajes al tpl */	

$maquinas=mysql_query('SELECT * FROM maquinas ORDER BY `idmaquina`  '); /* Consulta a la tabla maquinas oredenadas por el nombre*/

while($fila=mysql_fetch_array($maquinas)) /* Conjunto de maquinas consultadas dentro de un array */
{

$auxmaquina[]=$fila[1]; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */
$auxcodigo[]=$fila[0];  /*Insertamos los valores de código de maquina para recorrerlos con el for each en el tpl */


$array_size = count($auxcodigo);

for($i=0; $i<$array_size; $i++ )
{
$ultimot=$auxcodigo[$i];
$ut=mysql_query("SELECT * FROM trabajo WHERE  fk_idmaquina LIKE '%$ultimot%' AND tipo_trabajo='emarco' ORDER BY `trabajo`.`fecha_de_trabajo` ASC
");
while($ultimotrabajo=mysql_fetch_array($ut))
{
   	$maquinasg[$i]=$ultimotrabajo[5];
}
    $trabajos[$i]=$maquinasg[$i];
}
/*DESCARGAMOS LA FECHA DE LA BASE DE DATOS */

$cambiof=mysql_query("SELECT * FROM mantenimiento WHERE  fk_idmaquina LIKE '%$fila[0]%'");
$fechax=mysql_fetch_array($cambiof);

$fechax[1];
$codm[]=$fechax[3];
$fbd = explode ("-", $fechax[1]);
$ano = $fbd[0];
$mes = $fbd[1]; 
$dia = $fbd[2]; 

/*Aqui tomo la fecha de hoy*/      
date_default_timezone_set('America/bogota');  
date ( "Y:n:j" , $fecha );
$hoy=date ( "Y" ).' -'.date ( "n" ).' - '.date ( "j" );
$fh = explode ("-", $hoy);

$anoh = $fh[0];
$mesh = $fh[1];
$diah = $fh[2];


//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes,$dia,$ano);
$timestamp2 = mktime(4,12,0,$mesh,$diah,$anoh);

//resto a una fecha la otra
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24)+1;

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);

if($fila[1]=="Volco"){
if($dias_diferencia<=2){
$respuesta1[]="maquinas_con_cambio_aceite";
}
else{
$respuesta1[]= "maquinas_sin_cambio_aceite";	
}
}
else{
if($fechax[2]<=5){	
$respuesta1[]="maquinas_con_cambio_aceite";	
}
else{
$respuesta1[]="maquinas_sin_cambio_aceite";		
}
}
}


global $template; /* Variable global para enviar mensajes al tpl deseado */ 	

/*CUENTAS OPERADOR*/
$cont=0;
$k=0;
$operador=mysql_query("SELECT * FROM  trabajo_operador WHERE estadodepago='pendiente' ");
while($operadordeuda=mysql_fetch_array($operador))
{
$cont=$cont+$operadordeuda['valor'];
$k++;	
}
/*______________________________________________________________________ */

/*CUENTAS PROVEEDOR*/
$aux=0;
$i=0;
$aux2=0;
$j=0;
$consulta=mysql_query("SELECT * FROM  factura_compra WHERE estado='pendiente' ");
while($proveedorco=mysql_fetch_array($consulta))
{
 $aux=$aux+$proveedorco['valor_combustible'];
$i++;
}
 
$consultalu=mysql_query("SELECT * FROM  factura_lubricante WHERE estado='pendiente'");
while($proveedorlu=mysql_fetch_array($consultalu))
{
	$aux2=$aux2+$proveedorlu['precio'];
    $j++;
}

$K=0;
$cuentas=mysql_query("SELECT * FROM  cuentas_de_cobro WHERE estado='pendiente'");
while($cuentaspago=mysql_fetch_array($cuentas))
{
	$aux3=$aux3+$cuentaspago['valor_pendiente'];
    $k++;
}

   $gastoproveedor=$aux+$aux2;
   $template->assign('gastocuentacobro',$aux3);
   $template->assign('gastooperador',$cont);
   $template->assign('gastoproveedor',$gastoproveedor);
   $template->assign('respuesta',$respuesta1);
   $template->display('inicio.tpl'); /* Se mostrará por pantalla en loging .tpl */	
}

/*_____________________________________________ */

/*<!-- FUNCIONES DE CONTROL DE MAQUINARIA  -->*/			

//---->Menú Máquina

function menumaquinaria(){
global $template; /* Variable global para enviar mensajes al tpl deseado */
$maquinas=mysql_query('SELECT * FROM maquinas ORDER BY `idmaquina`  '); /* Consulta a la tabla maquinas oredenadas por el nombre*/

while($fila=mysql_fetch_array($maquinas)) /* Conjunto de maquinas consultadas dentro de un array */
{

$auxmaquina[]=$fila[1]; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */
$auxcodigo[]=$fila[0];  /*Insertamos los valores de código de maquina para recorrerlos con el for each en el tpl */


$array_size = count($auxcodigo);

for($i=0; $i<$array_size; $i++ ){
$ultimot=$auxcodigo[$i];
$ut=mysql_query("SELECT * FROM trabajo WHERE  fk_idmaquina LIKE '%$ultimot%' AND tipo_trabajo='emarco' ORDER BY `trabajo`.`fecha_de_trabajo` ASC
");
while($ultimotrabajo=mysql_fetch_array($ut))
{
   	$maquinasg[$i]=$ultimotrabajo[5];
}
    $trabajos[$i]=$maquinasg[$i];
}
/*DESCARGAMOS LA FECHA DE LA BASE DE DATOS */

$cambiof=mysql_query("SELECT * FROM mantenimiento WHERE  fk_idmaquina LIKE '%$fila[0]%'");
$fechax=mysql_fetch_array($cambiof);

$fechax[1];
$codm[]=$fechax[3];
$fbd = explode ("-", $fechax[1]);
$ano = $fbd[0];
$mes = $fbd[1]; 
$dia = $fbd[2]; 
/*Aqui tomo la fecha de hoy*/      
date_default_timezone_set('America/bogota');  
date ( "Y:n:j" , $fecha );
$hoy=date ( "Y" ).' -'.date ( "n" ).' - '.date ( "j" );
$fh = explode ("-", $hoy);

$anoh = $fh[0];
$mesh = $fh[1];
$diah = $fh[2];


//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes,$dia,$ano);
$timestamp2 = mktime(4,12,0,$mesh,$diah,$anoh);

//resto a una fecha la otra
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24)+1;

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);

if($fila[1]=="Volco"){
if($dias_diferencia<=2){
$respuesta1[]="<div id='block_1' class='barlittle'></div>";
}
else{
$respuesta1[]= "<img src='/emarcosas/templates/img/oil-icon-amarillolleno.png' height='22' width='22'/> ";	
}
}
else{
if($fechax[2]<=5){	
$respuesta1[]="<div id='block_1' class='barlittle'></div>";	
}
else{
$respuesta1[]= "<img src='/emarcosas/templates/img/oil-icon-amarillolleno.png' height='22' width='22'/> ";		
}
}
}

/*________________________________________________________*/

$template->assign('maquinas', $auxmaquina); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('codigomaquinas', $auxcodigo); /* Asignamos los valores de código de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('respuesta1',$respuesta1);
$template->assign('codm',$codm);
$template->assign('trabajos',$trabajos);
$template->display('controlmaquinaria.tpl'); /* Se imprimirá por pantalla en inicio.tpl */
}

function eliminarmaquina($id){
global $template; /* Variable global para enviar mensajes al tpl deseado */
$eliminarmaq =("DELETE FROM `emarcosas`.`maquinas` WHERE `maquinas`.`idmaquina` ='$id'");
$this->realizarOperacion($eliminarmaq);
$template->assign('eliminamaq','Usted Eliminó una máquina');
$template->display('eliminarmaquina.tpl'); /* Se imprimirá por pantalla en inicio.tpl */	 
	
}
/*__________________________________________________________________FIN DEL MENÚ MÁQUINA */
/*FUNCION MANTENIMIENTO  */

function mantenimientomq()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */
$consultam=mysql_query("SELECT * FROM mantenimiento ");
while($maquinafila=mysql_fetch_array($consultam))
{
$maquinas[]=$maquinafila[3];
$consultanm=mysql_query("SELECT * FROM maquinas WHERE idmaquina LIKE '%$maquinafila[3]%' ");
while($maquinafilax=mysql_fetch_array($consultanm))
{
$nombremaquinas[]=$maquinafilax[1];

$trabajos=mysql_query("SELECT * FROM mantenimiento  WHERE fk_idmaquina LIKE '%$maquinafilax[0]%'  ");
$fechax=mysql_fetch_array($trabajos);
	
$fechax[1];
$fbd = explode ("-", $fechax[1]);
$ano = $fbd[0];
$mes = $fbd[1]; 
$dia = $fbd[2]; 

/*Aqui tomo la fecha de hoy*/      
date_default_timezone_set('America/bogota');  
date ( "Y:n:j" , $fecha );
$hoy=date ( "Y" ).' -'.date ( "n" ).' - '.date ( "j" );
$fh = explode ("-", $hoy);

$anoh = $fh[0];
$mesh = $fh[1];
$diah = $fh[2];


//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes,$dia,$ano);
$timestamp2 = mktime(4,12,0,$mesh,$diah,$anoh);

//resto a una fecha la otra
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24)+1;

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);
if($maquinafilax[1]=='Volco'){
if($dias_diferencia<=2){
$respuesta[]="Cambio de aceite inmediato";	
}
else{
$respuesta[]= "Faltan ".$dias_diferencia." dias para el cambio de aceite ";	
}
}
else
{
if($fechax[2]<=2){
$respuesta[]="Cambio de aceite inmediato";	
}
else
{
$respuesta[]=" Faltan ".$fechax[2]." hora/s para el cambio de aceite";		
}
}
}
}
$template->assign('nombremaquinas',$nombremaquinas);
$template->assign('maquina',$maquinas);
$template->assign('respuesta',$respuesta);
$template->display('mantenimiento.tpl');
}
function cambioaceite($codigomaq,$resultado,$codigomaq2,$resultado2)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
$recorrido = count($codigomaq);
for($i=1; $i<=$recorrido; $i++){

if($resultado[$i]!=""){
	
$actualizarm=mysql_query("SELECT * FROM mantenimiento  WHERE fk_idmaquina LIKE '%$codigomaq[$i]%'");
while($result=mysql_fetch_array($actualizarm))
{
$registrom = "UPDATE mantenimiento  SET fecha_mantenimiento='$resultado[$i]'WHERE fk_idmaquina LIKE '%$codigomaq[$i]%' ";
$extra= mysql_query($registrom); 
}
}
}
/*______________________________________________________________________FIN DE ACTUALIZACION FECHA */

$recorrido2 = count($codigomaq2);
for($j=0; $j<=$recorrido2; $j++){

if($resultado2[$j]!=""){

$actualizarm2=mysql_query("SELECT * FROM mantenimiento  WHERE fk_idmaquina LIKE '%$codigomaq2[$j]%'");
while($result2=mysql_fetch_array($actualizarm2))
{
$registrom2 = "UPDATE mantenimiento  SET contador_hora='$resultado2[$j]' WHERE fk_idmaquina LIKE '%$codigomaq2[$j]%' ";
$extra2= mysql_query($registrom2); 
$aux2=$aux2+1;
}
}
}
$template->assign('mensaje','Operación Exitosa');	
$template->display('mensajemantenimiento.tpl');
}
/*______________________________________________________________________FIN DE ACTUALIZACION HORA */

/*__________________________________________________________________FIN DE FUNCION MANTENIMIENTO */
//---->Agregar Máquina
function selectmaquina(){
global $template; /* Variable global para enviar mensajes al tpl deseado */
$template->display('agregar_maquina.html'); /* Formulario de ingreso de la nueva maquina */
}

/*__________________________________________________________________FIN DE AGREGAR MÁQUINA */	

//1---->Agregar Máquina 2----> Mantenimiento No Volcos
function agregarmaquinanv($idmaquina,$tipomaquina,$contador){
global $template; /* Variable global para enviar mensajes al tpl deseado */

$maquinas = "INSERT INTO maquinas (	idmaquina, tipodemaquina) values ('$idmaquina', '$tipomaquina')";
       $this->realizarOperacion($maquinas);
$mantenimiento = "INSERT INTO mantenimiento (idmantenimiento,fecha_mantenimiento,contador_hora,fk_idmaquina) values ('','','$contador','$idmaquina')";
       $this->realizarOperacion($mantenimiento);  
$template->assign('mensaje','Maquina Agregada Correctamente');
$template->display('agregar_maquina.html'); /* Formulario de ingreso de la nueva maquina */

}

function agregarmaquinav($idmaquina,$tipomaquina,$fecha){
global $template; /* Variable global para enviar mensajes al tpl deseado */

$maquinas = "INSERT INTO maquinas (	idmaquina, tipodemaquina) values ('$idmaquina', '$tipomaquina')";
       $this->realizarOperacion($maquinas);
$mantenimiento = "INSERT INTO mantenimiento (idmantenimiento,fecha_mantenimiento,contador_hora,fk_idmaquina) values ('','$fecha','','$idmaquina')";
       $this->realizarOperacion($mantenimiento); 
	   
	   
$template->assign('mensaje','Maquina Agregada Correctamente');
$template->display('agregar_maquina.html'); /* Formulario de ingreso de la nueva maquina */

}

/*__________________________________________________________________FIN DE AGREGAR MÁQUINA CON MANTENIMIENTO*/

//-----> CREAMOS EL EVENTO

function agregarevento($idm,$tipo)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */
$template->assign('idm',$idm);
$template->assign('tipo',$tipo);
$template->display('agregarevento.tpl'); /* Formulario de ingreso deL evento*/	
}
/*__________________________________________________________________FIN  */

//-----> GUARDAR EL EVENTO
function guardarevento($idm,$lugar,$fecha,$tipo)
{	
global $template; /* Variable global para enviar mensajes al tpl deseado */
$evento = "INSERT INTO evento (lugar,cuenta,fk_idmaquina,fecha,tipo_evento) values ('$lugar','nogenerada','$idm','$fecha','$tipo')";
       $this->realizarOperacion($evento);

$consulta=mysql_query("SELECT * FROM maquinas WHERE idmaquina='$idm'");
while($respuestas=mysql_fetch_array($consulta))
{
$nombremaq=$respuestas['1'];	
}
	
	 
	  
	 $template->assign('nombremaq',$nombremaq); 	  
	 $template->assign('idm',$idm); 
	 $template->assign('tipo',$tipo); 
	 $template->assign('eventoguardado','Usted Ha Agregado Un Nuevo Evento');
	 $template->display('guardarevento.tpl'); /* Formulario de ingreso de la nueva maquina */	   
	   
}
/*__________________________________________________________________FIN GUARDAR EL EVENTO */

//-----> REGISTRO EVENTO

function registroevento($idm,$tipo)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */
if($tipo=='contrato')
{	
$consulta=mysql_query("SELECT * FROM evento WHERE fk_idmaquina='$idm' AND tipo_evento='$tipo'"); 	
$i=0;
$j=0;
while($eventos=mysql_fetch_array($consulta))
{
$ide[]=$eventos['idevento'];
$lugar[]=$eventos['lugar'];
$cuenta[]=$eventos['cuenta'];
$fk_idmaquina[]=$eventos['fk_idmaquina'];
$tipo_evento[]=$eventos['tipo_evento'];

$valida=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide[$i]'");
while($validacuentas=mysql_fetch_array($valida))
{
$ideventos[]=$validacuentas['fk_idevento'];
if($ideventos[$j]==$ide[$i])
{
$generada[]=1;
}
else
{
$generada[]=0;	
}
$j++;
}

$trabajoevento=mysql_query("SELECT * FROM trabajo WHERE  fk_id_evento='$ide[$i]'");
while($trabajoc=mysql_fetch_array($trabajoevento))
{

$aux[$i]=$trabajoc['ingresos'];
$gas[$i]=$trabajoc['gastos'];
$ingresos[$i]=$ingresos[$i]+$aux[$i];
$gastos[$i]=$gastos[$i]+$gas[$i];
$ganancias[$i]=$ingresos[$i]-$gastos[$i];
}
$i++;
}
$consulta2=mysql_query("SELECT * FROM maquinas WHERE idmaquina='$idm'"); 	
while($maquina=mysql_fetch_array($consulta2))
{
$nombremaquina=$maquina['tipodemaquina'];
}
}
else
{
$consulta=mysql_query("SELECT * FROM evento WHERE fk_idmaquina='$idm' AND tipo_evento='emarco'"); 	
$i=0;
$j=0;
while($eventos=mysql_fetch_array($consulta))
{
$ide[]=$eventos['idevento'];
$lugar[]=$eventos['lugar'];
$cuenta[]=$eventos['cuenta'];
$fk_idmaquina[]=$eventos['fk_idmaquina'];
$tipo_evento[]=$eventos['tipo_evento'];


$valida=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide[$i]'");
while($validacuentas=mysql_fetch_array($valida))
{
$ideventos[]=$validacuentas['fk_idevento'];
if($ideventos[$j]==$ide[$i])
{
$generada[]=1;
}
else
{
$generada[]=0;	
}
$j++;
}


$trabajoevento=mysql_query("SELECT * FROM trabajo WHERE  fk_id_evento='$ide[$i]'");
while($trabajoc=mysql_fetch_array($trabajoevento))
{

$aux[$i]=$trabajoc['ingresos'];
$gas[$i]=$trabajoc['gastos'];
$ingresos[$i]=$ingresos[$i]+$aux[$i];
$gastos[$i]=$gastos[$i]+$gas[$i];
$ganancias[$i]=$ingresos[$i]-$gastos[$i];
}

$cuentacobro=mysql_query("SELECT * FROM  cuentas_de_cobro WHERE  fk_idevento='$ide[$i]'");
while($idcuentacobro=mysql_fetch_array($cuentacobro))
{
$id_cuenta_cobro[]=$idcuentacobro['idcuentacobro'];
}



$i++;
}
$consulta2=mysql_query("SELECT * FROM maquinas WHERE idmaquina='$idm'"); 	
while($maquina=mysql_fetch_array($consulta2))
{
$nombremaquina=$maquina['tipodemaquina'];
}
	
}


$template->assign('idm',$idm);
$template->assign('nm',$nombremaquina);
$template->assign('ide',$ide);
$template->assign('idet',$idet);
$template->assign('lugar',$lugar);
$template->assign('ingresos',$ingresos);
$template->assign('gastos',$gastos);
$template->assign('ganancias',$ganancias);
$template->assign('cuenta',$cuenta);
$template->assign('fk_idmaquina',$fk_idmaquina);
$template->assign('tipo_evento',$tipo_evento);
$template->assign('tipot',$tipo);
//Tipo de evento si es contrato o emarco
$template->assign('tipo_evento',$tipo);
$template->assign('id_cuenta_cobro',$id_cuenta_cobro);

$template->assign('generada',$generada);
$template->display('registroevento.tpl'); /* Formulario de ingreso de la nueva maquina */

}

function eliminarevento($ide,$id,$tipo)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminaevento =("DELETE FROM evento WHERE  idevento='$ide'");
     $this->realizarOperacion($eliminaevento);
	
$consulta=mysql_query("SELECT * FROM maquinas WHERE idmaquina='$id'");
while($respuestas=mysql_fetch_array($consulta))
{
$nombremaq=$respuestas['1'];	
}
	
	 $template->assign('idm',$id); 
	  $template->assign('nombremaq',$nombremaq); 
	 $template->assign('tipo',$tipo); 
	 $template->assign('mensajeevento','Usted Ha Eliminado Un Evento');
	 $template->display('eliminarevento.tpl'); /* Formulario de ingreso de la nueva maquina */
}
/*__________________________________________________________________REGISTRO EVENTO */
//1---->CREAMOS FORMULARIO DE REGISTRO DE TRABAJO

function registrotrabajo($id,$ide,$tipot){
global $template; /* Variable global para enviar mensajes al tpl deseado */

$trabajomaquina= mysql_query("SELECT * FROM maquinas where idmaquina  = '$id' ",$this->cn);

while($fila=mysql_fetch_array($trabajomaquina)) /* Conjunto de maquinas consultadas dentro de un array */
{

$maquinaid=$fila[0]; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */
$maquinatipo=$fila[1];   

}

$proveedor1="si";
$proveedor_co=mysql_query("SELECT * FROM proveedor where combustible = '$proveedor1' ",$this->cn); /* Consulta a la tabla maquinas oredenadas por el nombre*/

$proveedor2="si";
$proveedor_lu=mysql_query("SELECT * FROM proveedor where lubricante = '$proveedor2' ",$this->cn); /* Consulta a la tabla maquinas oredenadas por el nombre*/


$operador=mysql_query("SELECT * FROM operador  ",$this->cn); /* Consulta a la tabla maquinas oredenadas por el nombre*/

while($fila=mysql_fetch_array($proveedor_co)) /* Conjunto de maquinas consultadas dentro de un array */
{

$combustiblepro[]=$fila[3]; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */
$idcombustible[]=$fila[0];   

}

while($fila=mysql_fetch_array($proveedor_lu)) /* Conjunto de maquinas consultadas dentro de un array */
{

$lubricantepro[]=$fila[3]; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */
$idlubricante[]=$fila[0];

}

while($fila=mysql_fetch_array($operador)) /* Conjunto de maquinas consultadas dentro de un array */
{

$operadores[]=$fila['nombre'].' '.$fila['apellido']; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */
$idoperadores[]=$fila[0]; /*Insertamos los valores de tipo de maquina para recorrerlos con el for each en el tpl */

}


	/*Mostrar Aceite */
$hca=mysql_query("SELECT * FROM mantenimiento WHERE fk_idmaquina='$maquinaid' ");
while($maquina=mysql_fetch_array($hca)) /* Conjunto de maquinas consultadas dentro de un array */
{
  
$tm=mysql_query("SELECT * FROM maquinas WHERE idmaquina='$maquina[3]' ");
while($tipom=mysql_fetch_array($tm)) /* Conjunto de maquinas consultadas dentro de un array */	
if($tipom[1]=="Volco"){		
$maquina[1];
$fbd = explode ("-", $maquina[1]);
$ano = $fbd[0];
$mes = $fbd[1]; 
$dia = $fbd[2]; 

/*Aqui tomo la fecha de hoy*/      
date_default_timezone_set('America/bogota');  
date ( "Y:n:j" , $fecha );
$hoy=date ( "Y" ).' -'.date ( "n" ).' - '.date ( "j" );
$fh = explode ("-", $hoy);

$anoh = $fh[0];
$mesh = $fh[1];
$diah = $fh[2];


//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes,$dia,$ano);
$timestamp2 = mktime(4,12,0,$mesh,$diah,$anoh);

//resto a una fecha la otra
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24)+1;

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);
if($dias_diferencia<=1){
$respuesta[]="Cambio de aceite inmediato";	
}
else{
$respuesta[]= "  Faltan ".$dias_diferencia." dias para el cambio de aceite ";	
}
}
else
{	
if($maquina[2]<=1){
$respuesta[]="Cambio de aceite inmediato";	
}
else
{
$respuesta[]="  Faltan ".$maquina[2]." hora/s para el cambio de aceite ";		
}
}
}


$template->assign('idmaquina', $maquinaid); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('maquinatipo', $maquinatipo); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('procombustible', $combustiblepro); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('idcombustible', $idcombustible);
$template->assign('prolubricante', $lubricantepro); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('idlubricante', $idlubricante);
$template->assign('operadores', $operadores); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('idoperadores', $idoperadores); /* Asignamos los valores de tipo de máquina que queremos mostrar al tpl controlmaquinaria.tpl */
$template->assign('respuesta',$respuesta);
$template->assign('ide',$ide);
$template->assign('tipot',$tipot);
$template->display('trabajo.tpl'); /* Se imprimirá por pantalla en loging .tpl */

}
	
/*__________________________________________________________________FIN DE CONSTRUNCCIÓN DE FORMULARIO*/

//----> FUNCION PARA AGREGAR EL TRABAJO, GENERA FACTURAS, PAGO OPERADOR, Y EL LUGAR DEL TRABAJO REALIZADO <----\\

function agregartrabajo ($fecha,$cantidad,$valor,$tipo_trabajo,$lugar_trabajo,$codigomaquina,$idoperador,$proveedor_co,$proveedor_lu,$valorop,$formadepago,$valor_co,$vgalones,$ingtotales,$gastotales,$factura,$idevento) /*<-I->*/
 {
   

  
	/* (1) ASIGNAMOS EL NUEVO TRABAJO*/
	    global $template; /* Variable global para enviar mensajes al tpl deseado */
       $asignar_trabajo = "INSERT INTO trabajo (idtrabajo, fecha_de_trabajo,cantidad,valor,tipo_trabajo,fk_lugar,fk_idmaquina,fk_idoperador,fk_idproveedor_CO,fk_idproveedor_LU,ingresos,gastos,cuenta,fk_id_evento) values ('', '$fecha','$cantidad','$valor','$tipo_trabajo','$lugar_trabajo','$codigomaquina','$idoperador','$proveedor_co','$proveedor_lu','$ingtotales','$gastotales','nogenerada','$idevento')";
	   /* Guardo el Trabajo */
	    $this->realizarOperacion($asignar_trabajo); 
/*____________________________________________________FIN GUARDAR TRABAJO (1) */

/*Registramos el evento */
     
	 $consultaevento=mysql_query("SELECT * FROM evento WHERE idevento='$idevento'");
	 while($resultado=mysql_fetch_array($consultaevento))
	 {
	  	 $ingresosbd=$resultado['ingresos'];
		 $gastosbd=$resultado['gastos'];
	 }
	 
	 $ingt=$ingresosbd+$ingtotales;
	 $gast=$gastosbd+$gastotales;
	 $revento = "UPDATE evento  SET ingresos='$ingt',gastos='$gast' WHERE idevento='$idevento'";	
	 $evento= mysql_query($revento);


/*____________________________________________________FIN DE REGISTRO EVENTO */
	
/*DESCONTAMOS EL GALON QUE SE USÓ */
	
$facturalu=mysql_query("SELECT * FROM factura_lubricante WHERE idfactura_lubricante='$factura'");
	while($flu=mysql_fetch_array($facturalu))
	 {
			
			$nfactura=$flu[0];
			$gastolu=$flu[4]-$vgalones;
			
			if($gastolu<=0){
			$extraccionlu = "UPDATE factura_lubricante  SET galones_restantes='$gastolu',ultimo_registro_galones='$flu[4]',fase='inactiva' WHERE fk_idproveedor='$proveedor_lu' AND   idfactura_lubricante='$nfactura' ";
			$extra= mysql_query($extraccionlu); 
	}
	else
    {
			
	$extraccionlu = "UPDATE factura_lubricante  SET galones_restantes='$gastolu',ultimo_registro_galones='$flu[4]' WHERE fk_idproveedor='$proveedor_lu' AND   idfactura_lubricante='$nfactura' ";	
			$extra= mysql_query($extraccionlu); 	  
	}	  
    }
	
	
		  
		  /*INSERTAMOS LA EXTRACCION DE LUBRICANTE */
		  
		  $extracto=mysql_query("SELECT * FROM extraccion_lubricante");
		while($ext=mysql_fetch_array($extracto))
		  {
			
		   	  $extlu=$ext[0];
			  $trb=$ext[3];
			  
			  $traba=mysql_query("SELECT * FROM  factura_compra WHERE fk_idtrabajo='$trb'" );
		while($trabajoso=mysql_fetch_array($traba))
		  {
		    $trbfactura=$trabajoso[0];
			
		  }
			  
		  }
		  $seleccionarext= "UPDATE extraccion_lubricante  SET fk_factura_lubricante='$factura', 	fk_idfactura_compra ='$trbfactura', galones='$vgalones' WHERE  	idextraccion_lubricante='$extlu'";
	   $ok= mysql_query($seleccionarext);
		  
		  
 /*______________________________________________________________________ */
		  
	/*DESCONTAMOS LAS HORAS DE LAS MAQUINAS QUE NO SEAN VOLCOS  */
	
    
    $hm=mysql_query("SELECT * FROM mantenimiento WHERE fk_idmaquina='$codigomaquina'");
		while($hmantenimiento=mysql_fetch_array($hm))
		  {
			  
	     if($hmantenimiento[2]!='Volco'){
	      $vb=$hmantenimiento[2];
	      $horamaquina=$vb-$cantidad;
	      $restahora = "UPDATE mantenimiento  SET contador_hora='$horamaquina' WHERE      fk_idmaquina='$codigomaquina'";	
		$restamos= mysql_query($restahora);
	}
    }
			  
/*__________________________________*/

/* (2) REGISTRAMOS LOS VALORES DEl LUGAR */
       	  
	    $resultadosl=mysql_query("SELECT * FROM lugar  ");
		while($filal=mysql_fetch_array($resultadosl))
       {
		   
		   $url=$filal[0];
		   
	   }
	
		
       $seleccionarlu = "UPDATE lugar  SET lugar='$lugar_trabajo' WHERE idlugar='$url'";
	   $resultl = mysql_query($seleccionarlu);
	
	/*____________________________________________________FIN REGISTRO DE VALORES LUGAR */
	
	/* (3) REGISTRAMOS LOS VALORES DEL OPERADOR  */
       
	  
	    $resultados=mysql_query("SELECT * FROM trabajo_operador  ");
		while($fila=mysql_fetch_array($resultados))
       {
		   
		   $ur=$fila[0];
		   
	   }
	
       $seleccionarop = "UPDATE trabajo_operador  SET valor='$valorop', fecha='$fecha',estadodepago='pendiente',fk_idoperador='$idoperador' WHERE 	idtrabajo_operador='$ur'";
	   $result = mysql_query($seleccionarop);
	
	/*____________________________________________________FIN 3 */
	
	/* (4) CREACION DE NUEVAS FACTURA DE COMPRAS */
	
	   //A->Creación Primera Factura Combustible
	   
	   $resultadosfc=mysql_query("SELECT * FROM factura_compra  ");
		while($filafc=mysql_fetch_array($resultadosfc))
       {
		   
		   $urfc=$filafc[0];
		  $urfcm=$urfc-1;
		   
	   }
	
		
       if($formadepago=="contado"){
       $seleccionarfc = "UPDATE factura_compra  SET forma_de_pago_combustible='contado', valor_combustible='$valor_co',volumen_lubricante='0',tipo='combustible', estado='pagado' ,fk_id_proveedor='$proveedor_co'  WHERE  idfactura_compra='$urfcm'  ";
	   $result = mysql_query($seleccionarfc);
	   }
	   else
	   {
		
	   $seleccionarfc = "UPDATE factura_compra  SET forma_de_pago_combustible='credito', valor_combustible='$valor_co',volumen_lubricante='0',tipo='combustible', estado='pendiente' ,fk_id_proveedor='$proveedor_co'  WHERE  idfactura_compra='$urfcm'  ";
	   $result = mysql_query($seleccionarfc);
		   
	   }
	   
		  
	  //B->Creación Segunda Factura  Lubricante
	  
	  
       $seleccionarfc = "UPDATE factura_compra  SET forma_de_pago_combustible='0', valor_combustible='0',volumen_lubricante='$vgalones',tipo='lubricante', estado='pagado' ,fk_id_proveedor='$proveedor_lu'  WHERE  idfactura_compra='$urfc'  ";
	   $result = mysql_query($seleccionarfc);
	   
	/*____________________________________________________FIN 4 */
	
	/*__________________________________________________________ */	
       // Enviamos al trabajo.tpl el mensaje de guardado
        	
	  $template->assign('idmaquina',$codigomaquina);
	  $template->assign('tipot',$tipo_trabajo);
	  $template->assign('idevento',$idevento); 	
       $template->assign('mensaje','Trabajo Agregado Correctamente');
       $template->display('mensajeguardartrabajo.tpl'); /* Formulario de ingreso de la nueva maquina */	
	/*____________________________________________________FIN 6 */
	
    }
	
/*_________________________________________________________________FIN DE GUARDAR TRABAJO/*/

//----> REGISTRO DE TRABAJO <----\\

//(1)-->CONSULTAR MAQUINA
 function registrodemaquina($id,$ide,$tipot)
 {
  global $template; /* Variable global para enviar mensajes al tpl deseado */
  
  $consultaevento=mysql_query("SELECT * FROM evento where idevento='$ide' ",$this->cn);
   while($cevento=mysql_fetch_array($consultaevento))
    {
 	   $lugarevento=$cevento['lugar'];
	 
    } // Fin del While
  
  $consultamaquina=mysql_query("SELECT * FROM maquinas where idmaquina='$id' ",$this->cn); // consulta a la tabla maquinas
  while($fila=mysql_fetch_array($consultamaquina))
    {
 	   $tipomaquina=$fila[1];
	 
    } // Fin del While

   $consultatrabajo=mysql_query("SELECT * FROM calculos_ingresos where fk_idmaquina='$id' AND fk_idevento='$ide' ORDER BY `fk_fecha_trabajo` DESC  ",$this->cn); // consulta a la tabla maquinas
   $i=0;
   while($fila2=mysql_fetch_array($consultatrabajo))
    { 	
  	   
	  $idtrabajo[]=$fila2[7];
	  $ntrabajo[]=$fila2[1];
	  $fechatrabajo[]=$fila2[2];
	  $ingresos[]=$fila2[3];
      $gastos[]=$fila2[4];
	  $cuenta[]=$fila2[8];
	  $ganancias[]=$ingresos[$i]-$gastos[$i];
	   $i=$i+1;
    }
	
	 $template->assign('idmaquina',$id);
	 $template->assign('ide',$ide);
	 $template->assign('lugar',$lugarevento);	
     $template->assign('maquinas',$tipomaquina);
	 $template->assign('nombretrabajo',$ntrabajo);
	 $template->assign('fecha',$fechatrabajo);
	 $template->assign('ingresos',$ingresos);
	 $template->assign('gastos',$gastos);
	 $template->assign('ganancias',$ganancias);
	 $template->assign('idtrabajo',$idtrabajo);
	 $template->assign('cuenta',$cuenta);
	 $template->assign('tipot',$tipot);
     $template->display('registromaquina.tpl'); /* Formulario de ingreso de la nueva maquina */	 
	 
  }//Fin de la funcion
  
  /* MODIFICAR REGISTRO DE TRABAJO*/
  
  function modificarr($idtrabajo,$idmaquina,$tipot)
     {
	  
	   global $template; /* Variable global para enviar mensajes al tpl deseado */
	   
	   $tipomaquina=mysql_query("SELECT * FROM maquinas where idmaquina='$idmaquina' ",$this->cn); // consulta a la tabla maquinas
   
        while($fila=mysql_fetch_array($tipomaquina)){
			
			$maquina=$fila[1];
			
		}
		
		$proveedor=mysql_query("SELECT * FROM proveedor WHERE   combustible='si' ",$this->cn); // consulta a la tabla proveedor combustible
   
        while($filapc=mysql_fetch_array($proveedor)){
			
			$proveedorco[]=$filapc[3];
			$idcombustible[]=$filapc[0];
		}
		
		$valorcombustible=mysql_query("SELECT * FROM factura_compra WHERE  fk_idtrabajo='$idtrabajo' AND tipo='combustible' ",$this->cn); // consulta a la tabla proveedor combustible
   
        while($valorco=mysql_fetch_array($valorcombustible)){
			
			$valor_co=$valorco[2];
			$forma_pago=$valorco[1];
			$codigoproveedor=$valorco[6];
			
		}
		
		
		$valorlubricante=mysql_query("SELECT * FROM factura_compra WHERE  fk_idtrabajo='$idtrabajo' AND tipo='lubricante' ",$this->cn); // consulta a la tabla proveedor combustible
   
        while($valorlu=mysql_fetch_array($valorlubricante)){
			
			$valor_lu=$valorlu[3];
			$codigoproveedorlu=$valorlu[6];
			
		}
		
		$nombre_proveedor=mysql_query("SELECT * FROM proveedor WHERE  idproveedor='$codigoproveedor' ",$this->cn); // consulta a la tabla proveedor combustible
   
        while($nombrepc=mysql_fetch_array($nombre_proveedor)){
			
			$codigop_co=$nombrepc[0];
			$nombrep_co=$nombrepc[3];
    
		}
		
		$nombre_proveedorlu=mysql_query("SELECT * FROM proveedor WHERE  idproveedor='$codigoproveedorlu' ",$this->cn); // consulta a la tabla proveedor combustible
   
        while($nombrepl=mysql_fetch_array($nombre_proveedorlu)){
			
			$codigop_lu=$nombrepl[0];
			$nombrep_lu=$nombrepl[3];
    
		}
		
		$proveedor2=mysql_query("SELECT * FROM proveedor WHERE lubricante='si' ",$this->cn); // consulta a la tabla proveedor lubricante
   
        while($filapl=mysql_fetch_array($proveedor2)){
			
			$idlubricante[]=$filapl[0];
			$proveedorlu[]=$filapl[3];
			
		}
		
		$operador=mysql_query("SELECT * FROM operador  ",$this->cn); // consulta a la tabla operador
   
        while($filaop=mysql_fetch_array($operador)){
			
			$operadores[]=$filaop[1];
			$idoperadores[]=$filaop[0];
		}
		
		
	  
	    $trabajo=mysql_query("SELECT * FROM trabajo where idtrabajo='$idtrabajo' ",$this->cn); // consulta a la tabla operador
   
        while($filat=mysql_fetch_array($trabajo)){
			
			
			$valoruso=$filat[3];
			$operador=$filat[7];
		
		}
	  
	     $noperador=mysql_query("SELECT * FROM operador where 	idoperador='$operador' ",$this->cn); // consulta a la tabla operador
   
        while($filaop=mysql_fetch_array($noperador)){
			
			
			$fop=$filaop[1];
			
		}
		
		   $trabajoop=mysql_query("SELECT * FROM trabajo_operador where fk_idoperador='$operador' ",$this->cn); // consulta a la tabla operador
   
        while($filatop=mysql_fetch_array($trabajoop)){
			
			
			$ftop=$filatop[1];
			
		
		}
	  
	   $consultatrabajo=mysql_query("SELECT * FROM calculos_ingresos where fk_id_trabajo='$idtrabajo' ",$this->cn); // consulta a la tabla  calculo ingreso(Registro)
   
        while($fila2=mysql_fetch_array($consultatrabajo))
		
         { 
	   
	      $codigomaquina=$fila2[6]; 
	      $lugartrabajo=$fila2[1]; 
		  $fechatrabajo=$fila2[2];
		  $cantidaduso=$fila2[5];
		  $ingtotales=$fila2[3];
		  $gastotales=$fila2[4];
		  $gantotales=$ingtotales-$gastotales;
		   
		 }
		 
		  $factura=mysql_query("SELECT * FROM extraccion_lubricante where fk_idtrabajo='$idtrabajo' ",$this->cn); // consulta a la tabla  calculo ingreso(Registro)
   
        while($fc=mysql_fetch_array($factura))
		
         { 
	     $facturax=$fc[2];	    
		 }
		 		 
	      $template->assign('idtrabajo',$idtrabajo);
		  $template->assign('codigomaquina',$codigomaquina);
		  $template->assign('tipomaquina',$maquina);
	      $template->assign('lugartrabajo',$lugartrabajo);
		  $template->assign('fechatrabajo',$fechatrabajo);
		  $template->assign('proveedorco',$proveedorco);
		  $template->assign('idcombustible',$idcombustible);
		  $template->assign('idcombustible',$idcombustible);
		  $template->assign('forma_pago',$forma_pago);
		  $template->assign('proveedorlu',$proveedorlu);
		  $template->assign('idlubricante',$idlubricante);
		  $template->assign('operadores',$operadores);
		  $template->assign('idoperadores',$idoperadores);
		  $template->assign('cantidaduso',$cantidaduso);
		  $template->assign('valoruso',$valoruso);
		  $template->assign('ingtotales',$ingtotales);
		  $template->assign('gastotales',$gastotales);
		   $template->assign('gantotales',$gantotales);
		  $template->assign('valor_co',$valor_co);
		  $template->assign('codigop_co',$codigop_co);
		  $template->assign('nombrep_lu',$nombrep_lu);
		  $template->assign('codigop_lu',$codigop_lu);
		  $template->assign('valor_co',$valor_co);
		  $template->assign('valor_lu',$valor_lu);
		  $template->assign('nombrepc',$nombrep_co);
		  $template->assign('operador',$fop);
		  $template->assign('pagooperador',$ftop);
		  $template->assign('factura',$facturax);
		  $template->assign('tipot',$tipot);
	      $template->display('modificatrabajo.tpl'); /* Se envia a modificartrabajo.tpl*/	
	  
     }
	 
	//----->MODIFICAR TRABAJO
	
	function nuevosdatos($trabajo,$fecha,$cantidad,$valor,$tipo_trabajo,$lugar_trabajo,$codigomaquina,$idoperador,$proveedor_co,$proveedor_lu,$valorop,$formadepago,$valor_co,$vgalones,$ingtotales,$gastotales,$factura) /*<-I->*/
	 {
	  
	    /* (1) MODIFICAMOS EL TRABAJO*/
	    global $template; /* Variable global para enviar mensajes al tpl deseado */
		
       $asignar_trabajo = "UPDATE trabajo  SET fk_lugar='$lugar_trabajo',cantidad='$cantidad',valor='$valor',fecha_de_trabajo='$fecha',fk_idoperador='$idoperador',fk_idproveedor_CO='$proveedor_co',fk_idproveedor_LU='$proveedor_lu', ingresos='$ingtotales', gastos='$gastotales'    WHERE 	idtrabajo='$trabajo'";
	   /* Guardo el Trabajo */
	    $this->realizarOperacion($asignar_trabajo); 
		
		$asignar_trabajo = "UPDATE calculos_ingresos SET fk_nombre_trabajo='$lugar_trabajo',fk_fecha_trabajo='$fecha',ingresos_totales='$ingtotales', gastos_totales='$gastotales',cantidaduso='$cantidad'  WHERE 	fk_id_trabajo='$trabajo'";
	   /* Guardo el Trabajo */
	    $this->realizarOperacion($asignar_trabajo); 

	
	
	
	/*____________________________________________________FIN 1 */
	
	/*DESCONTAMOS EL GALON QUE SE USÓ */
	
	
	 $facturalu=mysql_query("SELECT * FROM factura_lubricante WHERE idfactura_lubricante='$factura'");
		while($flu=mysql_fetch_array($facturalu))
		  {
			
			$nfactura=$flu[0];
			$gastolu=$flu[5]-$vgalones;
			
			$extraccionlu = "UPDATE factura_lubricante  SET galones_restantes='$gastolu' WHERE fk_idproveedor='$proveedor_lu' AND   idfactura_lubricante='$nfactura' ";
			$extra= mysql_query($extraccionlu); 
		  }
	
	
	/*__________________________________*/
	
	/*INSERTAMOS LA EXTRACCION DE LUBRICANTE */
		  
		  $extracto=mysql_query("SELECT * FROM extraccion_lubricante");
		while($ext=mysql_fetch_array($extracto))
		  {
			
		   	  $extlu=$ext[0];
			  $trb=$ext[3];
			  
			  $traba=mysql_query("SELECT * FROM  factura_compra WHERE fk_idtrabajo='$trb'" );
		while($trabajoso=mysql_fetch_array($traba))
		  {
		    $trbfactura=$trabajoso[0];
			
		  }
			  
		  }
		  $seleccionarext= "UPDATE extraccion_lubricante  SET fk_factura_lubricante='$factura', 	fk_idfactura_compra ='$trbfactura', galones='$vgalones' WHERE  	idextraccion_lubricante='$extlu'";
	   $ok= mysql_query($seleccionarext);
		  
		  
		  
		  /*______________________________________________________________________ */
	
	
	/*DESCONTAMOS LAS HORAS DE LAS MAQUINAS QUE NO SEAN VOLCOS  */
	
    
    $hm=mysql_query("SELECT * FROM mantenimiento WHERE fk_idmaquina='$codigomaquina'");
		while($hmantenimiento=mysql_fetch_array($hm))
		  {
			  
	     if($hmantenimiento[2]!='Volco'){
	      $vb=$hmantenimiento[2];
	      $horamaquina=$vb-$cantidad;
	      $restahora = "UPDATE mantenimiento  SET contador_hora='$horamaquina' WHERE fk_idmaquina='$codigomaquina'";	
		$restamos= mysql_query($restahora);
	}
    }
	
	
	/* (2) MODIFICAMOS LOS VALORES DE LA TABLA LUGAR */
       
      $seleccionarlu = "UPDATE lugar  SET lugar='$lugar_trabajo' WHERE fk_trabajo='$trabajo'";
	   $resultl = mysql_query($seleccionarlu);
	
	/*____________________________________________________FIN 2 */
	
		
	/* (3) REGISTRAMOS LOS VALORES DEL OPERADOR  */
       
	  
	    $resultados=mysql_query("SELECT * FROM trabajo_operador  ");
		while($fila=mysql_fetch_array($resultados))
       {
		   
		   $ur=$fila[0];
		   
	   }
	
       $seleccionarop = "UPDATE trabajo_operador  SET valor='$valorop', fecha='$fecha',estadodepago='pendiente',fk_idoperador='$idoperador' WHERE 	fk_idtrabajo='$trabajo'";
	   $result = mysql_query($seleccionarop);
	
	/*____________________________________________________FIN 3*/
	
	/* (4) MODIFICACION DE FACTURAS DE COMPRAS */
	
	   //A->ACTUALIZACION Primera Factura Combustible
	   
       if($formadepago=="contado"){
       $seleccionarfc = "UPDATE factura_compra  SET forma_de_pago_combustible='$formadepago',valor_combustible='$valor_co',estado='pagado'  WHERE  fk_idtrabajo='$trabajo' AND tipo='combustible' ";
	   $result = mysql_query($seleccionarfc);
	   }
	   else 
	   {
	   $seleccionarfc = "UPDATE factura_compra  SET forma_de_pago_combustible='$formadepago',valor_combustible='$valor_co', estado='pendiente'  WHERE  fk_idtrabajo='$trabajo' AND tipo='combustible' ";
	   $result = mysql_query($seleccionarfc);   
	   }
	   
	  //B->ACTUALIZACION Segunda Factura  Lubricante
	  
	   $seleccionarfl = "UPDATE factura_compra  SET volumen_lubricante='$vgalones',fk_id_proveedor='$proveedor_lu'  WHERE  fk_idtrabajo='$trabajo' AND tipo='lubricante' ";
	   $result = mysql_query($seleccionarfl);
	   
	   
	/*____________________________________________________FIN 2 */
	
       // Enviamos al trabajo.tpl el mensaje de guardado 	
       $template->assign('mensaje','Sus Datos Se actualizaron correctamente');
       $template->display('modificatrabajo.tpl'); /* Formulario de ingreso de la nueva maquina */	
	/*____________________________________________________FIN 6 */
    }
	
  /*_________________________________________________________________________FIN DE MODIFICAR TRABAJO */
  
  
  /*----> ELIMINAR UNO  O VARIOS REGISTROS DE TRABAJO*/
  
  function eliminarregistro ($idc,$ingresos,$gastos){
	  global $template; /* Variable global para enviar mensajes al tpl deseado */
    
	
	  
	  $eliminar = "DELETE FROM `emarcosas`.`trabajo` WHERE `trabajo`.`idtrabajo` IN (".implode(',',$idc).");";
	  $this->realizarOperacion( $eliminar);
	  $template->assign('eliminarvarios','Usted eliminó uno o varios trabajos');
      $template->display('mensajeeliminartrabajo.tpl'); /* Formulario de ingreso de la nueva maquina */
	
	 
 
  }
  
  /*ELIMINAR UN REGISTRO DE TRABAJO*/
    function eliminarr($idcu,$id,$ide,$tipot){
	global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminau =("DELETE FROM `emarcosas`.`trabajo` WHERE `trabajo`.`idtrabajo` =$idcu");
     $this->realizarOperacion( $eliminau);
	 $template->assign('eliminarvarios','Usted eliminó uno o varios trabajos');
	  $template->assign('id',$id);
	  $template->assign('ide',$ide);
	  $template->assign('tipot',$tipot);
     $template->display('mensajeeliminartrabajo.tpl'); /* Formulario de ingreso de la nueva maquina */
  }



/*_________________________________________________________________FIN DE REGISTRO DE TRABAJO/

///////////////////////////////////// FIN MODULO CONTROL DE MAQUINARIA \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\*/


/*----> CONTROL PROVEEDOR */

function controlproveedor()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  

$consultaproveedores=mysql_query("SELECT * FROM proveedor ");
while($listaproveedores=mysql_fetch_array($consultaproveedores))
{

$id[]=$listaproveedores[0];
$nombre[]=$listaproveedores[3];
$combustible[]=$listaproveedores[1];
$lubricante[]=$listaproveedores[2];
    
}

$compra=mysql_query("SELECT * FROM factura_compra");
while($facturas_compra=mysql_fetch_array($compra))
{
 $idprofc[]=$facturas_compra[6];
 $estado[]=$facturas_compra[5];
 $plata[]=$facturas_compra[2];
}

$compralubricante=mysql_query("SELECT * FROM factura_lubricante");
while($facturas_compra_lu=mysql_fetch_array($compralubricante))
{
 $idprofl[]=$facturas_compra_lu[1];
 $estadol[]=$facturas_compra_lu[6];
  $platal[]=$facturas_compra_lu[7];
}

$tamañolp = count($id);// Tamaño de la lista provedores
$tamañolpfc = count($idprofc); // tamaño de la lista proveedores de factura de  compra
$tamañolubri=count($idprofl);
$valor[]=0;
$valor2[]=0;

/*Acontinuación Creo Un for */

for($i=0; $i<=$tamañolp; $i++)//for externo de lista proveedor (Tabla proveedores)
{
if($combustible[$i]=='si' && $lubricante[$i]=='no')// Si son combustible
{

for($j=0; $j<=$tamañolpfc; $j++) // For interno para id proveedores e factura de compra
{
if($estado[$j]=='pendiente')
{
if($id[$i]==$idprofc[$j]) //Si de la lista d eproveedores eencuentras uno igual en factura de compra sumale todas las facturas pendientes
{

$valor[$i]=$valor[$i]+$plata[$j];	
$pagar[$i]=$valor[$i];
	
}// fin del si que decide si son iguales se suma
	
	
} // fin del condicional si esta pendiente
	
}//fin del for interno
}//fin del condicional combustible igual a si
else
if($lubricante[$i]=='si' && $combustible[$i]=='no')
{
for($k=0; $k<=$tamañolubri; $k++)
{
if($id[$i]==$idprofl[$k]){	
if($estadol[$k]=='pendiente')
{
	
$valor2[$i]=$valor2[$i]+$platal[$k];	
$pagar[$i]=$valor2[$i];
	
}
}//fin del si id = a uno d ela  lista de lubricante

}//fin del for lubricante

}//fin del condicional

else
{
  
 for($j=0; $j<=$tamañolpfc; $j++) // For interno para id proveedores e factura de compra
{
if($estado[$j]=='pendiente')
{
if($id[$i]==$idprofc[$j]) //Si de la lista d eproveedores eencuentras uno igual en factura de compra sumale todas las facturas pendientes
{

$valor[$i]=$valor[$i]+$plata[$j];	
$aux1[$i]=$valor[$i];
	
}// fin del si que decide si son iguales se suma
	
	
} // fin del condicional si esta pendiente
	
}//fin del for interno

for($k=0; $k<=$tamañolubri; $k++)
{
if($id[$i]==$idprofl[$k]){	
if($estadol[$k]=='pendiente')
{
	
$valor2[$i]=$valor2[$i]+$platal[$k];	
$aux2[$i]=$valor2[$i];
	
}
}//fin del si id = a uno d ela  lista de lubricante

}//fin del for lubricante

$pagar[$i]=$aux1[$i]+$aux2[$i];
 	
}// fin del sino
}//for externo


/*___________________________*/
$template->assign('id',$id);
$template->assign('combustible',$combustible);	
$template->assign('lubricante',$lubricante);
$template->assign('nombre',$nombre);
$template->assign('pagar',$pagar);	
$template->assign('aux1',$aux1);
$template->assign('aux2',$aux2);
$template->display('controlproveedor.tpl'); /* Formulario de ingreso de la nueva maquina */
}

/*_____________________________________ */

/*----> CREACION DE INTERFAZ PROVEEDOR */

function interfazproveedor()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  

$template->display('interfazproveedor.tpl'); /* Formulario de ingreso de la nueva maquina */	
}

/*----> AGREGAR PROVEEDOR*/ 

function agregarproveedor($id,$nombre,$direccion,$telefono,$ciudad,$combustible,$lubricante)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */

if($combustible=='combustible' && $lubricante==''){

$nuevoproveedor= "INSERT INTO proveedor(idproveedor,combustible,lubricante,nombre,ciudad,direccion,telefono)
values ('$id', 'si','no','$nombre','$ciudad','$direccion','$telefono')";
       $this->realizarOperacion($nuevoproveedor);
	   $mensajeproveedor="Ha Ingresado Un Porveedor de Combustible";	   
}
else
if($combustible=='' && $lubricante=='lubricante')
{

$nuevoproveedor= "INSERT INTO proveedor(idproveedor,combustible,lubricante,nombre,ciudad,direccion,telefono)
values ('$id', 'no','si','$nombre','$ciudad','$direccion','$telefono')";
       $this->realizarOperacion($nuevoproveedor);	
	   $mensajeproveedor="Ha Ingresado Un Porveedor de Lubricante ";
}
else
if($combustible=='combustible' && $lubricante=='lubricante')
{
$nuevoproveedor= "INSERT INTO proveedor(idproveedor,combustible,lubricante,nombre,ciudad,direccion,telefono)
values ('$id', 'si','si','$nombre','$ciudad','$direccion','$telefono')";
       $this->realizarOperacion($nuevoproveedor);
	   $mensajeproveedor="Ha Ingresado Un Porveedor de Lubricante Y Combustible";		
}
else
{
$mensajeproveedor="No ha seleccionado ninguna Distribución";
exit;
}

$template->assign('mensajeproveedor',$mensajeproveedor);
$template->display('mensajeproveedor.tpl'); /* Formulario de ingreso de la nueva maquina */
}

/* MUESTRA DATOS DE CADA PROVEEDOR */

function datosproveedor($id,$saldo,$co,$lu)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 	
$datos=mysql_query("SELECT * FROM proveedor WHERE idproveedor='$id' ");
while($datosproveedor=mysql_fetch_array($datos))
{

$nombre[]=$datosproveedor[3];
$ciudad[]=$datosproveedor[4];	
$direccion[]=$datosproveedor[5];
$telefono[]=$datosproveedor[6];	
$combustible[]=$datosproveedor[1];
$lubricante[]=$datosproveedor[2];
$saldototal[]=$saldo;

}//Fin del ciclo while

$valor1=0;
$valor2=0;
$nuevaconsulta=mysql_query("SELECT * FROM factura_compra WHERE fk_id_proveedor='$id' AND estado='pendiente'");
while($res=mysql_fetch_array($nuevaconsulta))
{
$valor1=$valor1+$res['valor_combustible'];	
}

$nuevaconsulta2=mysql_query("SELECT * FROM  factura_lubricante WHERE fk_idproveedor='$id' AND estado='pendiente'");
while($res2=mysql_fetch_array($nuevaconsulta2))
{
$valor2=$valor2+$res2['precio'];	
}
$resultado=$valor1+$valor2;

$template->assign('id',$id);
$template->assign('nombre',$nombre);
$template->assign('ciudad',$ciudad);
$template->assign('direccion',$direccion);
$template->assign('telefono',$telefono);
$template->assign('combustible',$combustible);
$template->assign('lubricante',$lubricante);
$template->assign('telefono',$telefono);
$template->assign('saldo',$resultado);
$template->assign('co',$valor1);
$template->assign('lu',$valor2);

$template->display('datosproveedor.tpl'); /* Formulario de ingreso de la nueva maquina */	
	
}//fin de la funcion DATOS PROVEEDOR


/*Registro facturas */
//Factura Combustible

function facturaproveedor($id,$saldo,$combustible,$lubricante)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  
$consulta=mysql_query("SELECT * FROM  factura_compra WHERE  fk_id_proveedor='$id' ");	
while($lista_fc=mysql_fetch_array($consulta))
{

   $idfactura[]=$lista_fc[0];
   $forma_pago[]=$lista_fc[1];
   $valor_co[]=$lista_fc[2];
   $estado[]=$lista_fc[5];
   $idtrabajo[]=$lista_fc[7];
   $nombre_trabajo[]=$lista_fc['fk_lugar'];
   $fecha_trabajo[]=$lista_fc['fk_fecha'];
}

$prove=mysql_query("SELECT * FROM proveedor WHERE idproveedor='$id' ");	
while($nombre=mysql_fetch_array($prove))
{
    $nombrepro=$nombre[3];
  
  
}/*Fin del while Interno */	


$valor1=0;
$valor2=0;
$nuevaconsulta=mysql_query("SELECT * FROM factura_compra WHERE fk_id_proveedor='$id' AND estado='pendiente'");
while($res=mysql_fetch_array($nuevaconsulta))
{
$valor1=$valor1+$res['valor_combustible'];	
}

$nuevaconsulta2=mysql_query("SELECT * FROM  factura_lubricante WHERE fk_idproveedor='$id' AND estado='pendiente'");
while($res2=mysql_fetch_array($nuevaconsulta2))
{
$valor2=$valor2+$res2['precio'];	
}
$resultado=$valor1+$valor2;
   
   $template->assign('id',$id);
   $template->assign('saldo',$resultado);
   $template->assign('nombrepro',$nombrepro);
   $template->assign('idfactura',$idfactura);
   $template->assign('idtrabajo',$idtrabajo);
   $template->assign('forma_pago',$forma_pago);
   $template->assign('valor_co',$valor_co);
   $template->assign('fecha_trabajo',$fecha_trabajo);
   $template->assign('nombre_trabajo',$nombre_trabajo);
   $template->assign('estado',$estado);
   $template->assign('co',$combustible);
   $template->assign('lu',$lubricante);
   $template->display('facturacombustible.tpl'); /* Formulario de ingreso de la nueva maquina */

} /*FIN DE LA FUNCION */
/*_____________________________________________________________ FINFACTURA COMBUSTIBLE*/

/*PAGAR FACTURA LUBRICANTE */
function pagarfc($idfactura,$idpro,$saldo,$combustible,$lubricante)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  

$factura= "UPDATE factura_compra SET estado='pagado' WHERE idfactura_compra='$idfactura' ";
 $this->realizarOperacion($factura);
  
  $template->assign('idpro',$idpro);
   $template->assign('saldo',$saldo);
   $template->assign('co',$combustible);
   $template->assign('lu',$lubricante);
  $template->assign('pagofc','Ha realizado Un Pago');
$template->display('pagocompraco.tpl'); /* Formulario de ingreso de la nueva maquina */	
 	
}
/*_____________________________________________________________ FIN PAGO FACTURA */

/* ELIMINAR FACTURA COMBUSTIBLE*/

function eliminarfc($idfactura,$idpro,$saldo,$combustible,$lubricante)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
 $eliminafc =("DELETE FROM factura_compra WHERE idfactura_compra='$idfactura' ");
 $this->realizarOperacion( $eliminafc);
 $template->assign('idpro',$idpro);
 $template->assign('saldo',$saldo);
 $template->assign('co',$combustible);
 $template->assign('lu',$lubricante);	
 $template->assign('eliminada_combustible','Usted ha eliminado una factura de combustible');
 $template->display('factura_combustible_eliminada.tpl'); 
	
}

/*______________________________________________________________FIN FACTURA LUBRICANTE */

function facturaproveedor_lu($id,$saldo,$combustible,$lubricante)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  
$i=0;

$consultaid=mysql_query("SELECT * FROM  factura_lubricante WHERE  fk_idproveedor='$id' ");	
while($fktrb=mysql_fetch_array($consultaid))
{

   $idlubricante[]=$fktrb[0];
   $fechatrb[]=$fktrb[2];
   $fkgalones[]=$fktrb[3];
   $fkgalonesrest[]=$fktrb[4];
   $fkvalor[]=$fktrb[7];
   $fkestado[]=$fktrb[6];
   $fkfase[]=$fktrb[9];
   
$consultatrb=mysql_query("SELECT * FROM extraccion_lubricante WHERE fk_factura_lubricante='$idextraccion[$i]'");
while($idtrb=mysql_fetch_array($consultatrb))
{

$trabajoid[]=$idtrb[3];
$galonestrb[]=$idtrb[4];

$trabajolubri=mysql_query("SELECT * FROM trabajo WHERE idtrabajo='$trabajoid[$i]'");
while($lubricantetrb=mysql_fetch_array($trabajolubri))
{

 $lugarfl[]=$lubricantetrb[5];
	
}
}
$i=$i+1;
}
$idprov=mysql_query("SELECT * FROM proveedor WHERE idproveedor='$id'");
while($idproveedor=mysql_fetch_array($idprov))
{
	$nombrepro=$idproveedor['nombre'];
	$telefono=$idproveedor['telefono'];
	$direccion=$idproveedor['direccion'];
	$ciudad=$idproveedor['ciudad'];
	$co=$idproveedor[1];
	$lu=$idproveedor[2];
}


$valor1=0;
$valor2=0;
$nuevaconsulta=mysql_query("SELECT * FROM factura_compra WHERE fk_id_proveedor='$id' AND estado='pendiente'");
while($res=mysql_fetch_array($nuevaconsulta))
{
$valor1=$valor1+$res['valor_combustible'];	
}

$nuevaconsulta2=mysql_query("SELECT * FROM  factura_lubricante WHERE fk_idproveedor='$id' AND estado='pendiente'");
while($res2=mysql_fetch_array($nuevaconsulta2))
{
$valor2=$valor2+$res2['precio'];	
}
$resultado=$valor1+$valor2;



   $template->assign('idprovedor',$id);
     $template->assign('nombrepro',$nombrepro);
	 $template->assign('telefono',$telefono);
	 $template->assign('direccion',$direccion);
	 $template->assign('ciudad',$ciudad);
	  $template->assign('combustible',$co);
	 $template->assign('lubricante',$lu);
	 $template->assign('saldo',$resultado);
   $template->assign('id',$idlubricante);
  $template->assign('fechatrb',$fechatrb);
  $template->assign('fkgalones',$fkgalones);
    $template->assign('fkgalonesrest',$fkgalonesrest);
	  $template->assign('fkvalor',$fkvalor);
	  $template->assign('fkestado',$fkestado);
	  $template->assign('fkfase',$fkfase);
	   $template->assign('co',$combustible);
	  $template->assign('lu',$lubricante);
      $template->display('facturalubricante.tpl'); /*Mostramos la factura lubricante de los proveedores */ 
}
/*FIN DE LA FUNCION FACTURA LUBRICANTE */
/*__________________________________________________________________________________ */

/*AÑADIR FACTURA LUBRICANTE */

function addfl($id,$nombre,$saldo,$combustible,$lubricante)
{
 global $template; /* Variable global para enviar mensajes al tpl deseado */

 $template->assign('id',$id);	
  $template->assign('idpro',$idpro);
 $template->assign('nombre',$nombre);
 $template->assign('saldo',$saldo);
 $template->assign('co',$combustible);
 $template->assign('lu',$lubricante);
 $template->display('agregarfacturalu.tpl');  
	
}
/*------------------------------------------------------------------------ */

function guardarfactura($id,$idpro,$fecha,$galones,$valor,$precio,$estado,$formadepago,$idfactura,$combustible,$lubricante,$saldo,$nombre)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */

$facturalu = "INSERT INTO  factura_lubricante (idfactura_lubricante, fk_idproveedor,fecha,galones,galones_restantes,ultimo_registro_galones,estado,precio,valor_unitario,fase,forma_de_pago) values('$id','$idpro','$fecha','$galones','$galones','$galones','$estado','$valor','$precio','activa','$formadepago')";
$nuevafactura= mysql_query($facturalu);  
 $template->assign('saldo',$saldo);
 $template->assign('co',$combustible);
 $template->assign('lu',$lubricante);
  $template->assign('id',$idfactura);
  $template->assign('nombre',$nombre);
$template->assign('mensajefactura','Usted Ha Agregado Una Nueva Factura Luricante');
$template->display('guardarfactura.tpl'); /* Formulario de ingreso de la nueva maquina */	
}
/*__________________________________________________________________________________*/

/* Cancelar Compra Pagada de Combustible */

function cancelarpfc($idfactura,$idpro,$saldo,$combustible,$lubricante)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  

$factura= "UPDATE factura_compra SET estado='pendiente' WHERE idfactura_compra='$idfactura' ";
 $this->realizarOperacion($factura);
 $template->assign('idpro',$idpro);
$template->assign('saldo',$saldo);	
 $template->assign('co',$combustible);
$template->assign('lu',$lubricante);	
 $template->assign('cancelarpagoco','Ha Cancelado Un Pago');
$template->display('cancelarcompraco.tpl'); /* Formulario de ingreso de la nueva maquina */		
}

/*__________________________________________________________________________________ */

/*Pagar Factura Lubricante */

function pagarflu($idfacturalu,$nombre,$idp,$saldo,$combustible,$lubricante)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
$factura= "UPDATE factura_lubricante SET  estado='pagado' WHERE idfactura_lubricante='$idfacturalu' ";
 $this->realizarOperacion($factura);
 
 $template->assign('id',$idfacturalu);
 $template->assign('nombre',$nombre);
  $template->assign('idpro',$idp);
$template->assign('saldo',$saldo);		
 $template->assign('co',$combustible);
$template->assign('lu',$lubricante);		
 $template->assign('pagarflu','Ha pagado la siguiente factura'.' '.'No '.$idfacturalu);
$template->display('pagarfacturalu.tpl'); /* Formulario de ingreso de la nueva maquina */		
}
/*__________________________________________________________________________________ */

function cancelarflu($idfacturalu,$nombre,$idp,$saldo,$combustible,$lubricante)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
$factura= "UPDATE factura_lubricante SET  estado='pendiente' WHERE idfactura_lubricante='$idfacturalu' ";
 $this->realizarOperacion($factura);	
 
  $template->assign('id',$idfacturalu);
 $template->assign('nombre',$nombre);
  $template->assign('idpro',$idp);
$template->assign('saldo',$saldo);		
 $template->assign('co',$combustible);
$template->assign('lu',$lubricante);	
 
 $template->assign('pagarflu','Ha Cancelado el Pago de la Factura'.' '.'No '.$idfacturalu);
$template->display('pagarfacturalu.tpl'); /* Formulario de ingreso de la nueva maquina */		
}


/*Eliminar Factura Lubricante */


function eliminarflu($idfacturalu,$idpro,$nombre,$combustible,$lubricante,$saldo)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminaflu =("DELETE FROM  factura_lubricante WHERE  	idfactura_lubricante='$idfacturalu'");
     $this->realizarOperacion($eliminaflu);
	
	$template->assign('id',$idpro);
	$template->assign('nombre',$nombre);
	$template->assign('combustible',$combustible);
	$template->assign('lubricante',$lubricante);
	$template->assign('saldo',$saldo);
	 $template->assign('facturalu','Usted Eliminó Una Factura Lubricante');
     $template->display('eliminarfacturalu.tpl'); /* Formulario de ingreso de la nueva maquina */
	
}

/*___________________________________________________________________________________ */
/*___________________________________________________________________________________ */
/* EXTRACCION FACTURA LUBRICANTE*/

function extraccionlu($idfactura,$nombrepro,$saldo,$idpro,$nombre,$combustible,$lubricante)
{
	
	
global $template; /* Variable global para enviar mensajes al tpl deseado */
$consulta=mysql_query("SELECT * FROM extraccion_lubricante WHERE fk_factura_lubricante='$idfactura'");

while($extraccion=mysql_fetch_array($consulta))
{

$idextraccion_lubricante[]=$extraccion['idextraccion_lubricante'];	
$fk_factura_lubricante[]=$extraccion['fk_factura_lubricante'];		
$trabajo[]=$extraccion['fk_idtrabajo'];
$galones[]=$extraccion['galones'];
$fk_fecha[]=$extraccion['fk_fecha'];
$fk_lugar[]=$extraccion['fk_lugar'];

}//Fin While externo

$factura=mysql_query("SELECT * FROM factura_lubricante WHERE  	idfactura_lubricante='$idfactura'");

while($proveedor=mysql_fetch_array($factura))
{
 $idfactura_lubricante=$proveedor['idfactura_lubricante'];		
 $idproveedor=$proveedor['fk_idproveedor'];	
 $precio=$proveedor['precio'];	
 $forma_de_pago=$proveedor['forma_de_pago'];	
 $estado=$proveedor['estado'];
 $galones=$proveedor['galones'];
 $galones_restantes=$proveedor['galones_restantes'];
  $valor_unitario=$proveedor['valor_unitario'];
}

// Información del Porveedor

$template->assign('idproveedor',$idproveedor);
$template->assign('nombrepro',$nombrepro);
$template->assign('saldo',$saldo);
// Información Factura

$template->assign('idfactura_lubricante',$idfactura_lubricante);
$template->assign('precio',$precio);
$template->assign('forma_de_pago',$forma_de_pago);
$template->assign('estado',$estado);
$template->assign('galones',$galones);
$template->assign('galones_restantes',$galones_restantes);
$template->assign('valor_unitario',$valor_unitario);
/*________________________________________ */

$template->assign('idextraccion_lubricante',$idextraccion_lubricante);
$template->assign('fk_factura_lubricante',$trabajo);
$template->assign('galones',$galones);
$template->assign('fecha',$fk_fecha);
$template->assign('fk_lugar',$fk_lugar);
$template->assign('id',$idpro);
$template->assign('nombre',$nombre);
$template->assign('saldo',$saldo);
$template->assign('co',$combustible);
$template->assign('lu',$lubricante);
$template->display('extraccionlu.tpl'); /* Formulario de ingreso de la nueva maquina */
	
}
/*_________________________________________________________________________________ */

/*Eliminar extraccion de lubricante  */
function eliminarext($idx)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminaext =("DELETE FROM  extraccion_lubricante WHERE idextraccion_lubricante=$idx");
     $this->realizarOperacion( $eliminaext );
	
	 $template->assign('eliextraccion','Usted Eliminó La Extraccion De Un Lubricante');
     $template->display('eliminarextraccion.tpl'); /* Formulario de ingreso de la nueva maquina */

}

/*________________________________________________________________FIN DE ELIMINAR EXT */
/*ELMINAR PROVEEDOR */

function eliminarproveedor($idp){
	global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminap =("DELETE FROM `emarcosas`.`proveedor` WHERE `proveedor`.`idproveedor` =$idp");
     $this->realizarOperacion( $eliminap);
	
	 $template->assign('eproveedor','Usted eliminó un Proveedor');
     $template->display('eliminarproveedor.tpl'); /* Formulario de ingreso de la nueva maquina */
  }

///////////////////////////////////// FIN MODULO CONTROL DE MAQUINARIA \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\*/

/*----> CONTROL OPERADOR*/

function controloperadores()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  
	
$cont=0;
$pago[]=0;
$operador=mysql_query("SELECT * FROM operador ");
while($operadores=mysql_fetch_array($operador))
{

$id[]=$operadores['idoperador'];
$nombre[]=$operadores['nombre'];
$apellido[]=$operadores['apellido'];
$telefono[]=$operadores['telefono'];
$sexo[]=$operadores['sexo'];

$trabajo_operador=mysql_query("SELECT * FROM trabajo_operador WHERE fk_idoperador= '$id[$cont]' AND estadodepago='pendiente' ");
while($trboperador=mysql_fetch_array($trabajo_operador))

{

$pago[$cont]=$trboperador[1];
$pagar[$cont]=$pagar[$cont]+$pago[$cont];     
}

$cont=$cont+1;
}

	 $template->assign('id',$id);
	 $template->assign('nombre',$nombre);
	 $template->assign('apellido',$apellido);
	 $template->assign('telefono',$telefono);
	 $template->assign('pagar',$pagar);	 
	 $template->assign('sexo',$sexo);	 
	 $template->display('controloperador.tpl'); /* Formulario de ingreso de la nueva maquina */
}
/*____________________________________________________________________  FIN DE CONTROL OPERADOR*/

/*--->AGREGAR OPERADOR */
function agregaroperador()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  	 
$template->display('agregaroperador.tpl'); /* Formulario de ingreso de la nueva maquina */	
}

/*____________________________________________________________________ FIN DE AGREGAR OPERADOR */
/*--->GUARDAR OPERADOR */

function guardaroperador($cedula,$nombres,$apellidos,$edad,$sexo,$telefono,$correo,$direccion,$sueldo,$pagadiario)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */

$nuevooperador= "INSERT INTO operador(idoperador,nombre,edad,sexo,direccion,telefono,correo,sueldo,apellido,pagadiario)
values ('$cedula','$nombres','$edad','$sexo','$direccion','$telefono','$correo','$sueldo','$apellidos','$pagadiario')";
       $this->realizarOperacion($nuevooperador);
	   $mensajeoperador="Ha Ingresado Un Operador";	

       $template->assign('noperador',$mensajeoperador);
	   $template->display('guardaroperador.tpl'); /* Formulario de ingreso de la nueva maquina */

}

/*--->REGISTRO OPERADOR */

function registrooperador($id,$saldo)
{
	global $template; /* Variable global para enviar mensajes al tpl deseado */


$datos=mysql_query("SELECT * FROM  operador WHERE  idoperador='$id' ");
while($datosop=mysql_fetch_array($datos))
{
	$cedula=$datosop['idoperador'];
	$nombre=$datosop['nombre'];
	$apellido=$datosop['apellido'];
	$edad=$datosop['edad'];
	$sexo=$datosop['sexo'];
	$telefono=$datosop['telefono'];
	$direccion=$datosop['direccion'];
	$correo=$datosop['correo'];
	$sueldo=$datosop['sueldo'];		
}

$operadores=mysql_query("SELECT * FROM  trabajo_operador WHERE fk_idoperador='$id' ");
while($operador=mysql_fetch_array($operadores))
{
$idto[]=$operador['idtrabajo_operador'];	
$valor[]=$operador['valor'];
$fecha[]=$operador['fecha'];
$estadodepago[]=$operador['estadodepago'];
$fk_idtrabajo[]=$operador['fk_idtrabajo'];	
$horas[]=$operador['fk_cantidad_servicios'];	
$lugar[]=$operador['fk_lugar'];	

}//Fin del while externo osea trabajo operador

/*DATOS OPERADOR */
$template->assign('cedula',$cedula);
$template->assign('nombre',$nombre);
$template->assign('apellido',$apellido);
$template->assign('edad',$edad);
$template->assign('sexo',$sexo);
$template->assign('telefono',$telefono);
$template->assign('direccion',$direccion);
$template->assign('correo',$correo);
$template->assign('sueldo',$sueldo);
$template->assign('saldo',$saldo);
/*__________________________________*/
$template->assign('idto',$idto);
$template->assign('horas',$horas);
$template->assign('valor',$valor);
$template->assign('lugar',$lugar);
$template->assign('fecha',$fecha);
$template->assign('idtrabajo',$fk_idtrabajo);
$template->assign('estado',$estadodepago);
$template->display('registrooperador.tpl'); /* Formulario de ingreso de la nueva maquina */
}
/*____________________________________________________________________Fin REGISTRO OPERADOR */

/*PAGO OPERADOR */

function pagooperador($id,$saldo)
{
	
global $template; /* Variable global para enviar mensajes al tpl deseado */


$datos=mysql_query("SELECT * FROM  operador WHERE  idoperador='$id' ");
while($datosop=mysql_fetch_array($datos))
{
	$cedula=$datosop['idoperador'];
	$nombre=$datosop['nombre'];
	$apellido=$datosop['apellido'];
	$edad=$datosop['edad'];
	$sexo=$datosop['sexo'];
	$telefono=$datosop['telefono'];
	$direccion=$datosop['direccion'];
	$correo=$datosop['correo'];
	$sueldo=$datosop['sueldo'];
	$pagadiario=$datosop['pagadiario'];		
}

$operadores=mysql_query("SELECT * FROM  trabajo_operador WHERE fk_idoperador='$id' AND estadodepago='pendiente' ");
while($operador=mysql_fetch_array($operadores))
{
$idto[]=$operador['idtrabajo_operador'];	
$valor[]=$operador['valor'];
$fecha[]=$operador['fecha'];
$estadodepago[]=$operador['estadodepago'];
$fk_idtrabajo[]=$operador['fk_idtrabajo'];	
$lugar[]=$operador['fk_lugar'];
$horas[]=$operador['fk_cantidad_servicios'];	


}//Fin del while externo osea trabajo operador

/*DATOS OPERADOR */
$template->assign('cedula',$cedula);
$template->assign('nombre',$nombre);
$template->assign('apellido',$apellido);
$template->assign('edad',$edad);
$template->assign('sexo',$sexo);
$template->assign('telefono',$telefono);
$template->assign('direccion',$direccion);
$template->assign('correo',$correo);
$template->assign('sueldo',$sueldo);
$template->assign('saldo',$saldo);
$template->assign('pagadiario',$pagadiario);
/*__________________________________*/
$template->assign('idto',$idto);
$template->assign('horas',$horas);
$template->assign('valor',$valor);
$template->assign('lugar',$lugar);
$template->assign('fecha',$fecha);
$template->assign('idtrabajo',$fk_idtrabajo);
$template->assign('estado',$estadodepago);
$template->display('pagooperador.tpl'); 
}

/*____________________________________________________________________FIN PAGO OPERADOR */

function pagar($id,$fecha,$cedula,$totaldia,$totalapagar,$saldo)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  

    $actualizarop= "UPDATE trabajo_operador  SET estadodepago='pagado' WHERE idtrabajo_operador IN (".implode(',',$id).");";
     $this->realizarOperacion($actualizarop);
	 
	 $inserpago= "INSERT INTO  pago (fecha,valor,fk_idoperador,numerodias) values ('$fecha','$totalapagar','$cedula','$totaldia')";
     $this->realizarOperacion($inserpago);
/*__________________________________________________________________________________________________ */	  
	  
	  
	  
	 $tamaño=count($id);
	 for($i=0; $i<$tamaño; $i++)
	 {
	 $insertrabajo = "INSERT INTO registro_de_pago_op (fk_idtrabajo_operador) values ('$id[$i]')";
     $this->realizarOperacion($insertrabajo);
	
     }
	 
	
	  $cont=0;  
	  $ultimopago=mysql_query("SELECT * FROM  pago  ");
while($upago=mysql_fetch_array($ultimopago))
{
      $actualiza[]=$upago['idpago'];
	  $cont=$cont+1;
}
	  $cont=$cont-1;
    
	   
	  $recorrido2=count($id);
	  for($k=0; $k<=$recorrido2; $k++){
	  $ro_pago= "UPDATE registro_de_pago_op  SET fk_pago_op ='$actualiza[$cont]' WHERE fk_idtrabajo_operador='$id[$k]'";
	 $this->realizarOperacion($ro_pago);
	  }
	 $template->assign('id',$cedula);
	 $template->assign('saldo',$saldo); 
	 $template->assign('actualizarop','Pago realizado correctamente');
     $template->display('pagaroperador.tpl'); /* Formulario de ingreso de la nueva maquina */	
}

function pagarnoservicios($cedula,$fecha,$totaldia,$totalapagar,$saldo)
{
	global $template; /* Variable global para enviar mensajes al tpl deseado */ 
	 $inserpago= "INSERT INTO  pago (fecha,valor,fk_idoperador,numerodias) values('$fecha','$totalapagar','$cedula','$totaldia')";
     $this->realizarOperacion($inserpago);
	 
	 $template->assign('id',$cedula);
	 $template->assign('saldo',$saldo); 
	 $template->assign('actualizarop','Pago realizado correctamente');
     $template->display('pagaroperador.tpl'); /* Formulario de ingreso de la nueva maquina */	
	
}

/* REGISTRO DE PAGO */

function registropago($id,$saldo)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$rpago=mysql_query("SELECT * FROM  pago  ");
while($registro=mysql_fetch_array($rpago))
{
$idpago[]=$registro['idpago'];
$fecha[]=$registro['fecha'];
$valor[]=$registro['valor'];
$idoperador[]=$registro['fk_idoperador'];
$numerodias[]=$registro['numerodias'];	
}

$datos=mysql_query("SELECT * FROM  operador WHERE  idoperador='$id' ");
while($datosop=mysql_fetch_array($datos))
{
	$cedula=$datosop['idoperador'];
	$nombre=$datosop['nombre'];
	$apellido=$datosop['apellido'];
	$edad=$datosop['edad'];
	$sexo=$datosop['sexo'];
	$telefono=$datosop['telefono'];
	$direccion=$datosop['direccion'];
	$correo=$datosop['correo'];
	$sueldo=$datosop['sueldo'];
	$pagadiario=$datosop['pagadiario'];		
}



/*DATOS OPERADOR */
$template->assign('cedula',$cedula);
$template->assign('nombre',$nombre);
$template->assign('apellido',$apellido);
$template->assign('edad',$edad);
$template->assign('sexo',$sexo);
$template->assign('telefono',$telefono);
$template->assign('direccion',$direccion);
$template->assign('correo',$correo);
$template->assign('sueldo',$sueldo);
$template->assign('saldo',$saldo);
$template->assign('pagadiario',$pagadiario);
/*__________________________________*/

$template->assign('idpago',$idpago);
$template->assign('fecha',$fecha);
$template->assign('valor',$valor);
$template->assign('idoperador',$idoperador);
$template->assign('numerodias',$numerodias);
$template->display('registropago.tpl'); /* Formulario de ingreso de la nueva maquina */
	
}
/*___________________________________________________________________________________FIN DE REGISTRO DE PAGO 

/* DETALLES DEL PAGO */

function detallespago($id,$cedula,$saldo,$fecha2)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  	
$consulta=mysql_query("SELECT * FROM registro_de_pago_op WHERE fk_pago_op='$id'");
$i=0;
while($menudetalles=mysql_fetch_array($consulta))
{
	$fk_idtrabajo_operador[]=$menudetalles['fk_idtrabajo_operador'];

$datostop=mysql_query("SELECT * FROM trabajo_operador WHERE idtrabajo_operador='$fk_idtrabajo_operador[$i]'");
while($trabajoop=mysql_fetch_array($datostop))
{
$valor2[]=$trabajoop['valor'];
$lugar[]=$trabajoop['fk_lugar'];
$fecha[]=$trabajoop['fecha'];
$fk_idtrabajo[]=$trabajoop['fk_idtrabajo'];
}
$i=$i+1;
}//Fin del while externo

$idpagos=mysql_query("SELECT * FROM pago WHERE idpago='$id'");
while($pagos=mysql_fetch_array($idpagos))
{
$diaspagos=$pagos['numerodias'];
$valor=$pagos['valor'];	
}

$operador=mysql_query("SELECT * FROM operador WHERE idoperador='$cedula'");
while($operadores=mysql_fetch_array($operador))
{
$cedula=$operadores['idoperador'];
$nombre=$operadores['nombre'];	
$apellido=$operadores['apellido'];
$sueldo=$operadores['sueldo'];
}


$template->assign('cedula',$cedula);
$template->assign('nombre',$nombre);
$template->assign('apellido',$apellido);
$template->assign('sueldo',$sueldo);
$template->assign('saldo',$saldo);

$template->assign('diaspagos',$diaspagos);
$template->assign('valor',$valor);

$template->assign('fk_idtrabajo_operador',$fk_idtrabajo_operador);
$template->assign('valor2',$valor2);
$template->assign('lugar',$lugar);
$template->assign('fecha',$fecha);
$template->assign('fecha2',$fecha2);
$template->assign('idtrabajo',$fk_idtrabajo);
$template->display('detallespago.tpl'); /* Formulario de ingreso de la nueva maquina */
}
/*_____________________________________________________________FIN DETALLES DEL PAGO */


/*ELIMINAR PAGO */

function eliminarpago($id,$cedula,$saldo)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminapago =("DELETE FROM  pago WHERE  idpago='$id'");
     $this->realizarOperacion($eliminapago);
	 $template->assign('id',$cedula);
     $template->assign('saldo',$saldo);	
	 $template->assign('elipago','Usted Eliminó Un Pago');
     $template->display('eliminarpago.tpl'); /* Formulario de ingreso de la nueva maquina */	
	
	
}


/*___________________________________________________________________________________FIN DE ELIMINAR PAGO */
 /* ELMINAR UN REGISTRO */

function elioperador($idop,$cedula,$saldo)
{
	global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminaop =("DELETE FROM  trabajo_operador WHERE  idtrabajo_operador='$idop'");
     $this->realizarOperacion($eliminaop);
	
	 $template->assign('id',$cedula);
     $template->assign('saldo',$saldo);
	 $template->assign('eoperador','Usted Eliminó Un Registro Operador');
     $template->display('eliminarregistroop.tpl'); /* Formulario de ingreso de la nueva maquina */
  }

/*____________________________________________________________________FIN DE GUARDAR TRABAJO */

/* MODIFICAR OPERADOR */


function modificaroperador($id)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */

$consulta=mysql_query("SELECT * FROM operador WHERE idoperador='$id'");
while($resultados=mysql_fetch_array($consulta))
{
$nombre=$resultados['nombre'];	
$apellido=$resultados['apellido'];	
$edad=$resultados['edad'];	
$sexo=$resultados['sexo'];
$telefono=$resultados['telefono'];	
$direccion=$resultados['direccion'];
$correo=$resultados['correo'];	
$sueldo=$resultados['sueldo'];	
}
$template->assign('id',$id);
$template->assign('nombre',$nombre);
$template->assign('apellido',$apellido);
$template->assign('edad',$edad);
$template->assign('sexo',$sexo);
$template->assign('telefono',$telefono);
$template->assign('direccion',$direccion);
$template->assign('correo',$correo);
$template->assign('sueldo',$sueldo);
$template->display('modificaroperador.tpl'); /* Formulario de ingreso de la nueva maquina */	
	
}

function modificaoperador($cedula,$nombres,$apellidos,$edad,$sexo,$telefono,$direccion,$correo,$sueldo)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
$consulta2= "UPDATE  operador SET idoperador='$cedula', nombre='$nombres', apellido='$apellidos', edad='$edad', sexo='$sexo', telefono='$telefono', direccion='$direccion', correo='$correo', sueldo='$sueldo' WHERE idoperador='$cedula'";
$this->realizarOperacion($consulta2);	
$template->assign('mensaje_modificaroperador','Usted ha modificado un operador');
$template->display('mensaje_modifica_operador.tpl'); /* Formulario de ingreso de la nueva maquina */		 
	 	
}

/*____________________________________________________________________FIN MODIFICAR OPERADOR */

/*--->ELIMINAR OPERADOR */

function eliminaroperador($idop){
	global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminaop =("DELETE FROM operador WHERE  idoperador='$idop'");
     $this->realizarOperacion($eliminaop);
	
	 $template->assign('eoperador','Usted Eliminó Un Operador');
     $template->display('eliminaroperador.tpl'); /* Formulario de ingreso de la nueva maquina */
  }

/*_____________________________________________________________________ */



/*····································CONTROL DE CONTRATOS············································ */
//---->CONTROL DE CONTRATO
function controlcontrato()
{
$cont=0;	
$consulta=mysql_query("SELECT * FROM contrato ");
while($resultados=mysql_fetch_array($consulta))
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
$idcontrato[]=$resultados['idcontrato'];
$descripcion[]=$resultados['descripcion'];
$valor_inicial[]=$resultados['valor_inicial'];
$valor_final[]=$resultados['valor_final'];
$fecha_inicio[]=$resultados['fecha_inicio'];
$fecha_finalizado[]=$resultados['fecha_finalizado'];
$fk_idlugar[]=$resultados['fk_idlugar'];
$estado[]=$resultados['estado'];
$cont++;
}

if($cont==0)
{
$this->ok();
}
else
{
$template->assign('idcontrato',$idcontrato);
$template->assign('descripcion',$descripcion);
$template->assign('valor_inicial',$valor_inicial);
$template->assign('valor_final',$valor_final);
$template->assign('fecha_inicio',$fecha_inicio);
$template->assign('fecha_finalizado',$fecha_finalizado);
$template->assign('fk_idlugar',$fk_idlugar);
$template->assign('estado',$estado);
$template->display('controlcontratos.tpl');
}
}
//_____________________________________________________

function ok()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  	
$template->display('controlcontratos.tpl');
}

//---->AGREGAR CONTRATO

function agregarcontrato()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  
$template->display('agregarcontrato.tpl');	
}


//_____________________________________________________


//---->GUARDAR CONTRATO

function guardarcontrato($id,$lugar,$valor,$fecha_inicio,$descripcion)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */

$consulta= "INSERT INTO contrato (idcontrato,descripcion,valor_inicial,valor_final,fecha_inicio,fecha_finalizado,fk_idlugar,estado) values ('$id','$descripcion','$valor','','$fecha_inicio','','$lugar','encurso')";
     $this->realizarOperacion($consulta);

$template->assign('mensajecontrato','Contrato agregado correctamente');  
$template->display('guardarcontrato.tpl');	
}


//_____________________________________________________

//----> MODIFICAR CONTRATO
function modificarcontrato($id)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */

$consulta=mysql_query("SELECT * FROM contrato WHERE idcontrato='$id'");
while($resultados=mysql_fetch_array($consulta))
{

$idcontrato=$resultados['idcontrato'];
$descripcion=$resultados['descripcion'];
$valor_inicial=$resultados['valor_inicial'];
$valor_final=$resultados['valor_final'];
$fecha_inicio=$resultados['fecha_inicio'];
$fecha_finalizado=$resultados['fecha_finalizado'];
$fk_idlugar=$resultados['fk_idlugar'];
$estado=$resultados['estado'];
}

$actas=mysql_query("SELECT * FROM actas_pago WHERE fk_idcontrato='$id'");
$cont=0;
$valor=0;
$aux=0;
while($ractas=mysql_fetch_array($actas))
{	
$aux=$aux+$ractas['valor'];	
$cont=$cont+1;	
}
if($cont==0)
{
$valor=0;	
}
else
{
$valor=$aux;	
}


$valorc=0;
$cont=0;
$cuentas=mysql_query("SELECT * FROM  cuentas_contrato  WHERE  fk_idcontrato='$id'");
while($resultcuentas=mysql_fetch_array($cuentas))
{	
$idcuentas_contrato[]=$resultcuentas['idcuentas_contrato'];	

$cuentas2=mysql_query("SELECT * FROM  informacion_de_cuenta  WHERE fk_idcuentas_contrato='$idcuentas_contrato[$cont]'");
while($resultcuentas2=mysql_fetch_array($cuentas2))
{	
$valorc=$valorc+$resultcuentas2['valor'];	
}
$cont=$cont+1;
}

/*Cuantas Maquinas hay */
$conteo=0;
$maquinas=mysql_query("SELECT * FROM  maquinaria_contratada WHERE  fk_idcontrato='$id' ");
while($cmaquinas=mysql_fetch_array($maquinas))
{	
$conteo=$conteo+1;
}


/*___________________________________________ */

$template->assign('idcontrato',$idcontrato);
$template->assign('descripcion',$descripcion);
$template->assign('valor_inicial',$valor_inicial);
$template->assign('valor_final',$aux);
$template->assign('fecha_inicio',$fecha_inicio);
$template->assign('fecha_finalizado',$fecha_finalizado);
$template->assign('fk_idlugar',$fk_idlugar);
$template->assign('estado',$estado);
$template->assign('valoractas',$valor);
$template->assign('valorcuentas',$valorc);
$template->assign('conteomaquina',$conteo);
$template->display('modificarcontrato.tpl');

}

//_______________________________________________________________________________

/* FINALIZAR CONTRATO*/

function finalizar_contrato($idcontrato,$lugar,$valorini,$valorfin,$fechaini,$fechafin,$descripcion)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
$consulta2= "UPDATE  contrato SET estado='finalizado', descripcion='$descripcion',valor_inicial='$valorini',valor_final='$valorfin',fecha_inicio='$fechaini',fecha_finalizado='$fechafin' WHERE idcontrato='$idcontrato'";

	 $this->realizarOperacion($consulta2);	
$template->assign('contrato_finalizado','Usted ha Finalizado Un Contrato');
$template->display('contrato_finalizado.tpl'); 
}

/*___________________________________________________________ */

/* REANUDAR CONTRATO*/

function reanudar_contrato($idcontrato)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
$consulta2= "UPDATE  contrato SET estado='encurso' WHERE idcontrato='$idcontrato'";
	 $this->realizarOperacion($consulta2);	
$template->assign('contrato_reanudado','Usted ha Reanudado Un Contrato');
$template->display('contrato_reanudado.tpl');  
}
 
/*___________________________________________________________ */
/* ELIMINAR CONTRATO */

function eliminar_contrato($idcontrato)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */	
 $eliminacontrato =("DELETE FROM  contrato WHERE  idcontrato='$idcontrato'");
     $this->realizarOperacion($eliminacontrato);
 $template->assign('contrato_eliminado','Usted ha eliminado Un Contrato');
$template->display('mensajeeliminarcontrato.tpl');  	
}



//---->CREACIÓN DE ACATAS D EPAGO

function agregaracta($idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
 $template->assign('idc',$idc);
$template->display('agregaracta.tpl');	
}

//_______________________________________________________________________________

function guardaracta($id,$fecha,$tipo2,$descripcion,$asunto,$valor,$retencion,$descuento,$nuevonombre,$verimagen,$idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
	
$consulta= "INSERT INTO actas_pago (idacta_pago,fecha,tipo,asunto,descripcion,valor,retencion,descuento,imagen,imagendescarga,fk_idcontrato) values ('$id','$fecha','$tipo2','$asunto','$descripcion','$valor','$retencion','$descuento','$nuevonombre','$verimagen','$idc')";
     $this->realizarOperacion($consulta);


$template->assign('idc',$idc);
$template->assign('mensajeacta','Usted ha agregado una acta correctamente');
$template->display('nuevaacta.tpl');

}


function erroracta()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$template->assign('mensajeacta','ERROR, El tamaño de la imagen tiene que ser menor a 1,5 MB');
$template->display('nuevaacta.tpl');
	
}


function registroactas($idc)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */

$consulta=mysql_query("SELECT * FROM actas_pago WHERE fk_idcontrato='$idc' ");
while($resultados=mysql_fetch_array($consulta))
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
$idacta_pago[]=$resultados['idacta_pago'];
$fecha[]=$resultados['fecha'];
$tipo[]=$resultados['tipo'];
$valor[]=$resultados['valor'];
}


$template->assign('idacta_pago',$idacta_pago);
$template->assign('idc',$idc);
$template->assign('fecha',$fecha);
$template->assign('tipo',$tipo);
$template->assign('valor',$valor);
$template->display('registroacta.tpl');
	
}

function eliminaractas($id,$idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  

$consulta=mysql_query("SELECT * FROM actas_pago WHERE  idacta_pago='$id'");
while($resultados=mysql_fetch_array($consulta))
{	
 $ruta=$resultados['imagen'];
}
	 unlink($ruta);

    $eliminaacta =("DELETE FROM  actas_pago WHERE  idacta_pago='$id'");
     $this->realizarOperacion($eliminaacta);
	
	$template->assign('idc',$idc);
	$template->assign('eliminaracta','Has eliminado un acta correctamente');
$template->display('mensajeeliminaracta.tpl');
}

function modificaracta($id,$idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$consulta=mysql_query("SELECT * FROM actas_pago WHERE idacta_pago='$id'");
while($resultados=mysql_fetch_array($consulta))
{

global $template; /* Variable global para enviar mensajes al tpl deseado */  
$idacta_pago=$resultados['idacta_pago'];
$fecha=$resultados['fecha'];
$tipo=$resultados['tipo'];
$descripcion=$resultados['descripcion'];
$asunto=$resultados['asunto'];
$valor=$resultados['valor'];
$retencion=$resultados['retencion'];
$descuento=$resultados['descuento'];
$imagen=$resultados['imagen'];
$imagendescarga=$resultados['imagendescarga'];
$total=$valor-$descuento;
	
}
$template->assign('idacta_pago',$idacta_pago);
$template->assign('idc',$idc);
$template->assign('fecha',$fecha);
$template->assign('tipo',$tipo);
$template->assign('descripcion',$descripcion);
$template->assign('valor',$valor);
$template->assign('asunto',$asunto);
$template->assign('retencion',$retencion);
$template->assign('descuento',$descuento);
$template->assign('total',$total);
$template->assign('imagen',$imagen);
$template->assign('imagendescarga',$imagendescarga);
$template->display('modificaacta.tpl');	
	
}

function actualizacionacta($id,$fecha,$tipo2,$descripcion,$asunto,$valor,$retencion,$descuento,$nuevonombre,$verimagen,$idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$consulta=mysql_query("SELECT * FROM actas_pago WHERE  idacta_pago='$id'");
while($resultados=mysql_fetch_array($consulta))
{	
 $ruta=$resultados['imagen'];
}
	 unlink($ruta);

$ro_pago= "UPDATE actas_pago  SET fecha ='$fecha',tipo ='$tipo2',asunto ='$asunto', valor='$valor',retencion='$retencion', descuento='$descuento',imagen='$nuevonombre',imagendescarga='$verimagen'   WHERE idacta_pago='$id'";
	 $this->realizarOperacion($ro_pago);

$template->assign('idc',$idc);	 
$template->assign('mensajeacta','Usted Ha Modificado un Acta Correctamente');
$template->display('nuevaacta.tpl');	 

}

/*Cuentas de Contrato */ 

function cuentascontrato($idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$consulta=mysql_query("SELECT * FROM cuentas_contrato WHERE fk_idcontrato='$idc'");
$i=0;
$valores[]=0;
while($resultados=mysql_fetch_array($consulta))
{
$idcuentas_contrato[]=$resultados['idcuentas_contrato'];
$fecha[]=$resultados['fecha'];	

$nuevaconsulta=mysql_query("SELECT * FROM  informacion_de_cuenta WHERE fk_idcuentas_contrato='$idcuentas_contrato[$i]'");
while($nuevoresultados=mysql_fetch_array($nuevaconsulta))
{
	$valores[$i]=$valores[$i]+$nuevoresultados['valor'];

} 
   $valor[$i]=$valores[$i];
$i++;
}
	
$template->assign('idcuentas_contrato',$idcuentas_contrato);			
$template->assign('idc',$idc);
$template->assign('valor',$valor);
$template->assign('fecha',$fecha);
$template->display('nuevacuenta.tpl');
}

function nuevacuenta($idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$template->assign('idc',$idc);
$template->display('cuentapago.tpl');
}

/*GUARDAR CUENTA DE PAGO */

function eliminar_cuenta_pago($idc,$id)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */  
    $eliminac =("DELETE FROM  cuentas_contrato WHERE  idcuentas_contrato=$idc");
     $this->realizarOperacion( $eliminac);
	 $template->assign('idc',$idc);
	  $template->assign('id',$id);
	 $template->assign('eliminar_cuenta_pago','Usted Ha Eliminado Una Cuenta de pago Del Contrato');
$template->display('eliminar_cuenta_pago.tpl');
	 
}


function guardar_cuenta_pago($descripcion,$fecha,$nuevoasunto,$valor,$retencion,$descuento,$total,$idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */
$infcuentac = "INSERT INTO cuentas_contrato (fk_idcontrato,descripcion,fecha) values ('$idc','$descripcion','$fecha')";
       $this->realizarOperacion($infcuentac);


$consulta=mysql_query("SELECT * FROM cuentas_contrato WHERE  fk_idcontrato='$idc'");
while($resultados=mysql_fetch_array($consulta))
{
$idcuenta=$resultados['idcuentas_contrato'];

}

	
$tamaño =count($nuevoasunto);	
for($i=0; $i<$tamaño; $i++)
{

$infcuenta = "INSERT INTO informacion_de_cuenta (descripcion,valor,iva,descuento,total,fk_idcuentas_contrato) values ('$nuevoasunto[$i]','$valor[$i]','$retencion[$i]','$descuento[$i]','$total[$i]','$idcuenta')";
       $this->realizarOperacion($infcuenta);
}

$template->assign('idc',$idc);
$template->assign('cuentapago','Ha Generado Una Cuenta De Pago');
$template->display('mensaje_cuenta_pago.tpl');
}

/*Modifica cuentas de pago */

function modifica_cuenta_pago($idc,$id)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */
$consulta=mysql_query("SELECT * FROM  informacion_de_cuenta WHERE fk_idcuentas_contrato='$idc'");
while($resultados=mysql_fetch_array($consulta))
{
$asunto[]=$resultados['descripcion'];
$valor[]=$resultados['valor'];
$iva[]=$resultados['iva'];
$descuento[]=$resultados['descuento'];	
$total[]=$resultados['total'];
}

$consulta2=mysql_query("SELECT * FROM  cuentas_contrato WHERE  idcuentas_contrato='$idc'");
while($resultados2=mysql_fetch_array($consulta2))
{
$idcuentas_contrato=$resultados2['idcuentas_contrato'];	
$descripcion=$resultados2['descripcion'];
$fecha=$resultados2['fecha'];

}

$template->assign('idcuentas_contrato',$idcuentas_contrato);
$template->assign('idc',$id);
$template->assign('fecha',$fecha);
$template->assign('descripcion',$descripcion);
$template->assign('asunto',$asunto);
$template->assign('valor',$valor);
$template->assign('iva',$iva);
$template->assign('descuento',$descuento);
$template->assign('total',$total);
$template->display('modifica_cuenta_pago.tpl');
}
/*____________________________________________________________________FIN */

function guardar_modificar($idcuentas_contrato,$fecha,$descripcion,$asunto,$valor,$iva,$descuento,$total,$idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$consulta= "UPDATE  informacion_de_cuenta  SET descripcion='$asunto',valor='$valor',iva='$iva',descuento='$descuento',total='$total' WHERE fk_idcuentas_contrato='$idcuentas_contrato'";
	 $this->realizarOperacion($consulta);

$consulta2= "UPDATE  cuentas_contrato SET descripcion='$descripcion',fecha='$fecha'  WHERE idcuentas_contrato='$idcuentas_contrato'";
	 $this->realizarOperacion($consulta2);
	 
$template->assign('id',$idc);	  
$template->assign('modificar_cuenta_contrato','Usted há modificado una cuenta de pago de contrato');
$template->display('modificar_cuenta_contrato.tpl');	 

}


function maquinascontrato($idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$i=0;
$consulta=mysql_query("SELECT * FROM maquinaria_contratada WHERE fk_idcontrato='$idc'");
while($maquinaria=mysql_fetch_array($consulta))
{
$idmaquina[]=$maquinaria['fk_idmaquina'];

$datos=mysql_query("SELECT * FROM maquinas WHERE idmaquina='$idmaquina[$i]'");
while($datosmaquina=mysql_fetch_array($datos))
{
$nombremaquina[]=$datosmaquina['tipodemaquina']	;


$trabajos=mysql_query("SELECT * FROM mantenimiento  WHERE fk_idmaquina ='$idmaquina[$i]'");
$fechax=mysql_fetch_array($trabajos);
	

$fechax[1];
$fbd = explode ("-", $fechax[1]);
$ano = $fbd[0];
$mes = $fbd[1]; 
$dia = $fbd[2]; 

/*Aqui tomo la fecha de hoy*/      
date_default_timezone_set('America/bogota');  
date ( "Y:n:j" , $fecha );
$hoy=date ( "Y" ).' -'.date ( "n" ).' - '.date ( "j" );
$fh = explode ("-", $hoy);

$anoh = $fh[0];
$mesh = $fh[1];
$diah = $fh[2];


//calculo timestam de las dos fechas
$timestamp1 = mktime(0,0,0,$mes,$dia,$ano);
$timestamp2 = mktime(4,12,0,$mesh,$diah,$anoh);

//resto a una fecha la otra
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;

//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24)+1;

//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);
if($nombremaquina[$i]=='Volco'){
if($dias_diferencia<=1){
$respuesta1[]="<div id='block_1' class='barlittle'></div>";	
}
else{
$respuesta1[]= " <img src='/emarcosas/templates/img/oil-icon-amarillolleno.png' height='22' width='22'/> ";	
}
}
else{
$fechax['contador_hora'];
if($fechax[2]<=5){
$respuesta1[]="<div id='block_1' class='barlittle'></div>";	
}
else
{
$respuesta1[]="<img src='/emarcosas/templates/img/oil-icon-amarillolleno.png' height='22' width='22'/>";		
}
}
}//fin while interno

/* Ultimo Trabajo */
$ut=mysql_query("SELECT * FROM trabajo WHERE  fk_idmaquina LIKE '%$idmaquina[$i]%' AND tipo_trabajo='contrato' ORDER BY `trabajo`.`fecha_de_trabajo` ASC
");
while($ultimotrabajo=mysql_fetch_array($ut))
{
   	$maquinasg[$i]=$ultimotrabajo[5];
}
    $trabajo[$i]=$maquinasg[$i];


$i=$i+1;	

}// Fin del For Externo


$template->assign('idmaquina',$idmaquina);
$template->assign('nombremaquina',$nombremaquina);
$template->assign('idc',$idc);
$template->assign('ultimotrb',$ultimotrb);
$template->assign('respuesta',$respuesta1);
$template->assign('utrabajo',$trabajo);
$template->display('maquinascontrato.tpl');	
}

function agregarmaquinac($idc)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 


$contador=0;
$contador2=0;
$consulta=mysql_query("SELECT * FROM  maquinaria_contratada WHERE fk_idcontrato='$idc'");
while($respuesta=mysql_fetch_array($consulta))
{
$maquinaria_contratada[]=$respuesta['fk_idmaquina'];	
$contador++;
}

$consulta2=mysql_query("SELECT * FROM  maquinas");
while($respuesta2=mysql_fetch_array($consulta2))
{
$maquinas[]=$respuesta2['idmaquina'];	
$contador2++;
}

if($contador==0)
{

$consulta2=mysql_query("SELECT * FROM  maquinas");
while($respuesta2=mysql_fetch_array($consulta2))
{
$resultado[]=$respuesta2['idmaquina'];	

}

}
else
if($contador==$contador2)
{
$resultado[]='No hay maquinas disponibles';
}
else
{
$result = array_diff($maquinas,$maquinaria_contratada);
$resultado=$result; 
}

$template->assign('idc',$idc);
$template->assign('idtipo',$resultado);
$template->display('agregarmaquinac.tpl');	
}

function guardarmaquinac($idc,$idmaquina)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$consulta= "INSERT INTO maquinaria_contratada (fk_idmaquina,fk_idcontrato) values ('$idmaquina','$idc')";
$this->realizarOperacion($consulta);
$template->assign('idc',$idc);
$template->assign('mac',' Maquina agregada al contrato');
$template->display('guardarmaquinac.tpl');	
}


function eliminarmc($idc,$idm)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$consulta =("DELETE FROM maquinaria_contratada WHERE  fk_idmaquina='$idm' AND fk_idcontrato='$idc'");
$this->realizarOperacion($consulta);
$template->assign('idc',$idc);
$template->assign('eliminarmac',' Maquina eliminada del contrato'.'Cod. '.$idm);
$template->display('msn_elimina_mac.tpl');		 
}

/*___________________________________________________________________________________________________ */
/*:::::::::::::::::::::::::::::::: FINAL CONTROL DE CONTRATOS::::::::::::::::::::::::::::::::::::::::: */
/*:::::::::::::::::::::::::::::::: CUENTAS POR PAGAR:::::::::::::::::::::::::::::::::::::::::::::::::: */
function cuentaspagar()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 	

/*CUENTAS OPERADOR*/
$cont=0;
$k=0;
$operador=mysql_query("SELECT * FROM  trabajo_operador WHERE estadodepago='pendiente' ");
while($operadordeuda=mysql_fetch_array($operador))
{
$cont=$cont+$operadordeuda['valor'];
$k++;	
}
/*______________________________________________________________________ */

/*CUENTAS PROVEEDOR*/
$aux=0;
$i=0;
$aux2=0;
$j=0;
$consulta=mysql_query("SELECT * FROM  factura_compra WHERE estado='pendiente' ");
while($proveedorco=mysql_fetch_array($consulta))
{
 $aux=$aux+$proveedorco['valor_combustible'];
$i++;
}
 
$consultalu=mysql_query("SELECT * FROM  factura_lubricante WHERE estado='pendiente'");
while($proveedorlu=mysql_fetch_array($consultalu))
{
	$aux2=$aux2+$proveedorlu['precio'];
    $j++;
}

$K=0;
$cuentas=mysql_query("SELECT * FROM  cuentas_de_cobro WHERE estado='pendiente'");
while($cuentaspago=mysql_fetch_array($cuentas))
{
	$aux3=$aux3+$cuentaspago['valor_pendiente'];
    $k++;
}

   $gastoproveedor=$aux+$aux2;
   $template->assign('gastocuentacobro',$aux3);
   $template->assign('gastooperador',$cont);
   $template->assign('gastoproveedor',$gastoproveedor);
   $template->display('cuentas_de_pago_cobro.tpl');	
}

/*_____________________________________________________________________________________________________*/
/*CONTROL DE CUENTAS DE COBRO */

function cuentas_cobro()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$cont=0;
$consulta=mysql_query("SELECT * FROM cuentas_de_cobro WHERE cargando='no'");
while($resultados=mysql_fetch_array($consulta))
{
$idcuentas_cobro[]=$resultados['idcuentacobro'];
$valor[]=$resultados['valor'];
$ciudad[]=$resultados['ciudad'];
$valor_pendiente[]=$resultados['valor_pendiente'];
$fecha[]=$resultados['fecha'];	
$estado[]=$resultados['estado'];	
$fk_idevento[]=$resultados['fk_idevento'];	

$consultaevento=mysql_query("SELECT * FROM evento WHERE idevento='$fk_idevento[$cont]'");
while($resultadoevento=mysql_fetch_array($consultaevento))
{
$tipo_evento[]=$resultadoevento['tipo_evento'];	
}
$cont++;
}
$template->assign('idcuentas_cobro',$idcuentas_cobro);
$template->assign('valor',$valor);
$template->assign('valor_pendiente',$valor_pendiente);
$template->assign('ciudad',$ciudad);
$template->assign('fecha',$fecha);
$template->assign('estado',$estado);
$template->assign('fk_idevento',$fk_idevento);
$template->assign('tipo_evento',$tipo_evento);
$template->display('control_cuentas_cobro.tpl');	
}

/*_____________________________________________________________________________________________________ */

/* Cuentas de cobro*/

function insertar_nc($ciudad,$fecha,$numerodecuenta,$estado,$cliente,$tidcliente,$idcliente,$cobrante,$tidcobrante,$idcobrante,$valorletras,$dinero,$despago,$nombre,$cedula,$telefono,$direccion,$vpendiente,$aboono,$actividades,$ide,$actividad)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$cuenta= "INSERT INTO cuentas_de_cobro(idcuentacobro,estado,ciudad,fecha,valor,valor_pendiente,nombre_deudor,id_deudor,nombre_cobrante,id_cobrante,valor_en_letras,forma_pago,nombre_responsable,id_responsable,telefono_responsable,direccion_responsable,actividad,fk_idevento) values ('$numerodecuenta', '$estado','$ciudad','$fecha','$dinero','$vpendiente','$cliente','$idcliente','$cobrante','$idcobrante','$valorletras','$despago','$nombre','$cedula','$telefono','$direccion','$actividad','0')";
$this->realizarOperacion($cuenta);

$template->assign('ok','Usted ha generado una nueva cuenta de cobro');
$template->display('msn_cuenta_cobrar.tpl');
		
	
}

function cuentadecobro($ide)
{
	
	
global $template; /* Variable global para enviar mensajes al tpl deseado */ 	
$cont=0;
$evento=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide'");
while($idevento=mysql_fetch_array($evento))
{
$cont++;	
}// final del while 1

if($cont>0)
{	
$ccobro=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide'");
while($cuentas=mysql_fetch_array($ccobro))
{
	$idcuentas=$cuentas['idcuentacobro'];
}

$cantidad=0;
$valor=0;
$consulta=mysql_query("SELECT * FROM trabajo WHERE  fk_id_evento='$ide' ");
while($resultado=mysql_fetch_array($consulta))
{
  $cantidad=$cantidad+$resultado['cantidad'];    
}

$consultaevento=mysql_query("SELECT * FROM evento WHERE idevento='$ide'");
while($resultadoevento=mysql_fetch_array($consultaevento))
{
$idevento=$resultadoevento['idevento'];	
$fecha=$resultadoevento['fecha'];
$lugar=$resultadoevento['lugar'];
$maquina=$resultadoevento['fk_idmaquina'];
 $valor=$valor+$resultadoevento['ingresos'];
}

$valorpendiente=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide'");
while($vpendiente=mysql_fetch_array($valorpendiente))
{
$valor_pendiente=$vpendiente['valor_pendiente'];
}


$template->assign('cantidad',$cantidad);
$template->assign('valor',$valor);	
$template->assign('valor_pendiente',$valor_pendiente);	
$template->assign('ide',$ide);
$template->assign('lugar',$lugar);
$template->assign('fecha',$fecha);
$template->assign('maquina',$maquina);
$template->assign('idcuentas',$idcuentas);
$template->display('cuentadecobro.tpl');	


}
else
{

$cuenta= "INSERT INTO cuentas_de_cobro(idcuentacobro,fk_idevento,cargando) values ('', '$ide','si')";
$this->realizarOperacion($cuenta);

$ccobro=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide'");
while($cuentas=mysql_fetch_array($ccobro))
{
	$idcuentas=$cuentas['idcuentacobro'];
	
}

$cantidad=0;
$valor=0;
$consulta=mysql_query("SELECT * FROM trabajo WHERE  fk_id_evento='$ide' ");
while($resultado=mysql_fetch_array($consulta))
{
  $cantidad=$cantidad+$resultado['cantidad'];
   
}

$consultaevento=mysql_query("SELECT * FROM evento WHERE idevento='$ide'");
while($resultadoevento=mysql_fetch_array($consultaevento))
{
$idevento=$resultadoevento['idevento'];
$lugar=$resultadoevento['lugar'];	
$fecha=$resultadoevento['fecha'];
$maquina=$resultadoevento['fk_idmaquina'];
$valor=$valor+$resultadoevento['ingresos'];
}

$template->assign('ide',$idevento);
$template->assign('cantidad',$cantidad);
$template->assign('lugar',$lugar);
$template->assign('fecha',$fecha);	
$template->assign('maquina',$maquina);	
$template->assign('valor',$valor);	
$template->assign('idcuentas',$idcuentas);
$template->display('cuentadecobro.tpl');	

}
}
function  faltaide($cuentas)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$cont=0;
$consulta=mysql_query("SELECT * FROM `cuentas_de_cobro` ORDER BY `cuentas_de_cobro`.`idcuentacobro` DESC LIMIT 0 , 30");
while($result=mysql_fetch_array($consulta))
{	
$numeromayor[]=$result['idcuentacobro'];
}
$cont=$numeromayor[0];
$cont=$cont+1;


$template->assign('ide',$cuentas);
$template->assign('idcuentas',$cont);
$template->assign('mensajeid','Usted No Ha Seleccionado Ningún Evento');
$template->display('cuentadecobro.tpl');		

}

function guardarcuentadecobro($ciudad,$fecha,$numerodecuenta,$estado,$cliente,$tidcliente,$idcliente,$cobrante,$tidcobrante,$idcobrante,$valorletras,$dinero,$despago,$nombre,$cedula,$telefono,$direccion,$vpendiente,$aboono,$actividades,$ide,$actividad)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 	
$actualizar= "UPDATE  cuentas_de_cobro  SET estado ='$estado',ciudad='$ciudad', fecha ='$fecha',valor='$dinero',valor_pendiente='$vpendiente',nombre_deudor='$cliente',id_deudor='$idcliente',nombre_cobrante='$cobrante',id_cobrante='$idcobrante',valor_en_letras='$valorletras',forma_pago='$despago',nombre_responsable='$nombre',id_responsable='$cedula',telefono_responsable='$telefono',direccion_responsable='$direccion',actividad='$actividad',fk_idevento='$ide',cargando='no'  WHERE  idcuentacobro='$numerodecuenta'";
	 $this->realizarOperacion($actualizar);	
	 	 
$actualizareve= "UPDATE  evento SET cuenta='generada'  WHERE  idevento='$ide'";
$this->realizarOperacion($actualizareve);	

$template->assign('ok','Usted ha generado una nueva cuenta de cobro');
$template->display('msn_cuenta_cobrar.tpl');
		

}

function vercuentacobro($idcuenta)
{

global $template; /* Variable global para enviar mensajes al tpl deseado */ 

$consulta=mysql_query("SELECT * FROM cuentas_de_cobro WHERE idcuentacobro='$idcuenta'");
while($nuevaconsulta=mysql_fetch_array($consulta))
{
	$ciudad=$nuevaconsulta['ciudad'];
	$fecha=$nuevaconsulta['fecha'];
	$estado=$nuevaconsulta['estado'];
	$nombre_deudor=$nuevaconsulta['nombre_deudor'];
	$id_deudor=$nuevaconsulta['id_deudor'];
	$nombre_cobrante=$nuevaconsulta['nombre_cobrante'];
	$id_cobrante=$nuevaconsulta['id_cobrante'];
	$valor_en_letras=$nuevaconsulta['valor_en_letras'];
	$valor=$nuevaconsulta['valor'];
	$forma_pago=$nuevaconsulta['forma_pago'];
	$nombre_responsable=$nuevaconsulta['nombre_responsable'];
	$id_responsable=$nuevaconsulta['id_responsable'];
	$telefono_responsable=$nuevaconsulta['telefono_responsable'];
	$direccion_responsable=$nuevaconsulta['direccion_responsable'];
}



$consultatrb=mysql_query("SELECT * FROM cuentas_de_cobro WHERE idcuentacobro='$idcuenta'");
while($consultaevento=mysql_fetch_array($consultatrb))
{
$ide=$consultaevento['fk_idevento'];
}

$cantidad=0;
$valor=0;
$ctrabajo=mysql_query("SELECT * FROM trabajo WHERE  fk_id_evento='$ide' ");
while($cantidadtrb=mysql_fetch_array($ctrabajo))
{
   $cantidad=$cantidad+$cantidadtrb['cantidad'];
     
}

$consultaevento=mysql_query("SELECT * FROM evento WHERE idevento='$ide'");
while($resultadoevento=mysql_fetch_array($consultaevento))
{

$lugar=$resultadoevento['lugar'];	
$fecha2=$resultadoevento['fecha'];
$maquina=$resultadoevento['fk_idmaquina'];
$valor=$valor+$resultadoevento['ingresos'];
}


$valorpendiente=mysql_query("SELECT * FROM cuentas_de_cobro WHERE fk_idevento='$ide'");
while($vpendiente=mysql_fetch_array($valorpendiente))
{
$valor_pendiente=$vpendiente['valor_pendiente'];
}


$template->assign('ide',$ide);
$template->assign('cantidad',$cantidad);
$template->assign('valor_pendiente',$valor_pendiente);
$template->assign('lugar',$lugar);
$template->assign('fecha',$fecha);
$template->assign('fecha2',$fecha2);
$template->assign('maquina',$maquina);	
$template->assign('cuentas',$idcuenta);
$template->assign('ciudad',$ciudad);
$template->assign('fecha',$fecha);
$template->assign('estado',$estado);
$template->assign('nombre_deudor',$nombre_deudor);
$template->assign('id_deudor',$id_deudor);	
$template->assign('nombre_cobrante',$nombre_cobrante);	
$template->assign('id_cobrante',$id_cobrante);	
$template->assign('valor_en_letras',$valor_en_letras);	
$template->assign('valor',$valor);	
$template->assign('forma_pago',$forma_pago);	
$template->assign('nombre_responsable',$nombre_responsable);
$template->assign('id_responsable',$id_responsable);	
$template->assign('telefono_responsable',$telefono_responsable);		
$template->assign('direccion_responsable',$direccion_responsable);
$template->display('vercuentadecobro.tpl');

}


function modificar_cuenta_cobro($ciudad,$fecha,$numerodecuenta,$estado,$cliente,$tidcliente,$idcliente,$cobrante,$tidcobrante,$idcobrante,$valorletras,$dinero,$despago,$nombre,$cedula,$telefono,$direccion,$vpendiente,$aboono,$actividades,$ide)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 	
$actualizar= "UPDATE  cuentas_de_cobro  SET estado ='$estado',ciudad='$ciudad', fecha ='$fecha',valor='$dinero',valor_pendiente='$vpendiente',nombre_deudor='$cliente',id_deudor='$idcliente',nombre_cobrante='$cobrante',id_cobrante='$idcobrante',valor_en_letras='$valorletras',forma_pago='$despago',nombre_responsable='$nombre',id_responsable='$cedula',telefono_responsable='$telefono',direccion_responsable='$direccion',fk_idevento='$ide'  WHERE  idcuentacobro='$numerodecuenta'";
	 $this->realizarOperacion($actualizar);

$consulta=mysql_query("SELECT * FROM cuentas_de_cobro WHERE idcuentacobro='$numerodecuenta'");
while($resultados=mysql_fetch_array($consulta))
{	 

$valor_pendiente=$resultados['valor_pendiente'];
$valorx=$valor_pendiente-$aboono;

$actualizar= "UPDATE  cuentas_de_cobro  SET valor_pendiente ='$valorx'";
	 $this->realizarOperacion($actualizar);
	 		
}
}

function eliminar_cuenta_cobro($cuenta,$ide)
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 	
$consulta =("DELETE FROM cuentas_de_cobro WHERE  idcuentacobro='$cuenta'");
     $this->realizarOperacion($consulta);

$actualizar= "UPDATE  evento SET cuenta ='nogenerada' WHERE idevento='$ide'";
	 $this->realizarOperacion($actualizar);	 
	 
$template->assign('mensaje_eliminar_cuenta_cobro','Usted Eliminó Una Cuenta Por Cobrar');	 
$template->display('eliminar_cuenta_cobro.tpl');	
}

/*_____________________________________________________________________ */

/* ESTADISTICAS DE INGRESO */

function estadisticas_ingreso()
{
global $template; /* Variable global para enviar mensajes al tpl deseado */ 
$template->display('estadisticas_ingreso.tpl');		
}


/*_____________________________________________________________________ */

/*%%%%%*******************************CIERRE DE CONEXION A LA BASE DE DATOS *****************************%%%%%*/

function cerrarConexion(){
if($this->cn)
mysql_close( $this->cn );
}
}

/*----------------------------------->FIN DEL PROGRAMA WWW.EMARCOSAS.COM<-------------------------------------- */
?>