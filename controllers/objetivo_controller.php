
<?php
	
	class objetivo_controller {
		
		public $nomeCategoriaPrato;
		public $descricaoCategoria;
        
        public function __construct(){
            
            require_once('models/objetivo_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtNomeObjetivo']) && isset($_POST['codCategoriaPratos'])){
					 $this->nomeCategoriaPrato=$_POST['txtNomeObjetivo'];
				$this->descricaoCategoria=$_POST['txtDescricaoObjetivo'];
				}
            }
            
        
        }
        
        public function index(){
            
			$atualizacao = 'inserir';
			$objetivo=new Objetivo();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Objetivo();
				$objetivo=$c->selectById($id);
			}
			
           require_once('views/objetivo/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$objetivo=new Objetivo();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Objetivo();
				$objetivo=$c->selectById($id);
			}
			
			
			require_once('views/objetivo/cadastrar.php');
		}
        
 
		
		public function listarTodos (){
			 
			$listar = new Objetivo();
			return $listar->selectAll();	
		}
		
		public function buscar($codCategoriaPrato){
			
			$buscar = new Objetivo();
			return $buscar->selectById($codCategoriaPrato);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Objetivo();
			$atualizar->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$atualizar->codCategoriaPrato = $_GET['id'];
			$_SESSION['metodo'] = 'atualizar';	
						
			if($atualizar::update($atualizar)){	
				
				header("location: ../objetivo/index".$this->codCategoriaPrato);
			}
		}
        
		public function deletar() {
			
			$codCategoriaPrato = $_GET['id'];
			
			$deletar = new Objetivo();
			if($deletar->delete($codCategoriaPrato)){
				header("location: ../../objetivo/index");
			}	
		}
		
		public function inserir() {
              
			$objetivo = new Objetivo();
			$objetivo->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$objetivo->descricaoCategoria = $this->descricaoCategoria;
			
			
			
				 
			$_SESSION['metodo'] = 'inserir';
			if($objetivo::insert($objetivo)){
				
				header("location: ../cms/AdmObjetivo");
			}
		}

	}

?>