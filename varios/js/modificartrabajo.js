
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
document.trabajo.servicio.focus();
}
/*_________________________________*/



/*--->FUNCIONES QUE AL PRESIONAR ENTER PASE A OTRA CAJA DE TEXTO */

//Foco a fecha
function focoafecha(z){	
var sitio=(trabajo.lugar.value);
tecla=(document.all) ? z.keyCode : z.which;

  if(tecla==13 && sitio!="") 
  {
  document.trabajo.lugar.className="";	  
  document.trabajo.fecha.focus();
}
if(tecla==13 && sitio==""  ){
	alert("Rectifque el campo \"Lugar de Trabajo\" ");
	return;
}
}
/*_________________________________*/

/*cantidad del servicio*/

function cantidadservicio(z){	
var sitio=(trabajo.servicio.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<0){
  document.trabajo.servicio.className="";		 
  document.trabajo.servicio.focus(); 	
}
  
if( sitio==0) 
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
var sitio=(trabajo.valor.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<0){
  document.trabajo.valor.className="";		 
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
var sitio=(trabajo.gastoco.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<0){
  document.trabajo.gastoco.className="";		 
  document.trabajo.gastoco.focus(); 	
}
  
if( sitio==0) 
  {
  alert("Valor invalido"); 
  document.trabajo.gastoco.value="";
  }
else
if(sitio!=""){
 document.trabajo.proveedor_lu.focus();
}
}
}

/*__________________________________*/

function gastolubricante(z){	
var sitio=(trabajo.gastolu.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<=0){
  document.trabajo.gastolu.className="";		 
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
    var ia=parseInt(trabajo.ingresosacomulados.value);
	var ga=parseInt(trabajo.gastosacomulados.value);
	var ua=parseInt(trabajo.usoacomulados.value);
       
	var glub=valorgalon*this.gastolub;
	
	
	var ingresos=(this.cantidad*this.valor)+ia;	
	var gastos= this.gastocomb+this.gastooperador+glub+ga;
	var ingtotales=ingresos-gastos;	
	var nuevacantidad=this.cantidad+ua;
	
	
	if(isNaN(ingtotales))
	  {
		
	  }
	else
	  {
		  
		
		document.trabajo.cantidaduso.value=nuevacantidad;   
	    document.trabajo.ingtotales.value=ingresos;
	    document.trabajo.gastotales.value=gastos;
	    document.trabajo.gananciastotales.value=ingtotales;
		document.trabajo.factura2.value=valorfactura  ;
		
	  }
  }
  
  function calcularvolco (cantidad, valor,gastocomb,gastolub)
  {
    this.cantidad = cantidad;
    this.valor = valor;
    this.gastocomb = gastocomb;
	this.gastolub = gastolub;
	
		
	var ingresos=(this.cantidad*this.valor);
	var pagoop=(ingresos-this.gastocomb)*0.20;
	var gastos= this.gastocomb+this.gastolub+pagoop;
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
		
	  } 
	
  }
  
  
function resultado ()
  {
	
	
	var galon=parseInt(trabajo.gastolu.value);
	var valorgalon =parseInt( document.getElementById('galones').value);
	if(galon > valorgalon){
		alert("El tamaño es mayor a lo que hay en bodega");
		 document.trabajo.gastolu.value="";
		 document.trabajo.gananciastotales.value="";
	}
	
	else
	{
	var maquina=(trabajo.tipo.value);   
    var cant=parseInt(trabajo.servicio.value);
    var val=parseInt(trabajo.valor.value);
    var gastocombu=parseInt(trabajo.gastoco.value);
    var gastolu=parseInt(trabajo.gastolu.value);
    var gastoop=parseInt(trabajo.valorop.value);
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
  
  function pregunta()
    {
    var respuesta = confirm("¿Seguro que deseas Asignarle un Trabajo a esta Maquina?")
    if (!respuesta){
    return false;
    }
	}
	
  	

/* FUNCION SI MODIFICAN EL GASTO SE EJECUTA */	
function gastooperador(z){	

tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( sitio>0 || sitio<=0){
  document.trabajo.gastolu.className="";		 
  document.trabajo.gastolu.focus(); 	
}

  
else
if(sitio!=""){	

    var sitio=(trabajo.valorop.value);
    document.trabajo.guardar.focus();
    var cant=parseInt(trabajo.servicio.value);
    var val=parseInt(trabajo.valor.value);
    var gastocombu=parseInt(trabajo.gastoco.value);
    var gastolu=parseInt(trabajo.gastolu.value);
    var gastoop=parseInt(trabajo.valorop.value);
	
	
	result= new calcular(cant,val,gastocombu,gastolu,gastoop);
	  
 
}
}
}


 function cofirmareliminar()
    {
    var respuesta = confirm("¿Seguro Que Desea Eliminar Este Elemento?")
    if (!respuesta){
		return false;
    }
	}

/*
var pagina="http://www.yahoo.com"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 20000);
*/