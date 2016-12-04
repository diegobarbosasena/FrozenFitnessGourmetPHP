
<?php 
	
	class carrinho_controller{
        

		public $codCarrinho;
        public $cliente;
		public $prato;
		public $produto;
		public $qtd;
        public $total;
        
		
		public function __construct(){
            
            require_once('models/carrinho_class.php');
            require_once('models/clientes_class.php');
            require_once('models/prato_class.php');
            require_once('models/produto_class.php');
            
            $cliente = new Cliente();
            $prato = new Prato();
            $produto = new Produto();

        }
		
		public function iniciaAtributos(){
			
         
                $this->cliente->codCliente = $_SESSION['cod'];   
                $this->prato->codPrato = $_GET['id'];
                $this->produto->codProduto = $_GET['id'];
			
		}
        
        public function add(){
            
            $this->cliente->codCliente = $_SESSION['cod'];   
            $this->prato->codPrato = $_POST['codPrato'];
            
            $carrinho = new Carrinho();
            
            $carrinho->cliente->codCliente = $this->cliente->codCliente;
            $carrinho->prato->codPrato = $this->prato->codPrato;
            
            
            if($carrinho->insert()){
                header("Location: ../home/venda");
            } 
        }
         
        	
        public function listarTodos (){
			 
       
			  
		}
		
		public function buscar(){
            
          
		  
		}
		
        public function remove() {
            $codCarrinho = $_POST['codCarrinho'];

            $carrinho = new Carrinho();

            if($carrinho->deleteById($codCarrinho)){
                 header("Location: ../home/venda");
            }
		}
		
        
		
		public function deletar() {
            
            $carrinho = new Carrinho();
            
            $carrinho->delete();
		}
		
		public function deletarItem() {
            
            $carrinho = new Carrinho();
            
            if($carrinho->deleteItem($_GET['id'])){
        
				    header("Location: ../../home/personalizado");
			}
		}
        
        
        public function deletarItemCompra() {
            
            $carrinho = new Carrinho();
            
            if($carrinho->deleteItem($_GET['id'])){
        
				    header("Location: ../../home/venda");
			}
		}
		
		public function inserir() {
		
            $this->iniciaAtributos();
            
            $carrinho = new Carrinho();
            
            $carrinho->cliente->codCliente = $this->cliente->codCliente;
            $carrinho->prato->codPrato = $this->prato->codPrato;
           
            if($carrinho->insert()){
                header("Location: ../../home/venda");
            }else{
                
                header("Location: ../../home/login");
            }                                
        }
		
		public function inserirPersonalizado() {
		
            $this->iniciaAtributos();
            
            $carrinho = new Carrinho();
            
            $carrinho->cliente->codCliente = $this->cliente->codCliente;
            $carrinho->produto->codProduto = $_POST['cboItens'];
        
            if($carrinho->insertPersonalizado()){
                header("Location: ../home/personalizado");
            }else{
                
                header("Location: ../home/login");
            }                                
        }
		
	}
	
	
	
	
?>