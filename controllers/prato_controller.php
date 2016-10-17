
<?php 
	
	class prato_controller{
        
        public $codPrato;
		public $nomePrato;
		public $precoPrato;
		public $descricaoPrato;
		public $caloria;
		public $valorEnergetico;
		public $carboidrato;
		public $proteina;
		public $sodio;
		public $gorduras;
		public $dtFabricacao;
		public $dtValidade;
		public $visitas;
        public $imagemPrato;
		
		
		public function __construct(){
            
            require_once('models/prato_class.php');

    
        }
		
		public function iniciaAtributos(){
			
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
<<<<<<< HEAD
                                  
=======
                
                
                //if(isset($_POST['txtnomePrato']) && isset($_POST['$codPrato'])){
                    
>>>>>>> a834044b210e87945cc9fcb987fb8f7e78a364f2
                    $this->codPrato=$_POST['codPrato'];
					$this->nomePrato= $_POST['txtnomePrato'];
                    $this->precoPrato=$_POST['txtprecoPrato'];
					$this->descricaoPrato= $_POST['txtdescricaoPrato'];
                    $this->caloria=$_POST['txtcaloria'];
					$this->valorEnergetico= $_POST['txtvalorEnergetico'];
                    $this->carboidrato=$_POST['txtcarboidrato'];
					$this->proteina= $_POST['txtproteina'];
                    $this->sodio=$_POST['txtsodio'];
					$this->gorduras= $_POST['txtgorduras'];
                    $this->dtFabricacao= $_POST['txtdtFabricacao'];
                    $this->dtValidade=$_POST['txtdtValidade'];
<<<<<<< HEAD
                    $this->imagemPrato = basename($_FILES["imagemPrato"]["name"]);
			}     
			
		}
        
        
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imagemPrato;
			
            if(strstr($this->imagemPrato, '.jpg') || strstr($this->imagemPrato, '.png')){
                if(move_uploaded_file($_FILES["imagemPrato"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
=======
                    $this->imagemPrato = basename($_FILES["imgPrato"]["name"]);
                    echo("Aqui".$this->imagemPrato);
              // }
            }       
>>>>>>> a834044b210e87945cc9fcb987fb8f7e78a364f2
        }
        
        
		public function getImg(){
			
			$dir="conteudo/imagem/";
			
			$file= $dir . $this->imagemPrato;
			
            if(strstr($this->imagemPrato, '.jpg') || strstr($this->imagemPrato, '.png')){
                if(move_uploaded_file($_FILES["imgPrato"]["tmp_name"],$file)){
					return $file;
                }else{
					return null;
				}
			}
        }

		 public function index(){
            
			$atualizacao = 'inserir';
			$prato=new Prato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Prato();
				$prato=$p->selectById($id);
			}
			
           require_once('views/prato/index.php');
        }
		
		public function cadastrar(){
			$atualizacao = 'inserir';
			$prato=new Prato();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Prato();
				$prato=$p->selectById($id);
			}
			
           require_once('views/prato/cadastrar.php');
			
		}
        
        public function detalhe(){
            
             require_once('views/prato/detalhe_prato_pronto.php');
            
        }
        	
        public function listarTodos (){
			 
            $prato = new Prato();
            
            return $prato->selectAll();
			  
		}
		
		public function buscar($codPrato){
            
            $prato = new Prato();
            
            return $prato->selectById();
		  
		}
		
		public function atualizar() {
		
<<<<<<< HEAD
			$this->iniciaAtributos();
			
			$prato = new Prato();
=======
		  $prato = new Prato();
>>>>>>> a834044b210e87945cc9fcb987fb8f7e78a364f2
            
            $prato->codPrato=$this->codPrato;
            $prato->nomePrato= $this->nomePrato;
            $prato->precoPrato=$this->precoPrato;
            $prato->descricaoPrato= $this->descricaoPrato;
            $prato->caloria= $this->caloria;
            $prato->valorEnergetico= $this->valorEnergetico;
            $prato->carboidrato= $this->carboidrato;
            $prato->proteina= $this->proteina;
            $prato->sodio= $this->sodio;
            $prato->gorduras= $this->gorduras;
            $prato->dtFabricacao= $this->dtFabricacao;
            $prato->dtValidade= $this->dtValidade;
            $prato->codcategoriaPrato= $this->codcategoriaPrato;
            $prato->imagemPrato= $this->getImg();
            
            
			if($prato::update()){
                header("location: ../prato/index");
            }

		}
		
		public function deletar($codPrato) {
            $prato = new Usuario();

            $prato->Delete($cod);	
		}
		
		public function inserir() {
		
<<<<<<< HEAD
			$this->iniciaAtributos();
		
=======
>>>>>>> a834044b210e87945cc9fcb987fb8f7e78a364f2
            $prato = new Prato();
            
            $prato->codPrato=$this->codPrato;
            $prato->nomePrato= $this->nomePrato;
            $prato->precoPrato=$this->precoPrato;
            $prato->descricaoPrato= $this->descricaoPrato;
            $prato->caloria= $this->caloria;
            $prato->valorEnergetico= $this->valorEnergetico;
            $prato->carboidrato= $this->carboidrato;
            $prato->proteina= $this->proteina;
            $prato->sodio= $this->sodio;
            $prato->gorduras= $this->gorduras;
            $prato->dtFabricacao= $this->dtFabricacao;
            $prato->dtValidade= $this->dtValidade;
            $prato->imagemPrato= $this->getImg();
           
<<<<<<< HEAD
            //echo("Imagem  ".$prato->imagemPrato);
            //$prato::insert($prato);
            
            
            
			if($prato::insert($prato)){
                header("location: ../prato/index");
            }else{
                header("location: ../prato/cadastrar");
=======
            //echo("teste2  ".$prato->nomePrato);
            //$prato::insert($prato);
            
                
			if($prato::insert($prato)){
               // header("location: ../prato/index");
>>>>>>> a834044b210e87945cc9fcb987fb8f7e78a364f2
            }
		}
        
		
	}
	
	
	
	
?>