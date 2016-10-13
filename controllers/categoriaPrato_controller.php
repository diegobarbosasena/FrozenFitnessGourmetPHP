
<?php
	
	class categoriaPrato_controller {
		
		public $nomeCategoriaPrato;
		public $descricaoCategoria;
		public $imagemCategoria;
		public $codCategoriaPrato;
        
        public function __construct(){
            
            require_once('models/objetivo_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtNomeObjetivo']) && isset($_POST['codCategoriaPrato'])){
					 $this->codCategoriaPrato = $_POST['codCategoriaPrato'];
					 $this->nomeCategoriaPrato=$_POST['txtNomeObjetivo'];
					 $this->descricaoCategoria=$_POST['txtDescricaoObjetivo'];
					 $this->imagemCategoria = basename($_FILES["objetivoFile"]["name"]);					
				}
            }       
        }
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imagemCategoria;
			
            if(strstr($this->imagemCategoria, '.jpg') || strstr($this->imagemCategoria, '.png')){
                if(move_uploaded_file($_FILES["objetivoFile"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }
        
        public function index(){
            
			$atualizacao = 'inserir';
			//$categoriaPrato=new CategoriaPrato();
			//if(isset($_GET['id']) && $_GET['id'] != ""){
				
				//$id = $_GET['id'];
				//$atualizacao = 'atualizar';
				
				//$c = new Categoria_prato();
				//$categoriaPrato=$c->selectById($id);
			//}
			
           require_once('views/categoriaPrato/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			//$objetivo=new Objetivo();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Objetivo();
				$objetivo=$c->selectById($id);
			}
			
			
			require_once('views/categoriaPrato/cadastrar.php');
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
			$atualizar->codCategoriaPrato = $this->codCategoriaPrato;
			$atualizar->descricaoCategoria = $this->descricaoCategoria;
			$atualizar->imagemCategoria = $this->imagemCategoria;
					
			if($atualizar->update()){					
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
			$objetivo->imagemCategoria = $this->getImg();
			
			if($objetivo::insert($objetivo)){
				header("location: ../objetivo/index");
			}
		}

	}

?>