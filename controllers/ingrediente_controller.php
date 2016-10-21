
<?php
	
	class ingrediente_controller {
		
		
		public $nomeMateria;
		public $precoMateria;
		public $descricaoMateria;
		
        
        
        public function __construct(){
            
            require_once('models/materiaPrima_class.php');
     
           
        }
        
		public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
			
					 $this->nomeMateria=$_POST['txtIgrediente'];
                    $this->descricaoMateria=$_POST['descricaoIgrediente'];
					$this->precoMateria=$_POST['txtPrecoMateria'];
                    //$this->entrar();
				
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
			$this->iniciaAtributo();
		
		
		}
		
		public function deletar($codMateria) {
            $DeletarMateria = new MateriaPrima();

            $DeletarMaria->MateriaPrima($cod);	
		}
		
		public function inserir() {
			$this->iniciaAtributo();
            $novoMateria = new MateriaPrima();
            
            $novoMateria->nomeMateria = $this->nomeMateria;
			$novoMateria->descricaoMateria = $this->descricaoMateria;
			$novoMateria->precoMateria = $this->precoMateria;
            	
			$novoMateria::insert($novoMateria);
		}
		}
        
?>