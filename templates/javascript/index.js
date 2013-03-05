{literal}
function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
}

function foco() {
	document.datosuser.usuario.focus(); 

}


function validacampos(){	
var sitio=parseInt(datosuser.usuario.value);
if(sitio>=0 || sitio<0){
	document.datosuser.usuario.className="rojo"; 
	document.datosuser.usuario.value="";
	return;
}
else{
document.datosuser.usuario.className="normal";	
}
}

//funcion que valida al presionar enter
function focoaclave(z){	
var sitio=(datosuser.usuario.value);
tecla=(document.all) ? z.keyCode : z.which;

  if(tecla==13 && sitio!="") 
  {
  document.datosuser.usuario.className="correcto";	  
  document.datosuser.clave.focus();
}
if(tecla==13 && sitio==""  ){
	alert("Rectifque el campo \"Nombre\" ");
	document.datosuser.usuario.className="error";
	return;
}
}


function validaceldanombre(){
	var sitio=(datosuser.usuario.value);
    if(sitio>=0 || sitio<0){
	document.datosuser.usuario.className="error";
	document.datosuser.usuario.value=""
	document.datosuser.usuario.focus(); 
}
else{ document.datosuser.usuario.className="correcto";
     

}

}