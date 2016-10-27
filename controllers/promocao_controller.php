
<?php
	
	class promocao_controller {
		
		public $nomePromocao;
		public $dtInicial;
		public $dtFinal;
		public $valorDesconto;
		public $codPromocao;
        
        
        public function __construct(){
            
            require_once('models/promocao_class.php');
     
	         }
		
		public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
			
					$this->codPromocao=$_POST['codPromocao'];
                    $this->nomePromocao=$_POST['txtNomePromocao'];
                    $this->dtInicial=$_POST['txtDtInicial'];
					$this->dtFinal=$_POST['txtDtFinal'];
					$this->valorDesconto=$_POST['txtDesconto'];
				
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
			$this->iniciaAtributo();
			$atualizacao = 'inserir';
			$promocao=new Promocao();
            //echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Promocao();
				$promocao=$p->selectById($id);
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
		$this->iniciaAtributo();
		
		
		}
		
		public function deletar($codPromocao) {
            $DeletarPromocao = new Promocao();

            $DeletarPromocao->Delete($cod);	
		}
		
		public function inserir() {
		
            $novoPromocao = new Promocao();
            
            $novoPromocao->nomePromocao = $this->nomePromocao;
			$novoPromocao->dtInicial = $this->dtInicial;
			$novoPromocao->dtFinal = $this->dtFinal;
			$novoPromocao->valorDesconto = $this->valorDesconto;
            	
			$novoPromocao::insert($novoPromocao);
		}
  
	}

?>