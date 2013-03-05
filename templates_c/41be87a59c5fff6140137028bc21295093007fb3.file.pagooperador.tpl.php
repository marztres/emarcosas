<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 22:40:37
         compiled from "templates\pagooperador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9350ad5c96586b27-32534044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41be87a59c5fff6140137028bc21295093007fb3' => 
    array (
      0 => 'templates\\pagooperador.tpl',
      1 => 1353883234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9350ad5c96586b27-32534044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50ad5c968f0497_76246553',
  'variables' => 
  array (
    'cedula' => 0,
    'saldo' => 0,
    'nombre' => 0,
    'apellido' => 0,
    'edad' => 0,
    'sexo' => 0,
    'telefono' => 0,
    'direccion' => 0,
    'correo' => 0,
    'sueldo' => 0,
    'pagadiario' => 0,
    'idto' => 0,
    'idtop' => 0,
    'num' => 0,
    'valor' => 0,
    'lugar' => 0,
    'fecha' => 0,
    'idtrabajo' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ad5c968f0497_76246553')) {function content_50ad5c968f0497_76246553($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/pagooperador.css"  type="text/css"  rel="stylesheet" media="all"  /> 

<script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>


   
	<link rel="stylesheet" type="text/css" href="varios/css/jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
 
<!--inicio scroll -->
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es Obligatorio.\n'; }
    } if (errors) alert('Error de datos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>


<script type="text/javascript">

$(document).ready(function() {
	$('body').ready(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:210}, 2500);
		return false;
	});
});
</script>


<!--fin scroll  -->    
    
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
           $(".fecha").datepicker();
        });
    </script>    


<script language="javascript">
var total=0;

function sumar(valor) {
total += valor;

document.formulario.total.value=total;
document.formulario.servicios.value=total;

var pagodias=parseInt(formulario.pagodias.value);
var servicios=parseInt(formulario.servicios.value);
var resultado= pagodias+servicios;
document.formulario.totalapagar.value=resultado;
document.formulario.totalapagar.value=resultado;

}

function restar(valor) {
total-=valor;
document.formulario.total.value=total;
document.formulario.servicios.value=total;

var pagodias=parseInt(formulario.pagodias.value);
var servicios=parseInt(formulario.servicios.value);
var resultado= pagodias+servicios;
document.formulario.totalapagar.value=resultado;
}

/* Funcion para calcular los Dias */
function numerodias(z)
{	
var dias=parseInt(formulario.dias.value);
var valordia=parseInt(formulario.valordia.value);
tecla=(document.all) ? z.keyCode : z.which;
if(tecla==13){
 if( dias>=0){	
var total=dias*valordia;
document.formulario.totaldia.value=total;
document.formulario.pagodias.value=total;
document.formulario.totalapagar.value=total;	
document.formulario.totaldia.focus(); 	
 	
}
else
{
alert("valor no valido");
document.formulario.totaldia.value="";		
}
}
}

function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) 
  {
  return false;
}
}

</script>



<!--tablas dinamicas -->

<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('.example').dataTable();
				
			} );
		</script>
<!--tablas dinamicas -->

</head>

<body  onkeypress="return pulsar(event)">


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

		<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    <!--titulo de modulo -->
                    <h1 class="head-h1cen izquierda" > Operador </h1>
				    <!--fin titulo de modulo -->
                    
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
                    <h2 class="head-h2down izquierda noflotante"> Pago  </h2>
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
                    <a href="logicadn.php?control=registrooperador&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonvolver2.png" width="32" height="32"  class="enlinea izquierda volver"/> 
                    </a>
                    <a href="logicadn.php?control=registrooperador&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea izquierda"> volver a el registro de operador</a>
                    <span class="izquierda">|</span>
                     <a href="logicadn.php?control=registrodepago&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea">
                    	<img src="/emarcosas/templates/img/botonregistrodecuentas.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=registrodepago&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
" class="enlinea izquierda"> Ver Registro de pagos</a>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Operadores 
                            </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Control de operador</a>
                            </li>
                            <li >
                                 <a href="logicadn.php?control=inicio" class="tabla">Registro de operador</a> 
                            </li>
                            <li >
                                 <a href="logicadn.php?control=inicio" class="tabla">registro de pagos</a> 
                            </li>
                            <li >
                                 <b> Pago </b> 
                            </li>
                            
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->
 <form name="formulario" action="logicadn.php?control=pagarop&& id=<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
&& saldo=<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
 " method="post" ONSUBMIT='return preguntapagop();' > 
<div id="login">
	<table class="informacion"> 
    	<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del Operador.
                </p>
            </td>	
		</tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
            

          
<!--inicio tabla formularios -->
     
     <table class="formularios">
 

 
 
    	<tr>
            <td 	class='filas'>   <p >Cedula:</p>    </td>    
			<td 	class='filas'>	 <p >Nombre:</p>    </td>
			<td  	class='filas'>	 <p >Apellidos:</p> </td>
			<td 	class='filas' >  <p >edad:</p>      </td>
            <td 	class='filas' >  <p >Sexo:</p>      </td>
				
		</tr> 
		<tr>
			<td 	>	<input type='text' name='cedula' value="<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
