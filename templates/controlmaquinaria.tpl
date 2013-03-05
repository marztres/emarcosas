<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Emarco S.A.S </title>
	
    
    <!--inicio de hojas de estilo-->
	<link href="/emarcosas/templates/css/control de maquinaria.css"  type="text/css"  rel="stylesheet" media="all"  /> 
	<!--inicio de hojas de estilo-->
    
     <script language="javascript" type="text/javascript" src="varios/js/funcionestrabajo.js"></script>
    <!--tablas dinamicas -->
<script language="javascript" type="text/javascript" src="templates/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="templates/jquery/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
				
			} );
		</script>
<!--tablas dinamicas -->
   	
 	
</head>

<body>


<div id="total"> 

	<div id="cuerpo"> 
 
 		<div id="contenido"> 

			<div id="cabecera"> 
				<div id="head" > 	
                	<!--logo -->
                    <a href="#" class="head-logoiz izquierda">  </a>
					<!-- fin logo -->
                    
                    <!--titulo de modulo -->
                    <h1 class="head-h1cen izquierda" > Maquinas </h1>
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
                    <h2 class="head-h2down izquierda noflotante"> Control de maquinas  </h2>
			    	<!-- fin titulo seccion -->
                </div>
				<!--fin head -->
                
                
                <!-- contenedor de enlaces -->
                <div id="divenlaces">
                    <a href="logicadn.php?control=inicio" class="inicio boton-espacio-alto" title="Ir a inicio"></a>
                	<a href="logicadn.php?control=maquinaria" class="maquinas boton-espacio-alto" title="Ir a Control de maquinas"></a>
                    <a href="logicadn.php?control=mantenimiento" class="mantenimiento boton-espacio-alto" title="Ir a mantenimiento"></a>
                    <a href="logicadn.php?control=contratos" class="contratos boton-espacio-alto" title="Ir a Control de contratos"></a>
                    <a href="logicadn.php?control=operadores" class="operadores boton-espacio-alto" title="Ir a Control de operadores"></a>
                    <a href="logicadn.php?control=proveedor" class="proveedores boton-espacio-alto" title="Ir a Control de proveedores"></a>
                    <a href="/emarcosas/logicadn.php?control=controlcuentas" class="cuentas boton-espacio-alto"></a>
                    <a href="/emarcosas/logicadn.php?control=estadisticas_ingresos" class="estadisticas boton-espacio-alto"></a> 
                </div>  
                <!-- fin contenedor de enlaces -->
                
				<!--botones de barra principal -->             
                <div id="divbotones" >
                    <a href="logicadn.php?control=nuevamaquina" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=nuevamaquina" class="enlinea izquierda">Agregar Maquina</a>
                    <span class="izquierda none">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Maquinas 
                             </li>
                            <li>
                                Control de Maquinas
                            </li>
                         </ul>
                    </div>
             </div>
			 <!--fin cabecera -->


<div id="login">

<table id="example" class='controldemaquinas izquierda'>
   		<thead class="fondocabeza">
            <tr>
 			  <td class='tipomaquina fondocabeza' >Tipo</td>
              <td class='idmaquina fondocabeza' > Id</td> 
              <td class='registromaquina fondocabeza'> Registro</td>
   			  <td class='notificacion fondocabeza'>Aceite</td>
              <td class='ultimotrabajo fondocabeza'>Ultimo Trabajo</td>
              <td class='eliminar fondocabeza'>	Eliminar</td>
   			</tr>
		</thead>
   			
  				
                {$num=0}    
  				{foreach from=$maquinas item=tipos}
  				{if $num>=0}     
  			
            <tr>
				<td>{$tipos}</td>
				<td>{$codigomaquinas[$num]}</td>
  				<td><a href='logicadn.php?control=registroevento&&id={$codigomaquinas[$num]}&& tipo={$tipos}' class='tabla'> Registro de Evento</a></td>
  				<td class="aceite">
            		<a href='logicadn.php?control=mantenimiento&& cm={$codm[$num]}' >{$respuesta1[$num]}</a></td>
  				<td>{$trabajos[$num]}</td>
  				<td class="basura"><a href="logicadn.php?control=emaq&& idmaq={$codigomaquinas[$num]}" onclick="return cofirmareliminar()" class='tabla'><img src="/emarcosas/templates/img/eliminar.gif" height="16" width="16" class="eliminarimg" </img></a></td>
	 			{$num=$num+1}
 				{/if}    
 				{/foreach}
       		</tr>
</table>  
		<!--<a href="destruirsesion.php"> Cerrar Sesión </a> -->
        

   
 
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