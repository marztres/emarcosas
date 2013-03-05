<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head >
	<title>Trabajo</title>
<script language="javascript" type="text/javascript" src="varios/js/modificartrabajo.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<link rel="stylesheet" type="text/css" href="varios/css/default.css" />
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
    
    
    
    
</head>
<body onkeypress="return pulsar(event)" onLoad="hola()"  >
	
	<div id="contenido-demo">	
		   
           <form name="trabajo" method="post" action="logicadn.php?control=nuevosdatos&& nuevotrabajo={$idtrabajo} "  ONSUBMIT='return pregunta();' >
           <table border='1' >
            <tr>
              <td>
               <label>CODIGO DE MAQUINA</label>
              </td>
              <td>
               <input type='text' name='tipo' value='{$codigomaquina}' readonly='readonly'>    
              </td>
              <td>
               <label>TIPO DE MAQUINA</label>
              </td>
              <td>
               <input type='text' name='codigo' value='{$tipomaquina}' readonly='readonly'>    
              </td>
              <td>
               <label>CAMBIO DE ACEITE:</label>
              </td>
              <td>
              {$num=0}
              {foreach from=$respuesta item=rpt}
               <label>{$rpt} </label>
               {$num=$num+1}
              {/foreach}
              </td>
              <td>
                <a  href="logicadn.php?control=eru&& idtu={$idtrabajo}">Eliminar</a> 
              </td>
            </tr> 
              <td>
                <label>LUGAR DE TRABAJO: </label>
              </td>
              <td>
                <input type="text" name="lugar" value="{$lugartrabajo}" onkeypress='focoafecha(event)' >
              </td>
              <td>
                <label> SELECCIONAR FECHA:</label>
              </td>              
              <td>
	            <input type="text" name="fecha" id="fecha" value="{$fechatrabajo}" size="12"/>
              </td>
            </tr>
            <tr>
              <td>
                <label> CANTIDAD DEL SERVICIO </label>
              </td>
              <td>
                <input type="text" name="servicio" value="{$cantidaduso}" onkeypress='cantidadservicio(event)' onChange="resultado(event)" >
              </td>
               <td>
                <label> VALOR DEL SERVICIO </label>
              </td>
              <td>
                <input type="text" name="valor" size="12" value="{$valoruso}" onkeypress='valorservicio(event)' onChange="resultado(event)" >
              </td>
            </tr>
            <tr>
              <td>
                <label>GASTO COMBUSTIBLE</label>
              </td>
              <td>
              <input type='text' name="gastoco"  value="{$valor_co}" onkeypress='gastocombustible(event)' onChange="resultado(event)" >
              </td>
              <td>
                <label>PROVEEDOR COMBUSTIBLE</label>
              </td>
              <td> 
               
                <select name="proveedor_co">
                
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
              <td>
              <label>FORMA DE PAGO</label>
              </td>
              <td>
              <select name="fpago_co">
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
             <tr> 
              <td>
              </td>
              <td>
              </td>
              <td>
              </td>
              <td>
              PROVEEDOR LUBRICANTE
              </td>
              <td> 
              
              <select name="proveedor_lu" onChange="MuestraFactura(this.value)">
                
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
              <td>
              <input type='hidden' name='factura2' />
                <div id="factura"> Usted selecionó la factura: <label>{$factura}</label>  </div>
                
              </td>             
            </tr>
            <tr>
              <td>
               <label> GASTO LUBRICANTE</label>
              </td>
              <td>
               <input type="text" value='{$valor_lu}' name='gastolu'  onkeypress='resultado(event)' > 
              </td>
            </tr>
            <tr>
              <td>
                <label >OPERADOR</label>
              </td>
              <td>
                <select name="operadores" > 
                
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
              <td>
                <label>VALOR OPERADOR </label>
              </td>
              <td>
                <input type='text' name='valorop' value="{$pagooperador}"  onkeypress='gastooperador(event)' >
              </td>  
            </tr>
             <tr>
               <td colspan="4"><hr></td>
             </tr>
             <tr>
               <td>
               <label> INGRESOS TOTALES</label>
               </td>
               <td>
               <input type='text' name='ingtotales' readonly='readonly' value="{$ingtotales}">
               </td>
               <td>
               <label> GASTOS TOTALES</label>
               </td>              
               <td>
                <input type='text' name='gastotales' readonly='readonly' value="{$gastotales}">
               </td>
               </tr>
              <tr>
                <td>
                 <label> GANACIAS TOTALES</label>
                </td> 
                <td>
                 <input type="text" name='gananciastotales' readonly='readonly' value="{$gantotales}"  >
                </td>
                <td>
                 <label>CANTIDAD USO </label>
                </td>
                <td>
                <input type="text" name='cantidaduso'  readonly='readonly' value="{$cantidaduso}">
                </td>
              </tr>
              <tr>
                <td>
                 {$valorgalon}
                </td>
                <td>
                  <input type='submit' name="guardar" value='Modificar Trabajo'  >
                </td>
                <td>
                  <input type="hidden" name="ingresosacomulados" value="{$ingtotales}"  >
                </td>
                <td>
                  <input type='hidden' name='gastosacomulados' readonly='readonly' value="{$gastotales}">
                </td>
                <td>
                   <td>
                  <input type='hidden' name='ganacomulados' readonly='readonly' value="{$gantotales}">
                </td>
                   <input type="hidden" name='usoacomulados'  readonly='readonly' value="{$cantidaduso}">
                </td>
                <td>
                </td>
              </tr>
         
              </tr>
           </table>
              {$mensaje}
             </form>


    </div>
		
</body>
</html>

