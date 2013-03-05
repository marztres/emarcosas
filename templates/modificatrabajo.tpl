<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/emarcosas/templates/css/modificartrabajo.css"  type="text/css"  rel="stylesheet" media="all"  /> 
<title>Emarco S.A.S </title>


<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	

	<link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
 	<script type="text/javascript">
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'yy/mm/dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});    

        $(document).ready(function() {
           $("#fecha").datepicker();
        });
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' Valor Invalido.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' Valor Invalido '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es Obligatorio.\n'; }
    } if (errors) alert('Error al procesar los datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
    </script>
    
    {literal}
    <script language="javascript">

 	function MuestraFactura2(str)
  	{
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
					 document.getElementById("factura_resultado").innerHTML=xmlhttp.responseText;
					
					 }
				  }
			  xmlhttp.open("GET","modifica_facturas_lu_resultado.php?fr="+str,true);
			  
				xmlhttp.send();
				
									
  	}
	
    </script>


	<script language="javascript">

 	function MuestraFactura(str)
 	 	{
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
					 document.getElementById("factura").innerHTML=xmlhttp.responseText;
					
					 }
				  }
			  xmlhttp.open("GET","modifica_factura_lu.php?f="+str,true);
			  
				xmlhttp.send();
				
									
  	}
	</script>
	{/literal} 

<!--inicio scroll -->
{literal}

<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:215}, 2500);
		return false;
	});
});
</script>
{/literal}

<!--fin scroll  -->

    


</head>




<body onkeypress="return pulsar(event)" onLoad="hola()">


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

	<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    
                   {if $tipot == 'contrato'}
                    {literal} 
<style>
.contratos {background:url(/emarcosas/templates/img/botoncontratos-hover.png) no-repeat !important;  width:93px;}
.contratos:hover {background:url(/emarcosas/templates/img/botoncontratos-hover.png) no-repeat; }
.maquinas {background:url(/emarcosas/templates/img/botonmaquinas.png) no-repeat !important; width:94px; }
.maquinas:hover {background:url(/emarcosas/templates/img/botonmaquinas-hover.png) no-repeat; }
</style>
{/literal}
                    <h1 class="head-h1cen izquierda" > Contratos </h1>
                    {else}

                    <h1 class="head-h1cen izquierda" > Maquinas </h1>
                    {/if} 
                    
                   
                    
                    <!-- usuario + soporte -->
                    <div id="head-divder" class="izquierda"> 
                    	<!--usuario -->
                    	<div id="head-divder-usuarios" class="izquierda"> 
                        	<span class="estiloinline"> Usuario |</span> 
                            <a href="destruirsesion.php" class="enlaces"> Cerrar Sesión </a> 
                        </div>  
                    	<!--usuario -->
                        
                    	<!--soporte -->
                    	<div id="head-divder-soporte" class="izquierda"> 
                    		<a href="#" class="iconosoporte izquierda enlaces" > </a> 
                        	<a href="#" class="linksoporte izquierda enlaces" > Soporte </a> 
                    	</div>
                    	<!--fin soporte -->
					</div>
                    <!--fin usuario + soporte -->
                	
                    <!--titulo seccion -->
                    <h2 class="head-h2down izquierda noflotante"> Trabajo  </h2>
			    	<!-- fin titulo seccion -->
                </div>
				<!--fin head -->
                
                
                <!-- contenedor de enlaces -->
                <div id="divenlaces">
                	<a href="logicadn.php?control=inicio" class="inicio boton-espacio-alto"></a>
                	<a href="logicadn.php?control=maquinaria" class="maquinas boton-espacio-alto"></a>
                    <a href="logicadn.php?control=mantenimiento" class="mantenimiento boton-espacio-alto"></a>
                    <a href="logicadn.php?control=contratos" class="contratos boton-espacio-alto"></a>
                    <a href="logicadn.php?control=operadores" class="operadores boton-espacio-alto"></a>
                    <a href="logicadn.php?control=proveedor" class="proveedores boton-espacio-alto"></a>
                    <a href="/emarcosas/logicadn.php?control=controlcuentas" class="cuentas boton-espacio-alto"></a>
                    <a href="/emarcosas/logicadn.php?control=estadisticas_ingresos" class="estadisticas boton-espacio-alto"></a> 
                </div>  
                <!-- fin contenedor de enlaces -->
                
				<!--botones de barra principal -->             
                <div id="divbotones" >
                  <a href="javascript:history.back()" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="javascript:history.back()" class="enlinea izquierda">volver a control de eventos</a>
                    <span class="izquierda none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de maquinas</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de eventos</a>
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Registro de trabajo</a>
                            </li>
                            
                            <li>
                                Trabajo
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->


