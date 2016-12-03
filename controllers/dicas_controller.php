
<?php
	
	class dicas_controller {
		
		public $tituloDica;
		public $codDica;
		public $descricaoDica;
		public $imagemDica;
        
        public function __construct(){
            
            require_once('models/dicas_class.php');

    
        }
		
		public function iniciaAtributo(){
		
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
					 $this->codDica = $_POST['codDica'];
					 $this->tituloDica=$_POST['txtTituloDica'];
					 $this->descricaoDica=$_POST['txtDescricaoDica'];
					 $this->imagemDica= basename($_FILES["DicaFile"]["name"]);					
				
            }       
		}
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imagemDica;
			
            if(strstr($this->imagemDica, '.jpg') || strstr($this->imagemDica, '.png')){
                if(move_uploaded_file($_FILES["DicaFile"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }
        
    
		 public function index(){
            
			$atualizacao = 'inserir';
			$d = new Dicas();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$dicas=$d->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaDicas = $d->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaDicas= $d->selectAll();    
            }
             
            
			
            require_once('views/dicas/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$dicas=new Dicas();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$d = new Dicas();
				$dicas=$d->selectById($id);
			}
			
			
			require_once('views/dicas/cadastrar.php');
		}
        	
		public function listarTodos (){
			 
			$listar = new Dicas();
			return $listar->selectAll();	
		}
		
		public function buscar($codDica){
			
			$buscar = new Dicas();
			return $buscar->selectById($codDica);
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();  
			$atualizar = new Dicas();
			$atualizar->tituloDica = $this->tituloDica;
			$atualizar->codDica = $this->codDica;
			$atualizar->descricaoDica = $this->descricaoDica;
			$atualizar->imagemDica = $this->getImg();
			
			if($atualizar->update()){					
				header("location: ../dicas/index".$this->codDica);
			}
		}
        
		public function deletar() {
			
			$codDica = $_GET['id'];
			
			$deletar = new Dicas();
			if($deletar->delete($codDica)){
				header("location: ../../dicas/index");
			}	
		}
		
		public function inserir() {
              
			$this->iniciaAtributo();  
			$dicas = new Dicas();
			$dicas->tituloDica = $this->tituloDica;
			$dicas->descricaoDica = $this->descricaoDica;
			$dicas->imagemDica = $this->getImg();
		
			
			
			if($dicas::insert($dicas)){
				header("location: ../dicas/index");
				
				
			}
			
		}

	}

?>