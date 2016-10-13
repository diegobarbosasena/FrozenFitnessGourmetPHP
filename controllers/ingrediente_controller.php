
<?php
	
	class ingrediente_controller {
		
		
		public $nomeMateria;
		public $precoMateria;
		public $descricaoMateria;
		public $porcaoMateria;
        
        
        public function __construct(){
            
            require_once('models/materiaPrima_class.php');
     
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtIngrediente']) && isset($_POST['codUsuario'])){
                    
                    $this->nomeMateria=$_POST['txtusuario'];
                    $this->descricaoMateria=$_POST['txtsenha'];
                    //$this->entrar();
				}
            }
        }
        
        
        
        public function index(){
            
			$atualizacao = 'inserir';
			$materiaPrima=new MateriaPrima();
			if(isset($_GET['id']) && $_GET['id'] != ""){
					
				$id = $_GET['id'];
					$atualizacao = 'atualizar';
					
				$c = new MateriaPrima();
					$materiaPrima=$c->selectById($id);
			}
			
           require_once('views/ingrediente/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$materiaPrima=new MateriaPrima();
            //echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new MateriaPrima();
				$materiaPrima=$c->selectById($id);
			}
            require_once('views/ingrediente/cadastrar.php');
		}
        		
		
		public function listarTodos (){
			 
            $listarMateria = new MateriaPrima();
            
            return $listarMateria->selectAll();
			  
		}
		
		public function buscar($codMateria){
            
            $buscarMateria = new MateriaPrima();
            
            return $buscarMateria->selectById();
		  
		}
		
		public function atualizar($codMateria) {
		
		
		}
		
		public function deletar($codMateria) {
            $DeletarMateria = new MateriaPrima();

            $DeletarMaria->MateriaPrima($cod);	
		}
		
		public function inserir() {
		
            $novoMateria = new MateriaPrima();
            
            $novoMateria->nomeMateria = $this->nomeMateria;
			$novoUsuario->descricaoMateria = $this->descricaoMateria;
            	
			$novoMateria::insert($novoMateria);
		}
		}
        
?>