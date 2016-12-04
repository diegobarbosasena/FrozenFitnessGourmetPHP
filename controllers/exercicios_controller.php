
<?php
	
	class exercicios_controller {
		
		public $tituloExercicio;
		public $codExercicio;
		public $descricaoExercicio;
		public $imagemExercicio;
        
        public function __construct(){
            
            require_once('models/exercicios_class.php');

    
        }
		
		public function iniciaAtributo(){
		
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
					 $this->codExercicio = $_POST['codExercicio'];
					 $this->tituloExercicio=$_POST['txtTituloExercicio'];
					 $this->descricaoExercicio=$_POST['txtDescricaoExercicio'];
					 $this->imagemExercicio = basename($_FILES["ExercicioFile"]["name"]);					
				
            }       
		}
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imagemExercicio;
			
            if(strstr($this->imagemExercicio, '.jpg') || strstr($this->imagemExercicio, '.png')){
                if(move_uploaded_file($_FILES["ExercicioFile"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }
        
     
        
		 public function index(){
            
			$atualizacao = 'inserir';
			$e = new Exercicios();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$exercicio=$e->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaExercicio = $e->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaExercicio= $e->selectAll();    
            }
             
            
			
            require_once('views/exercicios/index.php');
        }
		
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$exercicios=new Exercicios();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Exercicios();
				$exercicios=$c->selectById($id);
			}
			
			
			require_once('views/exercicios/cadastrar.php');
		}
        	
		public function listarTodos (){
			 
			$listar = new Exercicios();
			return $listar->selectAll();	
		}
		
		public function buscar($codExercicio){
			
			$buscar = new Exercicios();
			return $buscar->selectById($codExercicios);
			
		}
		
		public function atualizar() {
			$this->iniciaAtributo();  
			$atualizar = new Exercicios();
			$atualizar->tituloExercicio = $this->tituloExercicio;
			$atualizar->codExercicio = $this->codExercicio;
			$atualizar->descricaoExercicio = $this->descricaoExercicio;
			$atualizar->imagemExercicio = $this->imagemExercicio;
					
			if($atualizar->update()){					
				header("location: ../exercicios/index".$this->codExercicio);
			}
		}
        
		public function deletar() {
			
			$codExercicio = $_GET['id'];
			
			$deletar = new Exercicios();
			if($deletar->delete($codExercicio)){
				header("location: ../../exercicios/index");
			}	
		}
		
		public function inserir() {
              
			$this->iniciaAtributo();  
			$exercicios = new Exercicios();
			$exercicios->tituloExercicio = $this->tituloExercicio;
			$exercicios->descricaoExercicio = $this->descricaoExercicio;
			$exercicios->imagemExercicio = $this->getImg();
		
			
			
			if($exercicios::insert($exercicios)){
				header("location: ../exercicios/index");
				
				
			}
			
		}

	}

?>