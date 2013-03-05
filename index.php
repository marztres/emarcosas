<?php

//cargamos las librerías de smarty
require('include.php');

class index {

           
             
             public function display()
             {
                   global $template;

                    //Muestra por pantalla todos los diferentes templates
					
                   $template->display('loging.tpl');
            }
}

$call = new index();
$call->display();

?>