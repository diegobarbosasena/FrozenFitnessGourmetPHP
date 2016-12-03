
<?php
	
	class categoriaPrato_controller {
		
		public $nomeCategoriaPrato;
		public $descricaoCategoriaPrato;
		public $imagemCategoriaPrato;
		public $codCategoriaPrato;
        
        public function __construct(){
            
            require_once('models/categoriaPrato_class.php');

    
        }
		
		public function iniciaAtributo(){
		
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
					 $this->codCategoriaPrato = $_POST['codCategoriaPrato'];
					 $this->nomeCategoriaPrato=$_POST['txtNomeCategoriaPrato'];
					 $this->descricaoCategoriaPrato=$_POST['txtDescricaoCategoriaPrato'];
					 $this->imagemCategoriaPrato = basename($_FILES["CategoriaPratoFile"]["name"]);					
				
            }       
		}
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imagemCategoriaPrato;
			
            if(strstr($this->imagemCategoriaPrato, '.jpg') || strstr($this->imagemCategoriaPrato, '.png')){
                if(move_uploaded_file($_FILES["CategoriaPratoFile"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }
 
        
        public function index(){
            
			$atualizacao = 'inserir';
			$c = new categoriaPrato();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$categoriaPrato=$c->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaCategoriaPrato = $c->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaCategoriaPrato= $c->selectAll();    
            }
             
            
			
            require_once('views/categoriaPrato/index.php');
        }
        
   
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$categoriaPrato=new categoriaPrato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new categoriaPrato();
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
			$this->iniciaAtributo();  
			$atualizar = new categoriaPrato();
			$atualizar->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$atualizar->codCategoriaPrato = $this->codCategoriaPrato;
			$atualizar->descricaoCategoriaPrato = $this->descricaoCategoriaPrato;
			$atualizar->imagemCategoriaPrato =  $this->getImg();
					
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
              
			$this->iniciaAtributo();  
			$categoriaPrato = new categoriaPrato();
			$categoriaPrato->nomeCategoriaPrato = $this->nomeCategoriaPrato;
			$categoriaPrato->descricaoCategoriaPrato = $this->descricaoCategoriaPrato;
			$categoriaPrato->imagemCategoriaPrato = $this->getImg();
		
			
			//$categoriaPrato::insert($categoriaPrato);
			if($categoriaPrato::insert($categoriaPrato)){
				header("location: ../categoriaPrato/index");				
			}
			
		}

	}

?>