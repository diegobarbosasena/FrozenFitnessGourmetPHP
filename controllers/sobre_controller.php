
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
				     $this->codSobreLoja=$_POST['txtcodSobreLoja'];
					 $this->tituloSobreLoja=$_POST['txtTituloSobreLoja'];
					 $this->historiaSobreLoja=$_POST['txtHistoria'];
					 $this->imgSobreLoja = basename($_FILES["imgSobreLoja"]["name"]);	
					 $this->imgSobreLoja1 = basename($_FILES["imgSobreLoja1"]["name"]);
					 $this->imgSobreLoja2 = basename($_FILES["imgSobreLoja2"]["name"]);	
					 $this->imgSobreLoja3 = basename($_FILES["imgSobreLoja3"]["name"]);						
				
            }      
			
		} 
		
		public function getImg ($fileimg){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imgSobreLoja;
			$file1= $dir . $this->imgSobreLoja1;
			$file2= $dir . $this->imgSobreLoja2;
			$file3= $dir . $this->imgSobreLoja3;
            
			
            if(strstr($fileimg, '.jpg') || strstr($fileimg, '.png')){
                if(move_uploaded_file($_FILES["imgSobreLoja"]["tmp_name"],$file)  ){
					return $file;
                }else{
					return null;
				}
                if(move_uploaded_file($_FILES["imgSobreLoja1"]["tmp_name"],$file1)  ){
					return $file1;
                }else{
					return null;
				}
                if(move_uploaded_file($_FILES["imgSobreLoja2"]["tmp_name"],$file2)  ){
					return $file2;
                }else{
					return null;
				}
                if(move_uploaded_file($_FILES["imgSobreLoja3"]["tmp_name"],$file3)  ){
					return $file3;
                }else{
					return null;
				}
			}
            

            
        }
        
         public function detalhe(){
            
             require_once('views/sobre/detalhe_sobre.php');
            
        }
        

		 public function index(){
            
			$atualizacao = 'inserir';
			$s = new SobreLoja();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$sobreLoja=$s->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaSobre = $s->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaSobre= $s->selectAll();    
            }
             
            
			
           require_once('views/sobre/index.php');
        }
		
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$sobreLoja=new SobreLoja();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new SobreLoja();
				$sobreLoja=$c->selectById($id);
			}
			
			
			require_once('views/sobre/cadastrar.php');
		}
		
		public function listarTodos (){
			 
			$listar = new SobreLoja();
			return $listar->selectAll();	
		}
		
		public function buscar($codSobreLoja){
			
			$buscar = new SobreLoja();
			return $buscar->selectById($codSobreLoja);
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();
			$atualizar = new SobreLoja();
			$atualizar->tituloSobreLoja = $this->tituloSobreLoja;
			$atualizar->historiaSobreLoja = $this->historiaSobreLoja;
            $atualizar->codSobreLoja = $this->codSobreLoja;
			$atualizar->imgSobreLoja = $this->getImg($this->imgSobreLoja);
			$atualizar->imgSobreLoja1 = $this->getImg($this->imgSobreLoja1);
			$atualizar->imgSobreLoja2 = $this->getImg($this->imgSobreLoja2);
			$atualizar->imgSobreLoja3 = $this->getImg($this->imgSobreLoja3);
								
			if($atualizar->update()){	
				
				header("location: ../sobre/index/".$this->codSobreLoja);
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
            $sobreLoja->codSobreLoja = $this->codSobreLoja;
			$sobreLoja->tituloSobreLoja = $this->tituloSobreLoja;
			$sobreLoja->historiaSobreLoja = $this->historiaSobreLoja;
			$sobreLoja->imgSobreLoja = $this->getImg($this->imgSobreLoja);
            $sobreLoja->imgSobreLoja1 = $this->getImg($this->imgSobreLoja1);
            $sobreLoja->imgSobreLoja2 = $this->getImg($this->imgSobreLoja2);
            $sobreLoja->imgSobreLoja3 = $this->getImg($this->imgSobreLoja3);

            
			
			
			if($sobreLoja::insert($sobreLoja)){
				
				header("location: ../sobre/index");
			}
		}
	}

?>