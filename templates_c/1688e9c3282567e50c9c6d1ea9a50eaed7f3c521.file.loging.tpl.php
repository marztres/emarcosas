<?php /* Smarty version Smarty-3.1.10, created on 2012-09-27 21:20:13
         compiled from "templates\loging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18206505e2fd170da11-11537028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1688e9c3282567e50c9c6d1ea9a50eaed7f3c521' => 
    array (
      0 => 'templates\\loging.tpl',
      1 => 1348617102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18206505e2fd170da11-11537028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_505e2fd18a3c43_16443437',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e2fd18a3c43_16443437')) {function content_505e2fd18a3c43_16443437($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/emarcosas/templates/css/login.css"  type="text/css"  rel="stylesheet" media="all"  /> 
	<script type="text/javascript" src="/emarcosas/templates/javascript/index.js"></script>

	
    <title>Emarco S.A.S </title>

</head>





<body onkeypress="return pulsar(event)" onLoad="foco()">


	<div id="total"> 
		<div id="espacio">
		</div><!--fin div espacio --> 
		<div id="cuerpo"> 
				
                <div id="contenido"> 
					
                    <div id="cabecera"> 
						
                        <div class="izquierda" id="logo">
							<a href="#" >
                        	 	<img src="/emarcosas/templates/img/logoemarco2.png" alt="logo" width="221" height="118" /> 
                        	</a>
 						</div><!--fin div logo -->
                   		
                        <div  id="soporte">
							<a href="#" class="enlacesoporte" >
                            	<span class="titulosoporte">  SOPORTE </span> 
								<img src="/emarcosas/templates/images/soporte.png" width="94" height="69" class="botonsoporte"/>
 							</a> 
						</div> <!--fin div soporte -->
						
                        <div id="separador" class="izquierda">
							<img src="/emarcosas/templates/images/separador.png" alt="separador" width="918" height="16" /> 
						</div> <!--fin div separador -->
					
                    </div><!--fin div cabecera -->
					
                    <div id="login">
						
                        <ul> 
							<li> 
								<p class="acceso"> control de acceso </p> 
     						</li>
     						<li> 
								<div id="formulario">
									<form name="datosuser" method="post" action="validausuario.php">
										<fieldset>
												<input name="usuario"  type="text" onKeyUp="validacampos()" onKeyPress="return focoaclave(event)" id="usuario"/>
     											<input name="clave" type="password"  onmouseup='validaceldanombre()' id="pass" />
											    <label for="email"  id="recuperacion">
												<a href="#" class=" link"> Olvidaste tu contraseña ? </a>
												</label>
      											<input type="image" src="/emarcosas/templates/images/transparente.png" id="registrar"   alt=""   name="Ingresar" />
  										</fieldset>
										<span  id='datosincorrectos'> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 </span>
									</form>
								</div><!--fin div formulario --> 
					    	</li>
			     		</ul>       	
					</div><!--fin div login -->
					<div id="barra"> 
						<p class="izquierda legal" >
                    		<a href="#" class="link" >  Informacíon legal </a> 
                    		<a class="guiontexto"> | </a>  
                    		<a href="#" class="link" >  Soporte Tecnico </a> 
                   		</p>
                	</div><!--fin div barra -->
				</div> <!--fin div contenido -->
		</div><!--fin div cuerpo -->
		<div id="pie"> 
		</div>

</div><!--fin div total -->







</body>
</html>
<?php }} ?>