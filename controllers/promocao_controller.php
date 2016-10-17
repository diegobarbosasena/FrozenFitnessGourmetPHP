
<?php
	
	class promocao_controller {
		
		public $nomePromocao;
		public $dtInicial;
		public $dtFinal;
		public $valorDesconto;
        
        
        public function __construct(){
            
            require_once('models/promocao_class.php');
     
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtNomePromocao']) && isset($_POST['codPromocao'])){
                    
                    $this->nomePromocao=$_POST['txtNomePromocao'];
                    $this->dtInicial=$_POST['txtDtInicial'];
					$this->dtFinal=$_POST['txtDtFinal'];
					 $this->valorDesconto=$_POST['txtDesconto'];
                    
				}
            }
        }
        
        
        
        public function index(){
            
			$atualizacao = 'inserir';
			$promocao=new Promocao();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Promocao();
				$promocao=$c->selectById($id);
			}
			
           require_once('views/promocao/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$promocao=new Promocao();
            //echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Usuario();
				$promocao=$c->selectById($id);
			}
            require_once('views/promocao/cadastrar.php');
		}
        		
		
		public function listarTodos (){
			 
            $listarPromocao = new Promocao();
            
            return $listarPromocao->selectAll();
			  
		}
		
		public function buscar($codPromocao){
            
            $buscarPromocao = new Promocao();
            
            return $buscarPromocao->selectById();
		  
		}
		
		public function atualizar($codPromocao) {
		
		
		}
		
		public function deletar($codPromocao) {
            $DeletarPromocao = new Promocao();

            $DeletarPromocao->Delete($cod);	
		}
		
		public function inserir() {
		
            $novoPromocao = new Promocao();
            
            $novoPromocao->usuario = $this->usuario;
			$novoPromocao->senha = $this->senha;
            	
			$novoPromocao::insert($novoPromocao);
		}
  
	}

?>