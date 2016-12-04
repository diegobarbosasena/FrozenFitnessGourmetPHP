
<?php
	
	class parceiro_controller {

		public $nomeParceiro;
		public $codParceiro;
		public $cnpjParceiro;
		public $imagemParceiro;
		public $siteParceiro;
		public $telefoneParceiro;
		public $emailParceiro;
        public $endereco;
        
        public function __construct(){
            
            require_once('models/parceiro_class.php');
			require_once('models/endereco_class.php');
        }
		
		public function iniciaAtributo(){
		
			$this->endereco = new Endereco;
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
					
					 $this->codParceiro=$_POST['codParceiro'];
					 $this->nomeParceiro=$_POST['txtNome'];
					 $this->cnpjParceiro=$_POST['txtCnpj'];
					 $this->siteParceiro=$_POST['txtsite'];
					 $this->telefoneParceiro=$_POST['txttelefone'];
					 $this->emailParceiro=$_POST['txtemail'];
					 $this->imagemParceiro = basename($_FILES["imagemParceiro"]["name"]);	
					 
					 $this->endereco->logradouro = $_POST['txtlogradouro'];
					 $this->endereco->cep = $_POST['txtcep'];
					 $this->endereco->numero = $_POST['txtnumero'];
					 $this->endereco->bairro = $_POST['txtbairro'];
					 $this->endereco->complemento = $_POST['txtcomplemento'];
					 $this->endereco->cidade->codCidade = $_POST['codCidade'];
					 $this->endereco->cidade->estado->codEstado = $_POST['codEstado'];
					 	

            }     			
		}
		
		public function getImg(){
			
			$dir="conteudo/imagem/";
		
			$file= $dir . $this->imagemParceiro;
		
			
            if(strstr($this->imagemParceiro, '.jpg') || strstr($this->imagemParceiro, '.png')){
                if(move_uploaded_file($_FILES["imagemParceiro"]["tmp_name"],$file)){
					
					return $file;
                }else{
					return null;
				}
            }       
        }
		
	
        
		 public function index(){
            
			$atualizacao = 'inserir';
			$p = new Parceiro();
             
             $end = $p->endereco = new Endereco();

			$endereco=new Endereco();	
            
            $pesquisa ="";
             
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				
				$parceiro=$p->selectById($id);
                
			}else if(isset($_POST["txtPesquisa"])){
					
				$pesquisa = $_POST["txtPesquisa"];
            
                $listaParceiros = $p->selectByName($pesquisa);
                
              
            }else{
                
                //
                $listaParceiros= $p->selectAll();    
            }
             
            
			
           require_once('views/parceiro/index.php');
        }
		
		
		public function cadastrar(){
			
			$atualizacao = 'inserir';
			$parceiro=new Parceiro();
			$end = $parceiro->endereco = new Endereco();
			
			$listaCidades = $end->cidade->selectAll();
			
			$listaEstados = $end->cidade->estado->selectAll();
			
			if(isset($_GET['id']) && $_GET['id'] != ""){
				
				$id = $_GET['id'];
				$atualizacao = 'atualizar';
				
				$p = new Parceiro();
				$parceiro=$p->selectById($id);
			}
			
			
			require_once('views/parceiro/cadastrar.php');
		}
		
        public function detalhe(){
            
			$p=new Parceiro();
			$parceiro = $p->selectById($_GET['id']);
			
            require_once('views/parceiro/detalhe_parceiro.php');
            
        }
		
		public function listarTodos (){
			 
            $listarParceiro = new Parceiro();
            
            return $listarParceiro->selectAll();
			
			  
		}	
				
		
		
		public function buscar($codParceiro){
			
			$buscar = new Parceiro();
			return $buscar->selectById($codParceiro);
			
		}
		
		public function atualizar() {
		
	        $this->iniciaAtributo();
			$parceiro = new Parceiro();
			
			$parceiro->codParceiro = $this->codParceiro;
			$parceiro->nomeParceiro = $this->nomeParceiro;
			$parceiro->siteParceiro = $this->siteParceiro;
			$parceiro->telefoneParceiro = $this->telefoneParceiro;
			$parceiro->emailParceiro = $this->emailParceiro;
			$parceiro->cnpjParceiro = $this->cnpjParceiro;
			$parceiro->imagemParceiro = $this->getImg();
			
			$parceiro->endereco->logradouro = $this->endereco->logradouro;
			$parceiro->endereco->cep  = $this->endereco->cep;
			$parceiro->endereco->numero = $this->endereco->numero;
			$parceiro->endereco->bairro = $this->endereco->bairro;
			$parceiro->endereco->complemento = $this->endereco->complemento;
			$parceiro->endereco->cidade->codCidade = $this->endereco->cidade->codCidade;
			$parceiro->endereco->cidade->estado->codEstado = $this->endereco->cidade->estado->codEstado;
					
			//$parceiro->update();		
					
			if($parceiro->update()){					
				header("location: ../../parceiro/index");
			}
		}
        
		public function deletar() {
			
			$codParceiro = $_GET['id'];
			
			$deletar = new Parceiro();
			if($deletar->delete($codParceiro)){
				header("location: ../parceiro/index");
			}	
		}
		
		public function inserir() {
            $this->iniciaAtributo();
			$parceiro = new Parceiro();
			
			$parceiro->codParceiro = $this->codParceiro;
			$parceiro->nomeParceiro = $this->nomeParceiro;
			$parceiro->siteParceiro = $this->siteParceiro;
			$parceiro->telefoneParceiro = $this->telefoneParceiro;
			$parceiro->emailParceiro = $this->emailParceiro;
			$parceiro->cnpjParceiro = $this->cnpjParceiro;
			$parceiro->imagemParceiro = $this->getImg();
			
			$parceiro->endereco->logradouro = $this->endereco->logradouro;
			$parceiro->endereco->cep  = $this->endereco->cep;
			$parceiro->endereco->numero = $this->endereco->numero;
			$parceiro->endereco->bairro = $this->endereco->bairro;
			$parceiro->endereco->complemento = $this->endereco->complemento;
			$parceiro->endereco->cidade->codCidade = $this->endereco->cidade->codCidade;
			$parceiro->endereco->cidade->estado->codEstado = $this->endereco->cidade->estado->codEstado;
			
			if($parceiro::insert($parceiro)){
				header("location: ../parceiro/index");
				
			}
		}

	}

?>