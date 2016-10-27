
<?php
	
	class sobre_controller {
		public $codSobreLoja;
		public $imgSobreLoja;
		public $tituloSobreLoja;
		public $historiaSobreLoja;
		public $imgSobreLoja1;
		public $imgSobreLoja2;
		public $imgSobreLoja3;
		public $codEmpresa;
		
        
        
        public function __construct(){
            
            require_once('models/sobreLoja_class.php');
            
    
            
		}
		public function iniciaAtributo(){
		
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
					
					 //$this->tituloSobreLoja=$_POST['txtTituloSobreLoja'];
					// $this->historiaSobreLoja=$_POST['txtHistoria'];
					 //$this->imgSobreLoja = basename($_FILES["imgSobreLoja"]["name"]);	
					 $this->imgSobreLoja1 = basename($_FILES["imgSobreLoja1"]["name"]);
					 echo("AQUI".$this->imgSobreLoja1);
					 //$this->imgSobreLoja2 = basename($_FILES["imgSobreLoja2"]["name2"]);	
					 //$this->imgSobreLoja3 = basename($_FILES["imgSobreLoja3"]["name3"]);						
				
            }      
			
		} 
		
		public function getImg ($fileimg){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $fileimg;
			/*$file1= $dir . $this->imgSobreLoja1;
			$file2= $dir . $this->imgSobreLoja2;
			$file3= $dir . $this->imgSobreLoja3;*/
			
            if(strstr($fileimg, '.jpg') || strstr($fileimg, '.png')){
                if(move_uploaded_file($_FILES["imgSobreLoja1"]["tmp_name"],$file)  ){
					return $file;
                }else{
					return null;
				}
			}
        }
        
		public function index(){
            
			$atualizacao = 'inserir';
			$sobreLoja=new SobreLoja();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new SobreLoja();
				$sobreLoja=$c->selectById($id);
			}
			
           require_once('views/sobre/index.php');
        }
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$sobreLoja=new SobreLoja();
			/*if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new SobreLoja();
				$sobreLoja=$c->selectById($id);
			}*/
			
			
			require_once('views/sobre/cadastrar.php');
		}
		
		public function listarTodos (){
			 
			$listar = new SobreLoja();
			return $listar->selectAll();	
		}
		
		public function buscar($codSobreLoja){
			
			$buscar = new SobreLoja();
			return $buscar->selectById($codCategoria);
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();
			$atualizar = new SobreLoja();
			$atualizar->tituloSobreLoja = $this->tituloSobreLoja;
			$atualizar->historiaSobreLoja = $this->historiaSobreLoja;
			$atualizar->imgSobreLoja = $this->imgSobreLoja;
			$atualizar->img1 = $this->img1;
			$atualizar->img2 = $this->img2;
			$atualizar->img3 = $this->img3;
			
			
						
			if($atualizar->update()){	
				
				header("location: ../sobre/index/".$this->codCategoriaMateria);
			}
		}
		
		public function deletar() {
			
			$codSobreLoja = $_GET['id'];
			
			$deletar = new SobreLoja();
			if($deletar->delete($codSobreLoja)){
				header("location: ../../sobre/index");
			}	
		}
		
		public function inserir() {
             $this->iniciaAtributo();
			$sobreLoja = new SobreLoja();
			/*$sobreLoja->tituloSobreLoja = $this->tituloSobreLoja;
			$sobreLoja->historiaSobreLoja = $this->historiaSobreLoja;
			$sobreLoja->imgSobreLoja = $this->imgSobreLoja;*/
			$sobreLoja->imgSobreLoja1 = $this->getImg($this->imgSobreLoja1);
			echo($sobreLoja->imgSobreLoja1);
			
			/*if($sobreLoja::insert($sobreLoja)){
				
				header("location: ../sobre/index");
			}*/
		}
	}

?>