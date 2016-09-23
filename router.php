

	
	
	
	
	
	<?php 
	
	
	function call($controller, $action) {
      // require the file that matches the controller name
      require_once('controllers/' . $controller . '_controller.php');

      // create a new instance of the needed controller
      switch($controller) {
          case 'home':

             // require_once('models/contatos.php');
              $controller = new home_controller();
              break;
              
          case 'produtos':
              $controller = new produtos_controller();
                break;
              
          case 'cms':
              $controller = new cms_controller();
              break;
              
          case 'contatos':
               $controller = new contatos_controller();
              break;
              
          
          case 'usuarios':
               $controller = new usuarios_controller();
              break;

      }

      // call the action
      $controller->{ $action }();
    }
	
	//Função que determina qual o controller e os metodos utilizado 
	call($controller, $metodo);
		

	?>
	
