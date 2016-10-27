
<?php
	
	class produtocms_controller {
		
		public $codProduto;
		public $nomeProduto;
		public $precoProduto;
		public $descricaoProduto;
		public $caloriaProduto;
		public $valorEnergeticoProduto;
		public $carboidratoProduto;
		public $proteinaProduto;
		public $sodioProduto;
		public $gordurasProduto;
        public $imagemProduto;
		public $codcategoriaProduto;
        
        public function __construct(){
            
            require_once('models/produto_class.php');
    
        }
		
		public function iniciaAtributos(){
			
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
                                  
                    $this->codProduto=$_POST['codPrato'];
					$this->nomeProduto= $_POST['txtnomePrato'];
                    $this->precoProduto=$_POST['txtprecoPrato'];
					$this->descricaoProduto= $_POST['txtdescricaoPrato'];
                    $this->caloriaProduto=$_POST['txtcaloria'];
					$this->valorEnergeticoProduto= $_POST['txtvalorEnergetico'];
                    $this->carboidratoProduto=$_POST['txtcarboidrato'];
					$this->proteinaProduto= $_POST['txtproteina'];
                    $this->sodioProduto=$_POST['txtsodio'];
					$this->gordurasProduto= $_POST['txtgorduras'];
					$this->codcategoriaProduto = $_POST['txtcategoriaPrato'];
                    $this->imagemProduto = basename($_FILES["imagemPrato"]["name"]);
			}     
			
		}
        
        public function index(){
            
			$atualizacao = 'inserir';
			$produto=new Produto();
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Produto();
				$produto=$c->selectById($id);
			}
			
           require_once('views/produtocms/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
            
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$c = new Usuario();
				$usuario=$c->selectById($id);
			}
            require_once('views/produtocms/cadastrar.php');
		}
        
        public function detalhe(){
            
             require_once('views/produtocms/detalhe_produto.php');
            
        }
		
		public function listarTodos (){
			 
            $listarProdutos = new Produto();
            
            return $listarProdutos->selectAll();
			  
		}
		
		public function buscar($codProduto){
            
            $buscarProduto = new Produto();
            
            return $buscarProduto->selectById();
		  
		}
		
		public function atualizar() {
		
			$produto = new Produto();
            
            $produto->codProduto = $this->codProduto;
			$produto->nomeProduto = $this->nomeProduto;
			$produto->descricaoProduto = $this->descricaoProduto;
			$produto->caloriaProduto = $this->caloriaProduto;
			$produto->valorEnergeticoProduto = $this->valorEnergeticoProduto;
			$produto->carboidratoProduto = $this->carboidratoProduto;
			$produto->proteinaProduto = $this->proteinaProduto;
			$produto->sodioProduto = $this->sodioProduto;
			$produto->gordurasProduto = $this->gordurasProduto;
			$produto->codcategoriaProduto = $this->codcategoriaProduto;
			$produto->imagemProduto = $this->getImg();
            	
			$produto::update();
		}
		
		public function deletar($codProduto) {
            $Deletar = new Produto();

            $Deletar->Delete($codProduto);	
		}
		
		public function inserir() {
		
            $produto = new Produto();
            
            $produto->codProduto = $this->codProduto;
			$produto->nomeProduto = $this->nomeProduto;
			$produto->descricaoProduto = $this->descricaoProduto;
			$produto->caloriaProduto = $this->caloriaProduto;
			$produto->valorEnergeticoProduto = $this->valorEnergeticoProduto;
			$produto->carboidratoProduto = $this->carboidratoProduto;
			$produto->proteinaProduto = $this->proteinaProduto;
			$produto->sodioProduto = $this->sodioProduto;
			$produto->gordurasProduto = $this->gordurasProduto;
			$produto->codcategoriaProduto = $this->codcategoriaProduto;
			$produto->imagemProduto = $this->getImg();
            	
			$produto::insert($produto);
		}
        
	}

?>