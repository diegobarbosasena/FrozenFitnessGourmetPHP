
<?php
	
	class estoque_controller {
	
		public $codEstoque;
		public $codMateria;
		public $dtFabricacao;
		public $dtValidade;
		public $quantidade;
		public $quantidadeMinima;
        
        
        public function __construct(){
            
            require_once('models/estoque_class.php');
 
        }
		
		
			public function iniciaAtributo(){
		
			 if($_SERVER['REQUEST_METHOD']==='POST')
            {
				
                    $this->codEstoque=$_POST['codEstoque'];
					$this->codMateria=$_POST['codMateria'];
                    $this->dtValidade=$_POST['txtdtValidade'];
					 $this->dtFabricacao=$_POST['txtdtFabricacao'];
                    $this->quantidade=$_POST['txtquantidade'];
					$this->quantidadeMinima=$_POST['txtquantidadeLimite'];
                    
				
            }
		}
        
        
		 public function index(){
            
			$atualizacao = 'inserir';
			$e = new Estoque();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$estoque=$e->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaEstoque = $e->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaEstoque= $e->selectAll();    
            }
             
            
			
           require_once('views/estoque/index.php');
        }
		
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$estoque=new Estoque();
            echo('CHEGOU');
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$e = new Estoque();
				$estoque=$e->selectById($id);
			}
            require_once('views/estoque/cadastrar.php');
		}
        		
		
		public function listarTodos (){
			 
            $listarEstoque = new Estoque();
            
            return $listarEstoque->selectAll();
			  
		}
		
		public function buscar($codEstoque){
            
            $buscarEstoque = new Estoque();
            
            return $buscarEstoque->selectById();
		  
		}
		
		public function atualizar($codEstoque) {
			$this->iniciaAtributo();
		
			$atualizar = new Estoque();
            $atualizar->codEstoque = $this->codEstoque;
			$atualizar->codMateria = $this->codMateria;
            $atualizar->dtValidade = $this->dtValidade;
			$atualizar->dtFabricacao = $this->dtFabricacao;
			$atualizar->quantidade = $this->quantidade;
			$atualizar->quantidadeMinima = $this->quantidadeMinima;
					
			if($atualizar->update()){					
				header("location: ../estoque/index".$this->codEstoque);
			}
		
		
		}
		
		public function deletar($codEstoque) {
            

            
			
			$codEstoque = $_GET['id'];
			
			$DeletarEstoque = new Estoque();
			if($DeletarEstoque->Delete($codEstoque)){
				header("location: ../../estoque/index");
			}		
		}
		
		public function inserir() {
		$this->iniciaAtributo();
		
            $novoEstoque = new Estoque();
            $novoEstoque->codEstoque = $this->codEstoque;
			$novoEstoque->codMateria = $this->codMateria;
            $novoEstoque->dtValidade = $this->dtValidade;
			$novoEstoque->dtFabricacao = $this->dtFabricacao;
			$novoEstoque->quantidade = $this->quantidade;
			$novoEstoque->quantidadeMinima = $this->quantidadeMinima;
			
			if($novoEstoque::insert($novoEstoque)){
				header("location: ../estoque/index");
				
				
			}
		}
        
       
	}

?>