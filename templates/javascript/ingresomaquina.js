

function MuestraMaquinas(str){
		var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
			  if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("maquina").innerHTML=xmlhttp.responseText;
					 }
				  }
			  xmlhttp.open("GET","opcionmaquina.php?m="+str,true);
				xmlhttp.send();
			
		
}
// codigo de desactivar submit enter

function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
}
/*_________________________________*/

/*Aqui hago el foco hacia la primera caja de texto */
function foco() {
	document.fmaquina.id.focus(); 
	document.fmaquina.id.className="error"; 

}
/*_________________________________*/

function validaceldaid(){
	var sitio=(fmaquina.id.value);
    if(sitio==""){
	alert("El campo Id es Obligatorio");	
	document.fmaquina.id.className="error";	
	document.fmaquina.id.focus();
	}
	
	else{ document.fmaquina.id.className="correcto";
	}
    }

function validaid(){	
var sitio=(fmaquina.id.value);

	document.fmaquina.id.className="normal";
}

function validaid2(z){	
var sitio=(fmaquina.id.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 
if(sitio==""){
	alert("No puede dejar campos en blanco");
	document.fmaquina.id.className="error";
}
else{
 document.fmaquina.id.className="correcto";
 document.fmaquina.maquinas.focus();
}

}
}



