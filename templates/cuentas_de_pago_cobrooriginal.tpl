<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cuentas</title>
</head>
<body>

<hr />
Cuentas de Cobro
<hr />
<input type='text' value='{$gastooperador}' /> <a href='logicadn.php?control=operadores'><input type='button' value='Ver Cuentas'  /></a><hr />



<hr />
Cuentas Por Pagar Operadores
<hr />
<input type='text' value='{$gastooperador}' /> <a href='logicadn.php?control=operadores'><input type='button' value='Ver Cuentas'  /></a><hr />


Cuentas Por Pagar Proveedores
<hr />
<input type='text' value='{$gastoproveedor}' /> <a href='logicadn.php?control=proveedor'><input type='button' value='Ver Cuentas'  /></a>
</body>
</html>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Emarco S.A.S </title>

<link href="/emarcosas/templates/css/cuentas_de_pago_cobro.css"  type="text/css"  rel="stylesheet" media="all"  /> 










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
                    <h1 class="head-h1cen izquierda" > Proveedores </h1>
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
                    <h2 class="head-h2down izquierda noflotante">Perfil de proveedor </h2>
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
                    <a href="logicadn.php?control=proveedor" class="enlinea">
                    	<img src="/emarcosas/templates/img/Botonagregar.png" width="23" height="23"  class="enlinea izquierda"/> 
                    </a>
                    <a href="logicadn.php?control=proveedor" class="enlinea izquierda">Volver a control de proveedores</a>
                    <span class="izquierda">|</span>
                  
                </div>  
            	<!-- fin botones de barra principal --> 
                
                <!--migas de pan -->
                    <div  class="breadCrumb">
                        <ul>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla">Inicio</a>
                            </li>
                            <li >
                                 Proveedores 
                             </li>
                            <li>
                                <a href="logicadn.php?control=inicio" class="tabla"> Control de proveedores</a>
                            </li>
                            <li >
                                <b> Perfil de proveedor </b> 
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
                	Cuentas por cobrar.
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones"> 
    <p class="negrita izquierda parrafosaldo">Se encuentran Compras a credito no canceladas por el valor de: </p> 
    <input type='text' value='{$gastooperador}' class="izquierda cajasaldo"/>
    <a href='logicadn.php?control=operadores'><input type='button' value='Ver Cuentas'  /></a>
            </td> 		
         </tr>


             <tr>
          <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Cuentas por pagar: Operadores.
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones"> 
    <p class="negrita izquierda parrafosaldo">Se encuentran Compras a credito no canceladas por el valor de: </p> 
    <input type='text' value='{$gastooperador}' class="izquierda cajasaldo"/>
    <a href='logicadn.php?control=operadores'><input type='button' value='Ver Cuentas'  /></a>
            </td> 		
         </tr>
         
         <tr> 
         <td class="fondocabeza"> 
            	<p class="negrita tituloinfosup">
                	Cuentas por pagar: Proveedores.
                </p>
            </td>	
		 </tr>
         <tr class="sinfondo">	
            <td class="informacionbotones"> 
    <p class="negrita izquierda parrafosaldo">Se encuentran Compras a credito no canceladas por el valor de: </p> 
    <input type='text' value='{$gastoproveedor}' class="izquierda cajasaldo" />
    <a href='logicadn.php?control=proveedor'><input type='button' value='Ver Cuentas'  /></a>
            </td> 		
         </tr>
         
    

                
   
 
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