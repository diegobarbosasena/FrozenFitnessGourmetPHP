
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
                                  
                    $this->codProduto=$_POST['codProduto'];
					$this->nomeProduto= $_POST['txtnomeProduto'];
                    $this->precoProduto=$_POST['txtprecoProduto'];
					$this->descricaoProduto= $_POST['txtdescricaoProduto'];
                    $this->caloriaProduto=$_POST['txtcaloriaProduto'];
					$this->valorEnergeticoProduto= $_POST['txtvalorEnergeticoProduto'];
                    $this->carboidratoProduto=$_POST['txtcarboidratoProduto'];
					$this->proteinaProduto= $_POST['txtproteinaProduto'];
                    $this->sodioProduto=$_POST['txtsodioProduto'];
					$this->gordurasProduto= $_POST['txtgordurasProduto'];
					$this->codcategoriaProduto = $_POST['codcategoriaProduto'];
                    $this->imagemProduto = basename($_FILES["imagemProduto"]["name"]);					
			}     
			
		}
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
		
			$file= $dir . $this->imagemProduto;
		
			
            if(strstr($this->imagemProduto, '.jpg') || strstr($this->imagemProduto, '.png')){
                if(move_uploaded_file($_FILES["imagemProduto"]["tmp_name"],$file)){
					
					return $file;
                }else{
					return null;
				}
            }       
        }
        
      
        
         public function index(){
            
			$atualizacao = 'inserir';
			$p = new Produto();
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$produto=$p->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaProdutoCms = $p->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaProdutoCms= $p->selectAll();    
            }
             
            
			
           require_once('views/produtocms/index.php');
        }
        
        
		public function cadastrar(){
			
			$atualizacao = 'inserir';
            $produto=new Produto();
			
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Produto();
				$produto=$p->selectById($id);
			}
            require_once('views/produtocms/cadastrar.php');
		}
        
        public function detalhe(){
            
            $produto = new Produto();
            $rs = $produto->selectById($_GET['id']);
            
             require_once('views/produtocms/detalhe_produto.php');
            
        }
		
		public function listarTodos (){
			 
            $listarProdutos = new Produto();
            
            return $listarProdutos->selectAll();
			  
		}
		
		public function buscar($codProduto){
            
            $buscarProduto = new Produto();
            
            return $buscarProduto->selectById($codProduto);
		  
		}
		
		public function atualizar() {
		
			$this->iniciaAtributos();
		
            $produto = new Produto();
            
            $produto->codProduto = $this->codProduto;
			$produto->nomeProduto = $this->nomeProduto;
			$produto->precoProduto = $this->precoProduto;
			$produto->descricaoProduto = $this->descricaoProduto;
			$produto->caloriaProduto = $this->caloriaProduto;
			$produto->valorEnergeticoProduto = $this->valorEnergeticoProduto;
			$produto->carboidratoProduto = $this->carboidratoProduto;
			$produto->proteinaProduto = $this->proteinaProduto;
			$produto->sodioProduto = $this->sodioProduto;
			$produto->gordurasProduto = $this->gordurasProduto;
			$produto->codcategoriaProduto = $this->codcategoriaProduto;
			$produto->imagemProduto = $this->getImg();
            
            if($produto::update()){
                header("location: ../produtocms/index");
            }
		}
		
		public function deletar() {
            $codProduto = $_GET['id'];
            
            $deletar = new Produto();
	
            if($deletar->delete($codProduto)){
                header("location: ../../produtocms/index");
            }
		}
		
		public function inserir() {
		
			$this->iniciaAtributos();
		
            $produto = new Produto();
            
            $produto->codProduto = $this->codProduto;
			$produto->nomeProduto = $this->nomeProduto;
			$produto->precoProduto = $this->precoProduto;
			$produto->descricaoProduto = $this->descricaoProduto;
			$produto->caloriaProduto = $this->caloriaProduto;
			$produto->valorEnergeticoProduto = $this->valorEnergeticoProduto;
			$produto->carboidratoProduto = $this->carboidratoProduto;
			$produto->proteinaProduto = $this->proteinaProduto;
			$produto->sodioProduto = $this->sodioProduto;
			$produto->gordurasProduto = $this->gordurasProduto;
			$produto->codcategoriaProduto = $this->codcategoriaProduto;
			$produto->imagemProduto = $this->getImg();
            	
			if($produto::insert($produto)){
                header("location: ../produtocms/index");
            }
		}
        
	}

?>