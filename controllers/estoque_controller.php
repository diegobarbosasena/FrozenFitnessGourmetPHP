
<?php
	
	class estoque_controller {
		public $dtFabricacao;
		public $dtValidade;
		public $quantidade;
		public $quantidadeLimite;
        
        
        public function __construct(){
            
            require_once('models/estoque_class.php');
     
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtusuario']) && isset($_POST['codUsuario'])){
                    
                    $this->dtValidade=$_POST['txtdtValidade'];
                    $this->quantidade=$_POST['txtquantidade'];
					$this->quantidadeLimite=$_POST['txtquantidadeLimite'];
                    //$this->entrar();
				}
            }
        }
        
        
        
        public function index(){
            
			$atualizacao = 'inserir';
			$estoque =new Estoque();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Estoque();
				$estoque=$c->selectById($id);
		}
			
           require_once('views/estoque/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$estoque=new Estoque();
            //echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Estoque();
				$estoque=$c->selectById($id);
			}
            require_once('views/estoque/cadastrar.php');
		}
        		
		
		public function listarTodos (){
			 
            $listarEstoque = new Estoque();
            
            return $listarEstoque->selectAll();
			  
		}
		
		public function buscar($codEstoque){
            
            $buscarEstoque = new Estoque();
            
            return $buscarEstoque->selectById();
		  
		}
		
		public function atualizar($codEstoque) {
		
		
		}
		
		public function deletar($codEstoque) {
            $DeletarEstoque = new Estoque();

            $DeletarEstoque->Delete($cod);	
		}
		
		public function inserir() {
		
            $novoEstoque = new Estoque();
            
            $novoEstoque->dtValidade = $this->dtValidade;
			$novoEstoque->quantidade = $this->quantidade;
			$novoEstoque->quantidadeLimite = $this->quantidadeLimite;
			
            	
			$novoEstoque::insert($novoEstoque);
		}
        
       
	}

?>