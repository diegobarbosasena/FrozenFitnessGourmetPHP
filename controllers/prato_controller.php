
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
		public $visitas;
        public $imagemPrato;
		public $codcategoriaPrato;
		
		public function __construct(){
            
            require_once('models/prato_class.php');

    
        }
		
		public function iniciaAtributos(){
			
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
                                  
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
					$this->codcategoriaPrato = $_POST['txtcategoriaPrato'];
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
        }
        
     

		 public function index(){
            
			$atualizacao = 'inserir';
			$p = new Prato();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$prato=$p->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaPratos = $p->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaPratos= $p->selectAll();    
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
            
            $prato = new Prato();
            $p = $prato->selectById($_GET['id']);
            
            require_once('views/prato/detalhe_prato_pronto.php');
            
        }
        	
        public function listarTodos (){
			 
            $prato = new Prato();
            
            return $prato->selectAll();
			  
		}
		
		public function buscar($codPrato){
            
            $prato = new Prato();
            if(isset($_POST["btnPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
            return $prato->selectById($codPrato);
            }
		}
        
        public function buscarNome($nomePrato){
            
            $prato = new Prato();
            if(isset($_POST["btnPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
            return $prato->selectByName($nomePrato);
            }
		}
		
		public function atualizar() {

			$this->iniciaAtributos();
			
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
            $prato->codcategoriaPrato= $this->codcategoriaPrato;
            $prato->imagemPrato= $this->getImg();
			$prato->codcategoriaPrato= $this->codcategoriaPrato;
            
           
			if($prato->update()){	
				
				header("location: ../prato/index");
			}
		}
        

		
		public function deletar() {
            $prato = new Prato();
			$codPrato = $_GET['id'];
   

            if($prato->delete($codPrato)){

                header("location: ../../prato/index");

            }
         
           
        }
           
               
           

		
		public function inserir() {
		

			$this->iniciaAtributos();
		
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
            $prato->imagemPrato= $this->getImg();
			$prato->codcategoriaPrato= $this->codcategoriaPrato;
           
			if($prato::insert($prato)){
                header("location: ../prato/index");
            }
        }
		
	}
	
	
	
	
?>