"  />   </td>    
			<td 	>	<input type='test'value='<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
'  />    </td>
			<td  	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
' />  </td>
			<td 	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['edad']->value;?>
'  />     </td>
			<td 	>   <input type='text'value='<?php echo $_smarty_tpl->tpl_vars['sexo']->value;?>
' />       </td>
        </tr>
        <tr>
			<td 	>	<p > Telefono: </p>   </td>    
			<td 	>	<p > Dirección: </p>    </td>
			<td  	>   <p >  Correo: </p>  </td>
			<td 	>   <p > sueldo: </p>     </td>
			<td 	>   <p >  Saldo Pendiente: </p>  </td>
        </tr>
        
        <tr>
			<td 	>	<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
'  />        </td>    
			<td 	>	<input type='text' value='<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
'  />    </td>
			<td  	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
'  />  </td>
			<td 	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['sueldo']->value;?>
'  />     </td>
			<td 	>   <input type='text' value='<?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
' />       </td>
        </tr>
           
           </table>
	
     
     <!--fin tabla formularios -->
      
  
               
            </td> 		
        </tr>
        <tr> 
            <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Información del pago
                </p>
            </td>	
		 </tr>
        <tr class="sinfondo">	
            <td class="informacionbotones cajastop"> 
          	
 			
 		    <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(0, null, 0);?>
			<p class="izquierda negrita"> Numero de dias: </p> 
            	<input name='dias' type="text" class="izquierda" id="dias" onkeypress='numerodias(event)'/> 
			<p class="izquierda negrita">   Valor total dias a Pagar: </p> 
                <input name='totaldia' type="text"  class="izquierda" id="totaldia"/>
				
                <input type="hidden" name='valordia' value='<?php echo $_smarty_tpl->tpl_vars['pagadiario']->value;?>
' class="izquierda" />
			<p class="izquierda negrita"> Fecha: </p> 
            	<input name='fecha' type="text" class="fecha izquierda" id="fecha"/>
            
            
 
  
               
            </td> 		
        </tr>
     	
        <tr> 
            <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Servicios Pendientes 
                </p>
            </td>	
		 </tr>
         </table>
    	 
          
       <table class="controldemaquinas example izquierda">
             <thead class="fondocabeza">
                <tr>
                    <td 	class='seleccionar fondocabeza'>	<b>-</b></td>    
                    <td 	class='tipomaquina fondocabeza'>	<b>Id</b></td>
                    <td  	class='idmaquina fondocabeza'>		<b>Valor</b></td>
                    <td 	class='trabajomaquina fondocabeza' ><b>Lugar</b></td>
                    <td  	class='registromaquina fondocabeza'><b>Fecha</b></td>
                    <td 	class='notificacion fondocabeza' >	<b>Id Trabajo</b></td>
                    <td  	class='ultimotrabajo fondocabeza'>	<b>Estado</b></td>
                </tr>
             </thead> 
                
                    <?php  $_smarty_tpl->tpl_vars['idtop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idtop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['idto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idtop']->key => $_smarty_tpl->tpl_vars['idtop']->value){
$_smarty_tpl->tpl_vars['idtop']->_loop = true;
?>
                 
                    <td>
                    <input  name="trbop[<?php echo $_smarty_tpl->tpl_vars['idtop']->value;?>
]"  type="checkbox" onClick="if (this.checked) sumar(<?php echo $_smarty_tpl->tpl_vars['valor']->value[$_smarty_tpl->tpl_vars['num']->value];?>
); else restar(<?php echo $_smarty_tpl->tpl_vars['valor']->value[$_smarty_tpl->tpl_vars['num']->value];?>
)" ></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['idtop']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['valor']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lugar']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['idtrabajo']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</td>
                </tr>
                <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
                <?php } ?>
                </tr>
		     
       </table>
	<br />


     
 <table class="informacion"> 
    	
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita seleccionados "> Valor de los Servicios Seleccionados: </p> 
          <input type="text" name="total" value="0" class="izquierda ">
	         
    
            </td> 		
        </tr>
		<tr> 
        	<td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Finalizar Pago
                </p>
            </td>	
		</tr>
        
        <tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita subtotal"> Valor de los Servicios Seleccionados: </p> 
          <input type="text" name="servicios" class="izquierda " />
    
            </td> 		
        </tr>
		<tr class="sinfondo">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita subtotal2"> Valor de los dias seleccionados: </p> 
          
          <input name='pagodias' type='text' class="izquierda" id="pagodias" />
             
    
            </td> 		
        </tr>
			<tr class="fondocabeza">	
            <td class="informacionbotones"> 
    
    
    	  <p class="izquierda negrita subtotal3"> Valor Total de este Pago: </p> 
          <input name='totalapagar' type='text' class="izquierda" id="totalapagar"/>
             
    
            </td> 		
        </tr>
		<tr class="sinfondo">	
            <td class="informacionbotones"> 
    		
            <input type="submit" onclick="MM_validateForm('dias','','RisNum','fecha','','R','pagodias','','RisNum','totalapagar','','RisNum');return document.MM_returnValue" value='Realizar Pago' />
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
		</html><?php }} ?>