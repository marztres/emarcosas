
/*Aqui Bloqueo el submit para la tecla enter */
function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
}
/*_________________________________*/
// Coloco el cursor en la priemera caja de texto
function hola(){
document.trabajo.lugar.focus();
}
/*_________________________________*/



/*--->FUNCIONES QUE AL PRESIONAR ENTER PASE A OTRA CAJA DE TEXTO */

//Foco a fecha
function focoafecha(z){	
var sitio=document.getElementById("lugar").value;
tecla=(document.all) ? z.keyCode : z.which;

  if(tecla==13 && sitio!="") 
  {
  document.trabajo.lugar.className="correcto";	  
  document.trabajo.fecha.focus();
}
if(tecla==13 && sitio==""  ){
	alert("Rectifque el campo \"Lugar de Trabajo\" ");
	return;
}
}
/*_________________________________*/

function fechacantidadservicio(z){	
var sitio=document.getElementById('fecha').value;
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio!=''){
  document.trabajo.fecha.className="correcto ";		 
  document.trabajo.servicio.focus(); 	
}
  
if( sitio=="") 
  {
  alert("Valor invalido"); 
  document.trabajo.fecha.value="";
  }
else
if(sitio!=""){
 document.trabajo.servicio.focus();
}
}
}


/*cantidad del servicio*/
function cantidadservicio(z){	
var sitio=document.getElementById('servicio').value;
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<0){
  document.trabajo.servicio.className="correcto ";		 
  document.trabajo.servicio.focus(); 	
}
  
if( sitio<0) 
  {
  alert("Valor invalido"); 
  document.trabajo.servicio.value="";
  }
else
if(sitio!=""){
 document.trabajo.valor.focus();
}
}
}

/*________________________________*/

function valorservicio(z){	
var sitio=document.getElementById('valor').value;
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<0){
  document.trabajo.valor.className="correcto ";		 
  document.trabajo.valor.focus(); 	
}
  
if( sitio==0) 
  {
  alert("Valor invalido"); 
  document.trabajo.valor.value="";
  }
else
if(sitio!=""){
 document.trabajo.gastoco.focus();
}
}
}

/*__________________________________*/

function gastocombustible(z){	
var sitio=document.getElementById('gastoco').value;
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<0){
  document.trabajo.gastoco.className="correcto ";		 
  document.trabajo.gastoco.focus(); 	
}
  
if( sitio<0) 
  {
  alert("Valor invalido"); 
  document.trabajo.gastoco.value="";
  }
else
if(sitio!=""){
 document.trabajo.proveedor_co.focus();
}
}
}

/*__________________________________*/

function gastolubricante(z){	
var sitio=document.getElementById('gastolu').value;
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<=0){
  document.trabajo.gastolu.className="correcto ";		 
  document.trabajo.gastolu.focus(); 	
}
  
else
if(sitio!=""){	
 document.trabajo.valorop.focus();
}
}
}

/*__________________________________*/

/*----> CLASE CALCULAR */

/* Calculamos toda las operaciones */ 
function calcular (cantidad, valor,gastocomb,gastolub,gastooperador)
  {
    this.cantidad = cantidad;
    this.valor = valor;
    this.gastocomb = gastocomb;
	this.gastolub = gastolub;
	this.gastooperador = gastooperador;	
	
	
	var valorgalon =parseInt( document.getElementById('galon').value);
    var valorfactura =parseInt( document.getElementById('facturalu').value);
	
	   
	var glub=valorgalon*this.gastolub;
	var goperador=this.gastooperador*this.cantidad;
	
	var minutos=this.cantidad*60/1;
	var valormin=this.valor/60;
	var ingresosant=valormin*minutos;
	var ingresos=parseFloat(ingresosant).toFixed(2);
	var gastos= this.gastocomb+goperador+glub;
	var ingtotales=ingresos-gastos;	
	if(isNaN(ingtotales))
	  {
		
	  }
	else
	  {
		document.trabajo.cantidaduso.value=this.cantidad;   
	    document.trabajo.ingtotales.value=ingresos;
	    document.trabajo.gastotales.value=gastos;
	    document.trabajo.gananciastotales.value=ingtotales;
		document.trabajo.factura2.value=valorfactura  ;
	  }
  }
  
  function calcularvolco (cantidad, valor,gastocomb,gastolub,gastooperador)
  {
    this.cantidad = cantidad;
    this.valor = valor;
    this.gastocomb = gastocomb;
	this.gastolub = gastolub;
	this.gastooperador = gastooperador;
	
	var valorgalon =parseInt( document.getElementById('galon').value);
	var vlubricante=this.gastolub*valorgalon;	
	var valorfactura =parseInt( document.getElementById('facturalu').value);
		
	var ingresos=this.cantidad*this.valor;
	var pagoop=(ingresos-this.gastocomb)*0.20;
	
	var gastos= this.gastocomb+vlubricante+pagoop;
	
	var ingtotales=ingresos-gastos;	
	if(isNaN(ingtotales))
	  {
		
	  }
	else
	  {
		   
		   
		
		   
		document.trabajo.cantidaduso.value=this.cantidad;
	    document.trabajo.valorop.value=pagoop;
		document.trabajo.ingtotales.value=ingresos;
	    document.trabajo.gastotales.value=gastos;
	    document.trabajo.gananciastotales.value=ingtotales;	
		document.trabajo.factura2.value=valorfactura  ;	
		
	  } 
	
  }
  

  
