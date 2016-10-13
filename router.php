
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
			  require_once('models/categoria_class.php');
              $controller = new cms_controller();
              break;
              
          case 'contatos':
               $controller = new contatos_controller();
              break;
              
          
          case 'usuarios':
               $controller = new usuarios_controller();
              break;
			  
		 case 'categoria':			
	
			$controller = new categoria_controller();			
	
			break;
			
		case 'objetivo':			
			$controller = new objetivo_controller();		

			break;

		case 'funcionario':
			$controller = new funcionario_controller();
			break;
			
		case 'tipoUsuario':
			$controller = new tipoUsuario_controller();
			break;
			

		case 'parceiro':
			$controller = new parceiro_controller();
			break;

		case 'prato':
			$controller = new prato_controller();
			break;
		case 'parceiro':
			$controller = new prato_controller();
			break;
		case 'tipoUsuario':
			$controller = new prato_controller();
			break;
		case 'categoriaPrato':
			$controller = new categoriaPrato_controller();
			break;
			
      }

      // call the action
      $controller->{ $action }();
    }
	
	//Função que determina quais são os controllers e os metodos utilizado 
	call($controller, $metodo);
		

	?>
	
