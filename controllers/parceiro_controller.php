
<?php
	
	class parceiro_controller {

		public $nomeParceiro;
		public $codParceiro;
		public $cnpjParceiro;
		public $imgParceiro;
		public $siteParceiro;
		public $telefoneParceiro;
		public $emailParceiro;
        public $endereco;
        
        public function __construct(){
            
            require_once('models/parceiro_class.php');
			require_once('models/endereco_class.php');
        }
		
		public function iniciaAtributo(){
		
			
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
					
					 $this->nomeParceiro=$_POST['txtNome'];
					 $this->cnpjParceiro=$_POST['txtCnpj'];
					 $this->siteParceiro=$_POST['txtsite'];
					 $this->telefoneParceiro=$_POST['txtelefone'];
					 $this->emailParceiro=$_POST['txtemail'];
					 $this->imgParceiro = basename($_FILES["imgParceiro"]["name"]);										
            }     			
		}
	
		
		public function index(){
			$parceiro=new Parceiro();
			$this->endereco = new Endereco();

			$endereco=new Endereco();			
			$listaCidades = $endereco->cidade->selectAll();
			$listaEstados = $endereco->cidade->estado->selectAll();
			
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
				$parceiro=$c->selectById($id);
			}
			
			
			require_once('views/parceiro/cadastrar.php');
		}
		
        public function detalhe(){
            
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
		
			$atualizar = new Parceiro();
			$atualizar->codParceiro = $this->codParceiro;
			$atualizar->nomeParceiro = $this->nomeParceiro;
			$atualizar->siteParceiro = $this->siteParceiro;
			$atualizar->telefoneParceiro = $this->telefoneParceiro;
			$atualizar->emailParceiro = $this->emailParceiro;
			$atualizar->imgParceiro = $this->getImg();
			
			
					
			
			
			if($atualizar->update()){					
				header("location: ../parceiro/index".$this->codParceiro);
			}
		}
        
		public function deletar() {
			
			$codParceiro = $_GET['id'];
			
			$deletar = new Parceiro();
			if($deletar->delete($codParceiro)){
				header("location: ../../parceiro/index");
			}	
		}
		
		public function inserir() {
              $this->iniciaAtributo();
			$parceiro = new Parceiro();
			$atualizar->codParceiro = $this->codParceiro;
			$atualizar->nomeParceiro = $this->nomeParceiro;
			$atualizar->siteParceiro = $this->siteParceiro;
			$atualizar->telefoneParceiro = $this->telefoneParceiro;
			$atualizar->emailParceiro = $this->emailParceiro;
			$atualizar->imgParceiro = $this->getImg();
			
			if($parceiro::insert($parceiro)){
				header("location: ../parceiro/index");
				
			}
		}

	}

?>