function resultado ()
  {
		var galon=parseInt( document.getElementById('gastolu').value);
	var valorgalon =parseInt( document.getElementById('galones').value);
	if(galon > valorgalon){
		alert("El tamaño es mayor a lo que hay en bodega");
		 document.trabajo.gastolu.value="";
		 document.trabajo.gananciastotales.value="";
	}
	
	else
	{
	var maquina=(trabajo.tipo.value);   
    var cant=parseFloat(trabajo.servicio.value);
    var val=parseInt(trabajo.valor.value);
    var gastocombu=parseInt(trabajo.gastoco.value);
    var gastolu=parseInt(trabajo.gastolu.value);
    var gastoop=(trabajo.valorop.value);	
	var ingguardados=parseInt(trabajo.ingtotales.value);
	var gasguardados=parseInt(trabajo.gastotales.value);
	if(maquina != 'Volco')
	 {
	result= new calcular(cant,val,gastocombu,gastolu,gastoop);
	 }
	else
	 {
	  result=new calcularvolco(cant,val,gastocombu,gastolu,gastoop);
	 }
	
	}
	
  }
  
 

/* FUNCION SI MODIFICAN EL GASTO SE EJECUTA */	
function gastooperador(z){	

tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<=0){
  document.trabajo.gastolu.className="correcto";		 
  document.trabajo.gastolu.focus(); 	
}
  
else
if(sitio!=""){	

    var sitio=(trabajo.valorop.value);
    document.trabajo.operadores.focus();
	document.trabajo.valorop.className="correcto";
	var tipo=( document.getElementById('tipo').value);
    var cant=parseFloat(trabajo.servicio.value);
    var val3=(trabajo.valor.value);
	var val2 = val3.split(",");
	var val1 = val2.join("");
	var val=parseInt(val1);
    var gastocombu3=(trabajo.gastoco.value);
	var gastocombu2=gastocombu3.split(",");
	var gastocombu1=gastocombu2.join("");
	var gastocombu=parseInt(gastocombu1);
    var gastolu=parseInt(trabajo.gastolu.value);
    var gastoop=(trabajo.valorop.value);
	var gastoop = gastoop.split(",");
	var gastoop = gastoop.join("");
	var gastoop = parseInt(gastoop);
	if(tipo!='Volco')
	{
	result= new calcular(cant,val,gastocombu,gastolu,gastoop);
	}
	else
	 {
			var gastoco=parseInt( document.getElementById('gastoco').value);
		    var gastolu=parseInt( document.getElementById('gastolu').value);
			var valorop=parseInt( document.getElementById('valorop').value);
			var ingtotales=parseInt( document.getElementById('ingtotales').value);
			var gastotal=gastoco+gastolu+valorop;
			var cantotal=ingtotales-gastotal;
			document.trabajo.gastotales.value=gastotal;
			document.trabajo.gananciastotales.value=cantotal;
			
					
	 }
}
}
}


/*TODAS LAS PREGUNTAS?????????????????????????????????????????????????????????????? */

 function pregunta()
    {
    var respuesta = confirm("¿Seguro que deseas asignarle un trabajo a esta máquina?")
    if (!respuesta){
    return false;
    }
	}
	
	 function preguntafacturalu()
    {
    var respuesta = confirm("¿Seguro que deseas agregar esta factura?")
    if (!respuesta){
    return false;
    }
	}
	
	  function preguntaevento()
    {
    var respuesta = confirm("¿Seguro que deseas asignarle un evento a esta Maquina?")
    if (!respuesta){
    return false;
    }
	}
	
	
	 function preguntacontrato()
    {
    var respuesta = confirm("¿Seguro que deseas agregar un nuevo contrato?")
    if (!respuesta){
    return false;
    }
	}
	
	function cofirmareliminar()
	{
	 var respuesta = confirm("¿Seguro que deseas eliminar este elemento?")
    if (!respuesta){
    return false;
    }	
	}


