
<?php
	
	class categoria_controller {
		
		public $nomeCategoriaMateria;
		public $codCategoriaMateria;
        
        
        public function __construct(){
            
            require_once('models/categoria_class.php');
            
    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtCategoriaMateria']) && isset($_POST['codCategoriaMateria'])){
					$this->nomeCategoriaMateria=$_POST['txtCategoriaMateria'];
					$this->codCategoriaMateria= $_POST['codCategoriaMateria'];
				}
            }
        }
		
        
        
         public function index(){
            
			$atualizacao = 'inserir';
			$c = new Categoria();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$categoria=$c->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaCategoriaMateria = $c->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaCategoriaMateria= $c->selectAll();    
            }
             
            
			
           require_once('views/categoria/index.php');
        }
        
        
        
        
        
        
        
        
        
        
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$categoria=new Categoria();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Categoria();
				$categoria=$c->selectById($id);
			}
			
			
			require_once('views/categoria/cadastrar.php');
		}
		
		public function listarTodos (){
			 
			$listar = new Categoria();
			return $listar->selectAll();	
		}
		
		public function buscar($codCategoria){
			
			$buscar = new Categoria();
			return $buscar->selectById($codCategoria);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Categoria();
			$atualizar->nomeCategoriaMateria = $this->nomeCategoriaMateria;
			$atualizar->codCategoriaMateria =  $this->codCategoriaMateria;
			
						
			if($atualizar->update()){	
				
				header("location: ../categoria/index/".$this->codCategoriaMateria);
			}
		}
		
		public function deletar() {
			
			$codCategoria = $_GET['id'];
			
			$deletar = new Categoria();
            //echo("teste".$codCategoria);
			if($deletar->delete($codCategoria)){
				header("location: ../../categoria/index");
			}
		}
		
		public function inserir() {
              
			$categoria = new Categoria();
			$categoria->nomeCategoriaMateria = $this->nomeCategoriaMateria;
			
			if($categoria::insert($categoria)){
				header("location: ../categoria/index");
			}
		}
	}

?>