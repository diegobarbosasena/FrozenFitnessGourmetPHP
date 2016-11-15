
<?php 
	
	class carrinho_controller{
        

		public $codCarrinho;
        public $cliente;
		public $prato;
		public $qtd;
        public $total;
        
		
		public function __construct(){
            
            require_once('models/carrinho_class.php');
            require_once('models/clientes_class.php');
            require_once('models/prato_class.php');
            
            $cliente = new Cliente();
            $prato = new Prato();

        }
		
		public function iniciaAtributos(){
			
			$this->cliente->codCliente = $_SESSION['cod'];   
			$this->prato->codPrato = $_GET['id'];      
			
		}
         
        	
        public function listarTodos (){
			 
       
			  
		}
		
		public function buscar(){
            
          
		  
		}
		

		
		public function deletar() {
            
		}
		
		public function inserir() {
		
            $this->iniciaAtributos();
            
            $carrinho = new Carrinho();
            
            $carrinho->cliente->codCliente = $this->cliente->codCliente;
            $carrinho->prato->codPrato = $this->prato->codPrato;
            
            if($carrinho->insert()){
                header("Location: ../../home/produtos");
            }
        
                         
        }
		
	}
	
	
	
	
?>