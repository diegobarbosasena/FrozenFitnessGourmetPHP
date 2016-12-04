
<?php
	
	class objetivo_controller {
		
		public $nomeObjetivo;
		public $descricaoObjetivo;
		public $codObjetivo;
        
        public function __construct(){
            
            require_once('models/objetivo_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtNomeObjetivo']) && isset($_POST['codObjetivo'])){
					 $this->codObjetivo = $_POST['codObjetivo'];
					 $this->nomeObjetivo=$_POST['txtNomeObjetivo'];
					 $this->descricaoObjetivo=$_POST['txtDescricaoObjetivo'];
				
				}
            }       
        }
		
	
     
        
        
		 public function index(){
            
			$atualizacao = 'inserir';
			$o = new Objetivo();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$objetivo=$o->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaObjetivo = $o->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaObjetivo= $o->selectAll();    
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
			$atualizar->nomeObjetivo = $this->nomeObjetivo;
			$atualizar->codObjetivo = $this->codObjetivo;
			$atualizar->descricaoObjetivo = $this->descricaoObjetivo;
			
					
			if($atualizar->update()){					
				header("location: ../objetivo/index".$this->codObjetivo);
			}
		}
        
		public function deletar() {
			
			$codObjetivo = $_GET['id'];
			
			$deletar = new Objetivo();
			if($deletar->delete($codObjetivo)){
				header("location: ../../objetivo/index");
			}	
		}
		
		public function inserir() {
              
			$objetivo = new Objetivo();
			$objetivo->nomeObjetivo = $this->nomeObjetivo;
			$objetivo->descricaoObjetivo = $this->descricaoObjetivo;
			
			
			if($objetivo::insert($objetivo)){
				header("location: ../objetivo/index");
			}
		}

	}

?>