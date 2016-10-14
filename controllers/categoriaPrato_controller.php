
<?php
	
	class categoriaPrato_controller {
		
		public $nomeCategoriaPrato;
		public $descricaoCategoria;
		public $imagemCategoria;
		public $codCategoriaPrato;
        
        public function __construct(){
            
            require_once('models/categoriaPrato_class.php');

    
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
            
			/*$atualizacao = 'inserir';
			$categoriaPrato = new categoriaPrato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Categoria_prato();
				$categoriaPrato=$c->selectById($id);
			}*/
			
           require_once('views/categoriaPrato/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$categoriaPrato=new categoriaPrato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Objetivo();
				$categoriaPrato=$c->selectById($id);
			}
			
			
			require_once('views/categoriaPrato/cadastrar.php');
		}
        	
		public function listarTodos (){
			 
			$listar = new categoriaPrato();
			return $listar->selectAll();	
		}
		
		public function buscar($codCategoriaPrato){
			
			$buscar = new categoriaPrato();
			return $buscar->selectById($codCategoriaPrato);
			
		}
		
		public function atualizar() {
		
			$atualizar = new categoriaPrato();
			$atualizar->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$atualizar->codCategoriaPrato = $this->codCategoriaPrato;
			$atualizar->descricaoCategoria = $this->descricaoCategoria;
			$atualizar->imagemCategoria = $this->imagemCategoria;
					
			if($atualizar->update()){					
				header("location: ../categoriaPrato/index".$this->codCategoriaPrato);
			}
		}
        
		public function deletar() {
			
			$codCategoriaPrato = $_GET['id'];
			
			$deletar = new categoriaPrato();
			if($deletar->delete($codCategoriaPrato)){
				header("location: ../../categoriaPrato/index");
			}	
		}
		
		public function inserir() {
              
			$categoriaPrato = new categoriaPrato();
			$categoriaPrato->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$categoriaPrato->descricaoCategoria = $this->descricaoCategoria;
			$categoriaPrato->imagemCategoria = $this->getImg();
			
			if($categoriaPrato::insert($categoriaPrato)){
				header("location: ../categoriaPrato/index");
			}
		}

	}

?>