function preguntapago()
{
 var respuesta = confirm("¿Seguro que deseas pagar esta factura?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_cancela_pago()
{
 var respuesta = confirm("¿Seguro que deseas cancelar el pago ?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_agregar_maquina()
{
 var respuesta = confirm("¿Seguro que deseas agregar una nueva máquina ?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_finalizar_contrato()
{
 var respuesta = confirm("¿seguro que deseas finalizar este contrato?")
    if (!respuesta){
    return false;
    }	
}


function pregunta_guardar_acta()
{
 var respuesta = confirm("¿Seguro que deseas agregar esta acta?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_guardar_cuenta()
{
 var respuesta = confirm("¿Seguro que deseas agregar esta cuenta de pago?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_reanudar_contrato()
{
 var respuesta = confirm("¿Seguro que deseas reanudar este contrato?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_asignar_mantenimiento()
{
 var respuesta = confirm("¿Seguro que deseas aplicar esta acción?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_guardarevento()
{
 var respuesta = confirm("¿Seguro que deseas guardar este evento?")
    if (!respuesta){
    return false;
    }	
}

function pregunta_operador()
{
 var respuesta = confirm("¿Seguro que deseas registrar este operador?")
    if (!respuesta){
    return false;
    }	
}

function preguntapagop()
{
 var respuesta = confirm("¿Seguro que deseas pagarle a este operador?")
    if (!respuesta){
    return false;
    }	
}

function pagarflu()
{
 var respuesta = confirm("¿Seguro que deseas pagar esta factura?")
    if (!respuesta){
    return false;
    }	
}

function cancelarflu()
{
 var respuesta = confirm("¿Seguro que deseas cancelar el pago de esta factura?")
    if (!respuesta){
    return false;
    }	
}

/*FIN PREGUNTAS?????????????????????????????????????????????????????? */

/*FUNCIONES PARA VALIDAR LAS CELDAS ANTERIORES */

function validaceldalugar(){
	var sitio=document.getElementById("lugar").value ;
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else{ document.trabajo.lugar.className="correcto";
	}
    }
	
function validaceldafecha(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else{ document.trabajo.fecha.className="correcto";
	}
    }
	
function validaceldacantidad(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else{ document.trabajo.servicio.className="correcto";
	}
    }	

function validaceldavalor(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else{ document.trabajo.valor.className="correcto";
	}
    }
	
	
function validaceldaproco(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else{ document.trabajo.valor.className="correcto";
	}
    }	


function validaceldanombreco(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;
	 
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}
	else{ document.trabajo.gastoco.className="correcto";
	}
    }	


function validaceldaformapago(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;

	 
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	}
	else{ document.trabajo.proveedor_co.className="correcto";
	}
    }

function validaceldagastolu(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=(trabajo.document.getElementById("proveedor_co").value.value);
	var fpago_co=document.getElementById("fpago_co").value;
	 
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	}
	else
	if(fpago_co=="")
	{
	document.trabajo.fpago_co.className="error";	
	document.trabajo.fpago_co.focus();	
	}
	else{ document.trabajo.fpago_co.className="correcto";
	}
    }   
	
	function validaceldacantidad_lu(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;
	var fpago_co=document.getElementById("fpago_co").value;
	var gastolu=document.getElementById("gastolu").value;
	 
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	}
	else
	if(fpago_co=="")
	{
	document.trabajo.fpago_co.className="error";	
	document.trabajo.fpago_co.focus();	
	}
	
	else{ document.trabajo.fpago_co.className="correcto";
	}
    }   


    function validaceldanombre_lu(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;
	var fpago_co=document.getElementById("fpago_co").value;
	var gastolu=document.getElementById("gastolu").value;
	 
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	}
	else
	if(fpago_co=="")
	{
	document.trabajo.fpago_co.className="error";	
	document.trabajo.fpago_co.focus();	
	}
	
	else
	if(gastolu=="")
	{
	document.trabajo.gastolu.className="error";	
	document.trabajo.gastolu.focus();	
	}
	
	else{ document.trabajo.gastolu.className="correcto";
	}
    } 

    
	function validaceldavalorop(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;
	var fpago_co=document.getElementById("fpago_co").value;
	var gastolu=document.getElementById("gastolu").value;
	var proveedor_lu=document.getElementById("proveedor_lu").value;
	
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	}
	else
	if(fpago_co=="")
	{
	document.trabajo.fpago_co.className="error";	
	document.trabajo.fpago_co.focus();	
	}
	
	else
	if(proveedor_lu=="")
	{
	document.trabajo.proveedor_lu.className="error";	
	document.trabajo.proveedor_lu.focus();	
	}
	
	
	else{ document.trabajo.proveedor_lu.className="correcto";
	}
    }
	
	
	function validaceldanombreop(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;
	var fpago_co=document.getElementById("fpago_co").value;
	var gastolu=document.getElementById("gastolu").value;
	var proveedor_lu=document.getElementById("proveedor_lu").value;
	var valorop=document.getElementById("valorop").value;
	
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	}
	else
	if(fpago_co=="")
	{
	document.trabajo.fpago_co.className="error";	
	document.trabajo.fpago_co.focus();	
	}
	
	else
	if(proveedor_lu=="")
	{
	document.trabajo.proveedor_lu.className="error";	
	document.trabajo.proveedor_lu.focus();	
	}
	
	else
	if(gastolu=="")
	{
	document.trabajo.gastolu.className="error";	
	document.trabajo.gastolu.focus();	
	}
	
	else
	if(valorop=="")
	{
	document.trabajo.valorop.className="error";	
	document.trabajo.valorop.focus();	
	return false;
	}

	else{ document.trabajo.valorop.className="correcto";
	}
    }
	
	
	/*BOTON */
	function validaceldaboton(){
	var sitio=document.getElementById("lugar").value;
	var fecha=document.getElementById("fecha").value;
	var servicio=document.getElementById("servicio").value;
	var valor=document.getElementById("valor").value;
	var gastoco=document.getElementById("gastoco").value;
	var proveedor_co=document.getElementById("proveedor_co").value;
	var fpago_co=document.getElementById("fpago_co").value;
	var gastolu=document.getElementById("gastolu").value;
	var proveedor_lu=document.getElementById("proveedor_lu").value;
    var valorop=document.getElementById("valorop").value;	
	var operadores=document.getElementById("operadores").value;	
	var facturalu=document.getElementById("ingtotales").value;	
	
    if(sitio=="")
	{
	document.trabajo.lugar.className="error";	
	document.trabajo.lugar.focus();
	return false;
	}
	else
	if(fecha=="")
	{
	document.trabajo.fecha.className="error";	
	document.trabajo.fecha.focus();	
	return false;
	}
	else
	if(servicio=="")
	{
	document.trabajo.servicio.className="error";	
	document.trabajo.servicio.focus();
	return false;	
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	return false;
	}
	else
	if(valor=="")
	{
	document.trabajo.valor.className="error";	
	document.trabajo.valor.focus();	
	return false;
	}
	else
	if(gastoco=="")
	{
	document.trabajo.gastoco.className="error";	
	document.trabajo.gastoco.focus();	
	return false;
	}	
	else
	if(proveedor_co=="")
	{
	document.trabajo.proveedor_co.className="error";	
	document.trabajo.proveedor_co.focus();	
	return false;
	}
	else
	if(fpago_co=="")
	{
	document.trabajo.fpago_co.className="error";	
	document.trabajo.fpago_co.focus();	
	return false;
	}
	
	else
	if(gastolu=="")
	{
	document.trabajo.gastolu.className="error";	
	document.trabajo.gastolu.focus();	
	return false;
	}
	
	else
	if(valorop=="")
	{
	document.trabajo.valorop.className="error";	
	document.trabajo.valorop.focus();	
	return false;
	}
		
	else
	if(operadores=="")
	{
	document.trabajo.operadores.className="error";	
	document.trabajo.operadores.focus();	
	return false;
	}
	
	else
	if(proveedor_lu=="")
	{
	document.trabajo.proveedor_lu.className="error";	
	document.trabajo.proveedor_lu.focus();	
	return false;
	}
	
	else
	if(facturalu=="")
	{
	alert("No se ha seleccionado ninguna factura");	
	return false;
	}
				
	else{
	document.trabajo.operadores.className="correcto";
	var respuesta = confirm("¿Seguro que deseas Asignarle un Trabajo a esta Maquina?")
    if (!respuesta){
    return false;
    }
	
	}
    }

/*////////////////////////////////////////////////////////////////// */


/*FUNCIONES  PARA AGREGAR MAQUINA */


function validamaquna()
{

function fechacantidadservicio(z){	
var id=document.getElementById('id').value;
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if(fecha!=''){
  document.fmaquina.id.className="correcto ";		 
  document.fmaquina.contador.focus(); 	
}
  
if(fecha=="") 
  {
  alert("Valor invalido"); 
  document.trabajo.id.value="";
  }
  
}
}


}




/*_____________________________________________________________________ */
