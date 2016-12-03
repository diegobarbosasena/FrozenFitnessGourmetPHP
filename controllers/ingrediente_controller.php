
<?php
	
	class ingrediente_controller {
		
		public $codMateria;
		public $nomeMateria;
		public $precoMateria;
		public $descricaoMateria;
		public $codCategoriaMateria;
		
		
        
        
        public function __construct(){
            
            require_once('models/materiaPrima_class.php');
     
           
        }
        
		public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
					$this->codMateria=$_POST['codMateria'];
					$this->nomeMateria=$_POST['txtIgrediente'];
                    $this->descricaoMateria=$_POST['descricaoIgrediente'];
					$this->precoMateria=$_POST['txtPrecoMateria'];
					$this->codCategoriaMateria=$_POST['categoriaIngrediente'];
	
            }
		}
        
        
        
         public function index(){
            
			$atualizacao = 'inserir';
			$m = new MateriaPrima();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$materiaPrima=$m->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaIngrediente = $m->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaIngrediente= $m->selectAll();    
            }
             
            
			
            require_once('views/ingrediente/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$materiaPrima=new MateriaPrima();
           // echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$m = new MateriaPrima();
				$materiaPrima=$m->selectById($id);
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
		
		public function atualizar() {
			$this->iniciaAtributo();
			
			$materiaPrima = new MateriaPrima();
           
            $materiaPrima->codMateria=$this->codMateria;
            $materiaPrima->nomeMateria= $this->nomeMateria;
            $materiaPrima->precoMateria=$this->precoMateria;
            $materiaPrima->descricaoMateria= $this->descricaoMateria;
            $materiaPrima->codCategoriaMateria= $this->codCategoriaMateria;
            
           
			if($materiaPrima->update()){	
				
				header("location: ../ingrediente/index/");
			}
		
		
		}
		
		public function deletar($codMateria) {
			
			$materiaPrima = new MateriaPrima();
			$codMateria = $_GET['id'];
			
			if($materiaPrima->delete($codMateria)){
                header("location: ../../ingrediente/index");
            }
		}
		
		public function inserir() {
			$this->iniciaAtributo();
            $novoMateria = new MateriaPrima();
            
            $novoMateria->nomeMateria = $this->nomeMateria;
			$novoMateria->descricaoMateria = $this->descricaoMateria;
			$novoMateria->precoMateria = $this->precoMateria;
			$novoMateria->codCategoriaMateria = $this->codCategoriaMateria;
            	
			
				if($novoMateria::insert($novoMateria)){
				header("location: ../ingrediente/index");
			}
			
		}
		}
        
?>