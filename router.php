
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
			$controller = new parceiro_controller();
			break;
		case 'tipoUsuario':
			$controller = new tipoUsuario_controller();
			break;
		case 'categoriaPrato':
			$controller = new categoriaPrato_controller();
			break;
		case 'ingrediente':
			$controller = new ingrediente_controller();
			break;
		case 'produtocms':
			$controller = new produtocms_controller();
			break;
		case 'promocao':
			$controller = new promocao_controller();
			break;
		case 'marketing':
			$controller = new marketing_controller();
			break;
		case 'estoque':
			$controller = new estoque_controller();
			break;
		case 'sobre':
			$controller = new sobre_controller();
			break;
		case 'clientes':
			$controller = new clientes_controller();
			break;
        case 'clientesCms':
			$controller = new clientesCms_controller();
			break;
		case 'exercicios':
			$controller = new exercicios_controller();
			break;
		case 'dicas':
			$controller = new dicas_controller();
			break;
			
		case 'funcionario':
			$controller = new funcionario_controller();
			break;
              
        case 'produtocms':
			$controller = new produtocms_controller();
			break;
              
        case 'carrinho':
            $controller = new carrinho_controller();
            break;  
              
         case 'pedido':
            $controller = new pedido_controller();
            break;       
			
        case 'homeCms':
            $controller = new homeCms_controller();
            break;          
      }

      // call the action
      $controller->{ $action }();
    }
	
	//Função que determina quais são os controllers e os metodos utilizado 
	call($controller, $metodo);
		

	?>
	