<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información de la Maquina.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
          
          <!--inicio tabla formularios-->

   	<table class="formularios" >
 
 <form name="trabajo" method="post" action="logicadn.php?control=nuevosdatos&& nuevotrabajo={$idtrabajo} "  ONSUBMIT='return pregunta();' >
    	<tr>
            <td 	class='filas'>   <p >Id:</p>    </td>    
			<td 	class='filas'>	 <p >Tipo:</p>    </td>
			<td  	class='filas'>	 <p >Cambio de aceite:</p> </td>
		</tr> 
		<tr>
			<td 	>	<input name='tipo' type='text' class="negrita" id="tipo" value='{$codigomaquina}' readonly='readonly'>   </td>    
			<td 	>	<input name='codigo' type='text' class="negrita" id="codigo" value='{$tipomaquina}' readonly='readonly'>    </td>
			<td  	>   {foreach from=$respuesta item=rpt}
             		    <input name='aceite' type='text' class="cajaaceite" id="aceite" value='{$rpt}'readonly=' readonly'>
              		    {/foreach}  
            </td>
	    </tr>
    </table>
				<!--fin tabla formularios-->               
 
                
                
                
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del trabajo.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
			
            
            
                    <!--inicio tabla formularios-->
   	<table class="formularios">
 
    	<tr>
            <td 	class='filas'>   <p >Lugar de Trabajo:</p>    </td>    
			<td 	class='filas'>	 <p >Fecha:</p>    </td>
			<td  	class='filas'>	 <p >Cantidad del servicio:</p> </td>
			<td 	class='filas' >  <p >Valor del Servicio:</p>      </td>
          
				
		</tr> 
		<tr>
			<td 	>	 <input name="lugar" type="text" id="lugar" onkeypress='focoafecha(event)' value="{$lugartrabajo}" >  </td>    
			<td 	>	<input type="text" name="fecha" id="fecha" value="{$fechatrabajo}" size="12" />    </td>
			<td  	>   <input type="text" name="servicio" value="{$cantidaduso}" onkeypress='cantidadservicio(event)' onChange="resultado(event)" </td>
			<td 	>   <input name="valor" type="text" id="valor" onChange="resultado(event)" onkeypress='valorservicio(event)' onkeyup = "puntitos(this,this.value.charAt(this.value.length-1))" value="{$valoruso}" size="12"  ></td>
        </tr>
           
      </table>
	<!--fin tabla formularios-->      
            
            
            
            
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Gastos.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones"> 

     <!--inicio tabla formularios-->
   	<table class="formularios2 noflotante">
   
    	<tr>
            <td 	class='filas'>   <p >Gasto de Combustible:</p>    </td>    
			<td 	class='filas'>	 <p >Proveedor  de Combustible:</p>    </td>
			<td  	class='filas'>	 <p >Forma de Pago:</p> </td>
				
		</tr> 
		<tr>
			<td 	>	<input name="gastoco" type='text' id="gastoco" onChange="resultado(event)"  onkeypress='gastocombustible(event)' onkeyup = "puntitos(this,this.value.charAt(this.value.length-1))"  value="{$valor_co}" > </td>    
			<td 	>	<select name="proveedor_co" >
                        {$num=0}
                 		{foreach from=$proveedorco item=nombre}
              		    {if $nombrepc == $nombre}
               			<option value="{$idcombustible[$num]}" selected >
                		{$nombre}
                		</option>
               			{else}
                		<option value="{$idcombustible[$num]}"  > {$nombre}</option>
                		{$num=$num+1}
                 		{/if} 
                  		{/foreach}
                        </select>
 			            </td>
						<td  	>  
                        			<select name="fpago_co" >
                                       {if $forma_pago == "credito"}
                                      <option selected>credito </option>
                                      <option>contado </option>
                                       {else}
                                      <option >credito </option>
                                      <option selected >contado </option>
                                      {/if}
                                      </select>  
            </td>
		</tr>
           
      </table>
	<!--fin tabla formularios-->

     
     
               
              	<!--inicio tabla formularios-->          
				<table class="formularios2 izquierda">
   
    	<tr>
            <td 	class='filas'>   <p >Gasto de Lubricante:</p>    </td>    
			<td 	class='filas'>	 <p >Proveedor  de Lubricante:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	>	 <input name='gastolu' type="text" id="gastolu"  onkeypress='resultado(event)' value='{$valor_lu}'  >   </td>    
			<td 	>	 <select name="proveedor_lu" onChange="MuestraFactura(this.value)" >
                            {$num=0}
                            {foreach from=$proveedorlu item=nombre2}
                            {if $nombrep_lu == $nombre2}
                            <option value="{$idlubricante[$num]}" selected >
                            {$nombre2}
                            </option>
                            {else}
                            <option value="{$idcombustible[$num]}"  > {$nombre2} </option>
                           {$num=$num+1}
                           {/if} 
                           {/foreach}
                         </select>
          </td>
   			  
		</tr>
           
      </table>
	<!--fin tabla formularios-->	
              
                <input type='hidden' name='factura2' />
               <div id="factura"  > <p class="facturasel"> Usted selecionó la factura: <label>{$factura}</label> </p>  </div>
              
           
              




          
           
           <!--inicio tabla formularios-->
   	<table class="formularios2 noflotante">
 
    	<tr>
            <td 	class='filas'>   <p >Valor del Operador:</p>    </td>    
			<td 	class='filas'>	 <p >Operador:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	>	<input name='valorop' type='text' id="valorop"  onkeypress='gastooperador(event)' onkeyup = "puntitos(this,this.value.charAt(this.value.length-1))" value="{$pagooperador}" > </td>    
			<td 	>	
                <select name="operadores"  > 
                
                {$num=0}
                {foreach from=$operadores item=nombre3 }
                 {if $operador == $nombre3}
                 <option value="{$idoperadores[$num]} " selected>
                 
                {$nombre3}
                
                </option>
                
                {else}
                
                <option value="{$idoperadores[$num]}"  > {$nombre3} </option>
                {/if}
                 {$num=$num+1}
                 {/foreach}
                </select>
             </td>
        </tr>
           
      </table>
	<!--fin tabla formularios-->
           
           
           
 
            
            
            
                
            </td> 		
        </tr>
        <tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Estadistica de Trabajo.
                </p>
            </td>	
		</tr>
           <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
                <!--inicio tabla formularios-->          
				<table class="formularios2">
   
    	<tr>
            <td 	class='filas'>   <p >Ingresos Totales:</p>    </td>    
			<td 	class='filas'>	 <p >Gastos Totales:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	>     <input name='ingtotales' type='text' id="ingtotales" value="{$ingtotales}" readonly='readonly' > </td>    
			<td 	>	  <input name='gastotales' type='text' id="gastotales" value="{$gastotales}" readonly='readonly' > </td>
   			 
		</tr>
           
      </table>
	<!--fin tabla formularios-->
             
			   
               <!--inicio tabla formularios-->          
				<table class="formularios2">
   
    	<tr>
            <td 	class='filas'>   <p >Ganancias totales:</p>    </td>    
			<td 	class='filas'>	 <p >Cantidad de uso:</p>    </td>
			
				
		</tr> 
		<tr>
			<td 	>   <input name='gananciastotales' type="text" id="gananciastotales" value="{$gantotales}" readonly='readonly'  ></td>    
			<td 	>	<input name='cantidaduso' type="text" id="cantidaduso" value="{$cantidaduso}"  readonly='readonly'     > </td>
   			 
		</tr>
           
      </table>
	<!--fin tabla formularios-->



                       {$valorgalon}
                

                
                  <input type="hidden" name="ingresosacomulados" value="{$ingtotales}"  >
                 <input type='hidden' name='gastosacomulados' readonly='readonly' value="{$gastotales}">
                 <input type='hidden' name='ganacomulados' readonly='readonly' value="{$gantotales}">
                 <input type="hidden" name='usoacomulados'  readonly='readonly' value="{$cantidaduso}">
                
               
         
               
                
               	
                        
            
            
            
            
            
            
            
                
            </td> 		
        </tr>
		<tr class="sinfondo">	
            <td class="informacionbotones"> 
            {$mensaje}
            <input name="guardar" type='submit'   class="izquierda botonguardartra" onclick="MM_validateForm('tipo','','R','codigo','','R','aceite','','R','lugar','','R','fecha','','R','valor','','RisNum','gastoco','','RisNum','gastolu','','RisNum','valorop','','RisNum','ingtotales','','RisNum','gastotales','','RisNum','gananciastotales','','RisNum','cantidaduso','','RisNum');return document.MM_returnValue" value='Modificar Trabajo' >
            
			          
              
             </form>

            
                
            </td> 		
        </tr>

    </table>
    
  


   
 
</div><!--fin login -->


<div id="barra"> 
<p class="izquierda legal" ><a href="#" class="link" >  Informacíon legal </a> <a class="guiontexto"> | </a>  <a href="#" class="link" >  Soporte Tecnico </a> </p>

</div>


</div> 





</div>


<div id="pie"> 


</div>

</div>







</body>
</html>