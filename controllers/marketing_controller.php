
<?php
	
	class marketing_controller {
		
		public $tituloSlider;
		public $linkImagemSlider;
		public $codSlider;
        
        public function __construct(){
            
            require_once('models/marketing_class.php');

        }
		
		
		public function iniciaAtributo(){
		
			if($_SERVER['REQUEST_METHOD']==='POST')
            {
					 $this->codSlider = $_POST['codSlider'];
					 $this->tituloSlider=$_POST['txtTituloMarketing'];
					 $this->linkImagemSlider = basename($_FILES["imgFile"]["name"]);		
	
            }
		}
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->linkImagemSlider;
			
			
		
            if(strstr($this->linkImagemSlider, '.jpg') || strstr($this->linkImagemSlider, '.png')){
                if(move_uploaded_file($_FILES["imgFile"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }
        
       
		 public function index(){
            
			$atualizacao = 'inserir';
			$s = new Slider();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
                $slider=$s->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaSlider = $s->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaSlider= $s->selectAll();    
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
			$this->iniciaAtributo();
			$atualizar = new Slider();
			$atualizar->tituloSlider = $this->tituloSlider;
			$atualizar->codSlider = $this->codSlider;
			$atualizar->linkImagemSlider = $this->getImg();
					
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
            $this->iniciaAtributo();
			$slider = new Slider();
			$slider->codSlider = $this->codSlider;
			$slider->tituloSlider = $this->tituloSlider;
			$slider->linkImagemSlider = $this->getImg();
			
			if($slider::insert($slider)){
				header("location: ../marketing/index");
			}else{
				
				$echo("nem foi");
			}
		}

	}

?>