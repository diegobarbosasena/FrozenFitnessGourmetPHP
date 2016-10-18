
<?php
	
	class marketing_controller {
		
		public $tituloSlider;
		public $linkImagemSlider;
		public $codSlider;
        
        public function __construct(){
            
            require_once('models/marketing_class.php');

    
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
				if(isset($_POST['txtTituloMarketing']) && isset($_POST['codSlider'])){
					 $this->codSlider = $_POST['codCategoriaPrato'];
					 $this->tituloSlider=$_POST['txtNomeObjetivo'];
					 $this->linkImagemSlider = basename($_FILES["sliderFile"]["name"]);					
				}
            }       
        }
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->linkImagemSlider;
			
            if(strstr($this->linkImagemSlider, '.jpg') || strstr($this->linkImagemSlider, '.png')){
                if(move_uploaded_file($_FILES["sliderFile"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }
        
        public function index(){
            
			$atualizacao = 'inserir';
			$slider=new Slider();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Slider();
				$slider=$c->selectById($id);
			}
			
           require_once('views/marketing/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$slider=new Slider();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Slider();
				$slider=$c->selectById($id);
			}
			
			
			require_once('views/marketing/cadastrar.php');
		}
        	
		public function listarTodos (){
			 
			$listar = new Slider();
			return $listar->selectAll();	
		}
		
		public function buscar($codSlider){
			
			$buscar = new Slider();
			return $buscar->selectById($codSlider);
			
		}
		
		public function atualizar() {
		
			$atualizar = new Slider();
			$atualizar->tituloSlider = $this->tituloSlider;
			$atualizar->codSlider = $this->codSlider;
			$atualizar->linkImagemSlider = $this->linkImagemSlider;
					
			if($atualizar->update()){					
				header("location: ../marketing/index".$this->codSlider);
			}
		}
        
		public function deletar() {
			
			$codSlider = $_GET['id'];
			
			$deletar = new Slider();
			if($deletar->delete($codSlider)){
				header("location: ../../marketing/index");
			}	
		}
		
		public function inserir() {
              
			$slider = new Slider();
			$slider->tituloSlider = $this->tituloSlider;
			$slider->linkImagemSlider = $this->getImg();
			
			if($objetivo::insert($slider)){
				header("location: ../marketing/index");
			}
		}

	}

?>