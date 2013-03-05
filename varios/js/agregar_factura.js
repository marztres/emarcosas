function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
}

function calculapu(z)
{	
var valorfl=parseInt(facturalu.valor.value);
var cgalones=parseInt(facturalu.galones.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( cgalones>0){	
var preciounitario=valorfl/cgalones;
document.facturalu.precio.value=preciounitario;	
document.facturalu.precio.focus(); 	
}
else
{
alert("valor no valido");
document.facturalu.galones.value="";		
}
}
}
